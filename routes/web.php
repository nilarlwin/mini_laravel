<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

//Route::get("post",function(){
//    return "Hello World";
//});

//Route::get("post/{id}/{name}",function($id,$name){
 //   return $name;
//});
//Route::get("post",[PostController::class,"index"]);
//Route::get("post/{id}",[PostController::class,"show"]);
//Route::get("/post",[PostController::class,"show"]);
//Route::post('/post',[PostController::class,"store"])->middleware('admin');
//Route::get('/detail',[PostController::class,"detail"]);

Route::get('/post',[PostController::class,'create']);