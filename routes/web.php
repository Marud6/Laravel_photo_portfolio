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
Route::post('/update',[Homecontroller::class, 'update']);

Route::get('/', [Homecontroller::class,"homepage"]);
Route::get('/adminview', [Homecontroller::class, 'adminview']) ->name('post.getallpost');
Route::get('/admin', function () {
  return view("adminlogin");
});


Route::get('/create', function () {
  return view("createitem");
});
Route::post('/verifilogin', [Homecontroller::class,"verifi"]);

Route::post('/update', [Homecontroller::class,"update"]);


Route::post('/critem', [Homecontroller::class,"store"]);
Route::get('/albums', [Homecontroller::class,"albums"]);
Route::get('/albumsview', [Homecontroller::class,"albumsview"]);

Route::get('/error', function () {
  return view("ERROR");
});
Route::get('album/{id}',[Homecontroller::class, 'album']);
Route::get('hledani',[Homecontroller::class, 'search']);


Route::get('delete/{id}',[Homecontroller::class, 'destroy']);
Route::get('edit/{id}',[Homecontroller::class, 'edit']);

Route::get('viewitem/{id}',[Homecontroller::class, 'viewitem']);

