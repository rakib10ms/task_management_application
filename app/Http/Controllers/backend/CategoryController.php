<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Category;
// use App\Models\backend\Task;



class CategoryController extends Controller
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
        $categories=Category::orderBy('id','desc')->get();
        // dd($tasks);
        // exit();
        return view('backend.pages.adminTask.manage',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('backend.pages.adminTask.create');
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
            'name' => 'required|unique:categories',
            'description' => 'required',
            'status'=>'required',
        ]);
        $category=new Category();
        $category->name=$request->name;
        $category->description=$request->description;
        $category->status=$request->status;
        $category->save();
        return redirect()->route('admin.category.manage')->with('success', 'Task Inserted Successfully');

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
        $category=Category::find($id);
        if(!is_null($category)){
            return view('backend.pages.adminTask.edit',compact('category'));
        }
        else{
            return redirect()->route('admin.category.manage')->with('success', 'Task Updated Successfully');
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
        $category=Category::find($id);
        $category->name=$request->name;
        $category->description=$request->description;
        $category->status=$request->status;
        $category->save();
        return redirect()->route('admin.category.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        if(!is_null($category)){
            $category->delete();
            return redirect()->route('admin.category.manage');
        }
        else{
            return redirect()->route('admin.category.manage');
        }
    }
}
