<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\userauthcontroller;
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


  Route::get("/display-form",[PostController::class,'display_form']);
  Route::post("/form-submit",[PostController::class,'form_submit']);
  Route::get('display-data',[PostController::class,'displaydata']);
  Route::get('delete-data/{id}',[PostController::class,'deletedata']);
  Route::get('edit-disp/{id}',[PostController::class,'editdisp']);
  Route::post('edit-data/{id}',[PostController::class,'editdata']);
  Route::post('edit-form/{id}',[PostController::class,'editdata']);
  //Route::post('search-record',[PostController::class,'search']);
  
route:: get('login', [userauthcontroller::class,'login']);
route:: get('register', [userauthcontroller::class,'register']);


Route::post('/create', [userauthcontroller::class,'create']);
Route::post('/check', [userauthcontroller::class,'check']);
Route::get('/profile', [userauthcontroller::class,'profile']);
Route::get('/logout', [userauthcontroller::class,'logout']);
Route::get('/joblist', [userauthcontroller::class,'joblist']);
Route::get('userdisplay',[userauthcontroller::class,'userdata']);
 Route::get('userdelete/{id}',[userauthcontroller::class,'deletedata']);
Route::get('useredit/{id}',[userauthcontroller::class,'useredit']);
//Route::post('usereditid/{id}',[userauthcontroller::class,'usereditform']);
Route::post('usereditform/{id}',[userauthcontroller::class,'usereditform']);