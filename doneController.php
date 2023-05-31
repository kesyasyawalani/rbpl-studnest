<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class doneController extends Controller
{
    public function openWorkspace($id){

    //tolong bgt ini harusnya workspacenya kebuka sesuai id tp aku bingung
    $task = DB::table('Task')->get();
    $workspace = DB::table('Workspace')->get();

    return view('workspace',['task' => $task , 'workspace' => $workspace]);
    }

    /*public function doneTask(){
        //read and insert checkbox in database
        if(isset($_POST['submit'])){
            //check checkbox slected or not
            if(!empty($_POST['tasks'])){
                $tasks = implode(",",$_POST['tasks']);

                //insert and update record
                $checkEntries = mysqli_query($con,"SELECT * FROM Task");
              if(mysqli_num_rows($checkEntries) == 0){
                   mysqli_query($con,"INSERT INTO finishedTask() VALUES('".$tasks."')");
              }else{
                   mysqli_query($con,"UPDATE Task SET language='".$tasks."' ");
              }
            }
        }

        return redirect('/workspace');
    }*/

}
