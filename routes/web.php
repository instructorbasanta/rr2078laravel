<?php

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

//Route::get('/', function () {
//    dd("test");
//    return view('welcome');
//});

Route::get('/',[\App\Http\Controllers\FrontendController::class,'home']);

Route::get('/about',[\App\Http\Controllers\FrontendController::class,'about']);

Route::get('/login',function (){
    return view('user.login');
});

Route::get('/backend/dashboard',function (){
    return view('backend.dashboard');
})->name('backend.dashboard');



Route::get('/backend/setting/create',function (){
    return view('backend.setting.create');
})->name('backend.setting.create');


Route::get('/backend/setting',function (){
    return view('backend.setting.index');
})->name('backend.setting.index');