<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Supoort\Facades\DB;

class TaskController extends Controller
{
    public function index(){

        $task=DB::table('task')->get();
        
        return view('index',compact('task'));
    }

    public function show($id){
        $task1=DB::table(tasks)->find($id);

        return view('task.show',compact('task1'));

    }
}
