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

Route::post('/update', [Homecontroller::class, 'update']);
Route::get('login', function () {
    return view("adminlogin");
});

Route::post('/verifilogin', [Homecontroller::class, "verifi"]);

Route::post('/critem', [Homecontroller::class, "store"]);
Route::get('/albumsview', [Homecontroller::class, "albumsview"]);

Route::get('/error', function () {
    return view("ERROR");
});
Route::get('album/{id}', [Homecontroller::class, 'album']);
Route::get('search', [Homecontroller::class, 'search']);
Route::get('about', [Homecontroller::class, 'about']);

Route::get('viewitem/{id}', [Homecontroller::class, 'viewitem']);
Route::post('search_for', [Homecontroller::class, 'search_for']);
Route::get('/contact', function () {
    return view("contacts");
});

//TODO:adminview
Route::group(['middleware' => 'auth'], function () {
    Route::post('/update', [Homecontroller::class, "update"]);

    Route::get('/test', function () {
        return view("test");
    });
    Route::get('/logout', [Homecontroller::class, "logout"]);

    Route::get('/adminview', [Homecontroller::class, 'adminview'])->name('post.getallpost');
    Route::get('/create', [Albums_ct::class, "create_item"]);
    Route::get('/statistic', [Homecontroller::class, "stats"]);
    Route::get('/create_album', function () {
        return view("create_album");
    });

    Route::post('/cralbum', [Albums_ct::class, "create_album"]);
    Route::post('/critem', [Homecontroller::class, "store"]);
    Route::get('delete/{id}', [Homecontroller::class, 'destroy']);
    Route::get('edit/{id}', [Homecontroller::class, 'edit']);
    Route::get('album_delete/{id}', [Albums_ct::class, 'destroy_album']);
    Route::get('album_edit/{id}', [Albums_ct::class, 'edit_album']);
    Route::post('/update_album', [Albums_ct::class, "update_album"]);

});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
