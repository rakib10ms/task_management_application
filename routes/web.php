<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\TaskController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/dashboard",function(){
//   return view('backend.dashboard');
// });

// Route::get('/allTask',[PageController::class,'allTask'])->name('allTask');

Route::group(['prefix'=>'user', 'middleware' => ['auth:web']],function (){
  Route::get('/dashboard',[PageController::class,'dashboard'])->name('user.dashboard');
  Route::group(['prefix'=>'myTask'],function (){
  Route::get('/manage',[TaskController::class,'index'])->name('task.manage');   
  Route::get('/create',[TaskController::class,'create'])->name('task.create'); 
  Route::post('/store',[TaskController::class,'store'])->name('task.store');

     Route::get('/edit/{id}',[TaskController::class,'edit'])->name('task.edit'); 
     Route::post('/edit/{id}',[TaskController::class,'update'])->name('task.update');
     Route::post('/destroy/{id}',[TaskController::class,'destroy'])->name('task.destroy');


  });

});


Route::group(['prefix'=>'admin', 'middleware' => ['auth:web']],function (){
  Route::get('/',[AdminController::class,'index'])->name('admin.dashboard');
  Route::get('/allUser',[AdminController::class,'allUser'])->name('admin.allUser');
  Route::get('/allTask',[AdminController::class,'allTask'])->name('admin.allTask');
  Route::group(['prefix'=>'myTask'],function (){
    Route::get('/manage',[CategoryController::class,'index'])->name('admin.category.manage');   
    Route::get('/create',[CategoryController::class,'create'])->name('admin.category.create'); 
    Route::post('/store',[CategoryController::class,'store'])->name('admin.category.store');
  
       Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit'); 
       Route::post('/edit/{id}',[CategoryController::class,'update'])->name('admin.category.update');
       Route::post('/destroy/{id}',[CategoryController::class,'destroy'])->name('admin.category.destroy');
  
  
    });
  

});



require __DIR__.'/auth.php';
