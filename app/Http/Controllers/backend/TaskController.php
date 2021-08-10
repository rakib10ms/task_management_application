<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Task;
use App\Models\backend\Category;
use Auth;


class TaskController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){
         $this->middleware('auth');
     }
     
    public function index()
    {
        $tasks=Task::orderBy('id','desc')->where('user_id',Auth::user()->id)->get();
        // dd($tasks);
        // exit();
        return view('backend.pages.tasklist.manage',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
     return view('backend.pages.tasklist.create',compact('categories'));
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
        $validatedData = $request->validate([
            'name' => 'required|unique:tasks',
            'description' => 'required',
            'category' => 'required',
        ]);
        $task=new Task();
        $task->name=$request->name;
        $task->category=$request->category;
        $task->user_id=Auth::user()->id;
        $task->description=$request->description;
        // $task->submission_date=$request->dateinfo;
        $task->status=$request->status;
        $task->save();
        return redirect()->route('task.manage')->with('success', 'Task Inserted Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task=Task::find($id);
        if(!is_null($task)){
            return view('backend.pages.tasklist.edit',compact('task'));
        }
        else{
            return redirect()->route('task.manage')->with('success', 'Task Updated Successfully');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task=Task::find($id);
        $task->name=$request->name;
        $task->description=$request->description;
        // $task->submission_date=$request->dateinfo;
        $task->status=$request->status;
        $task->save();
        return redirect()->route('task.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task=Task::find($id);
        if(!is_null($task)){
            $task->delete();
            return redirect()->route('task.manage');
        }
        else{
            return redirect()->route('task.manage');
        }
    }
}
