<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Homecontroller::class,"homepage"]);
Route::get('/adminview', [Homecontroller::class, 'adminview']) ->name('post.getallpost');
Route::get('/admin', function () {
  return view("adminlogin");
});


Route::get('/create', function () {
  return view("createitem");
});
Route::post('/verifilogin', [Homecontroller::class,"verifi"]);

Route::post('/critem', [Homecontroller::class,"store"]);


Route::get('album',[Homecontroller::class, 'album']);


Route::get('delete/{id}',[Homecontroller::class, 'destroy']);
Route::get('edit/{id}',[Homecontroller::class, 'edit']);
Route::post('update',[Homecontroller::class, 'update']);

Route::get('viewitem/{id}',[Homecontroller::class, 'viewitem']);

