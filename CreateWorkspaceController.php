<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CreateWorkspaceController extends Controller
{
public function showFormWorkspace()
    {
        // memanggil view tambah
        return view('FormWorkspace');
    }

    public function addDataFormWorkspace(Request $request){

	DB::table('Workspace')->insert([
		'workspace_name' => $request->ws_name,
		'workspace_description' => $request->ws_desc,
	]);

	return redirect('/workspace');
    }
}
