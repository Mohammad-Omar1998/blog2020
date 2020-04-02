<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){

        $task=DB::table('task')->get();
        
        return view('task.index',compact('task'));
    }

    public function show($id){
        $task=DB::table(task)->find($id);

        return view('task.show',compact('task'));

    }
     public function store(Request $request){
        //  dd($request);
             DB::table('task')->insert([
            'title' => $request->title,
            'created_at'=>now(),
            'updated_at'=>now(),
        
         ]); 
                return redirect()->back();

   }
    public function destroy($id){
           DB::table('task')->where('id' , '=' , $id)->delete();
           return redirect()->back();
        }

    public function edit($id){
            return view('task.edit',compact('task'));
    }

    }

