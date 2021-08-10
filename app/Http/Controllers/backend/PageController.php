<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\backend\Task;
use App\Models\User;



class PageController extends Controller
{
    /**
     * Display the dashboard page
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        //return view dashboard;
        $role=Auth::user()->role;
       if($role=='admin'){
        return redirect('admin');
       }
       else{
        return view('backend.dashboard');
       }
       


    }

    

}
