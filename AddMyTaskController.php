<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AddMytaskController extends Controller
{
    public function openAddMyTask()
    {
        return view('FormTask');
    }

    public function updateMyTask(Request $request){

        DB::table('Task')->insert([
            'task_name' => $request->taskname,
        ]);

        return redirect('/workspace');
    }
}
