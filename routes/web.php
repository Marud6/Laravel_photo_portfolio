<?php

use App\Http\Controllers\Albums_ct;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [Homecontroller::class, "homepage"]);
//TODO:guestview

Route::group(['middleware' => 'guest'], function () {

    Route::post('/update', [Homecontroller::class, 'update']);
    Route::get('/admin', function () {
        return view("adminlogin");
    });

    Route::post('/verifilogin', [Homecontroller::class, "verifi"]);

    Route::post('/update', [Homecontroller::class, "update"]);

    Route::post('/critem', [Homecontroller::class, "store"]);
    Route::get('/albumsview', [Homecontroller::class, "albumsview"]);

    Route::get('/error', function () {
        return view("ERROR");
    });
    Route::get('album/{id}', [Homecontroller::class, 'album']);
    Route::get('hledani', [Homecontroller::class, 'search']);
    Route::get('about', [Homecontroller::class, 'about']);

    Route::get('viewitem/{id}', [Homecontroller::class, 'viewitem']);

});
//TODO:adminview
Route::group(['middleware' => 'guest'], function () {
    Route::get('/adminview', [Homecontroller::class, 'adminview'])->name('post.getallpost');
    Route::get('/create', function () {
        return view("createitem");
    });
    Route::get('/create_album', function () {
        return view("create_album");
    });
    Route::post('/cralbum', [Albums_ct::class, "create_album"]);
    Route::post('/critem', [Homecontroller::class, "store"]);
    Route::get('delete/{id}', [Homecontroller::class, 'destroy']);
    Route::get('edit/{id}', [Homecontroller::class, 'edit']);
});
