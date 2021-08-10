<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\backend\Task;
use Auth;
class AdminController extends Controller
{
    //

    public function index()
    {
        
        return view('backend.pages.adminTask.dashboard'); 
    }
    public function allUser()
    {
        $users=User::where('id','!=',Auth::user()->id)->get();

        return view('backend.pages.adminTask.userview',compact('users'));
    }


    public function allTask()
    {
    
        $role=Auth::user()->role;
       if($role=='admin'){
           $tasks=Task::all();
       
        return view('backend.pages.adminTask.allTask',compact('tasks'));
       }
       else{
        return view('backend.dashboard');
       }
       

       
    }
}
