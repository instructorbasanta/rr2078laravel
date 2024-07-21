<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\StudentController;
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
})->name('login');

Route::post('login/verify',[\App\Http\Controllers\UserController::class,'verifyUser'])->name('login.verification');
Route::get('logout',[\App\Http\Controllers\UserController::class,'logout'])->name('logout');

Route::get('/backend/dashboard',function (){
    return view('backend.dashboard');
})->name('backend.dashboard')->middleware('auth');

//routes for loading student create form
Route::get('backend/student/create',[StudentController::class,'create'])->name('backend.student.create')->middleware('auth');
Route::post('backend/student',[StudentController::class,'store'])->name('backend.student.store')->middleware('auth');
//listing of data
Route::get('backend/student',[StudentController::class,'index'])->name('backend.student.index');



Route::get('/backend/setting/create',function (){
    return view('backend.setting.create');
})->name('backend.setting.create');


Route::get('/backend/setting',function (){
    return view('backend.setting.index');
})->name('backend.setting.index');
