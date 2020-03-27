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
        $task1=DB::table(task)->find($id);

        return view('task.show',compact('task1'));

    }
public function store(Request $Request){
       // dd($request);
        DB::table('task')->insert([
        'name'=>$request->name,
        'created_at' => now(),
        'updeted_at' => now(),
        ]);

        return redirect()->bake();
}

}

