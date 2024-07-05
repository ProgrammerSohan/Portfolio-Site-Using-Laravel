<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */


Route::group(['middleware'=>'auth'], function(){
Route::get('/items',[ItemController::class,'index']);
Route::post('/items',[ItemController::class,'store']);
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout'); 
Route::get('/users',[ItemController::class,'usersList']);
});

Route::group(['middleware'=>'guest'],function(){
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerPost'])->name('register.post');
Route::get('/admin/login', [AuthController::class, 'login'])->name('login'); 
Route::post('/', [AuthController::class, 'loginPost'])->name('login.post'); 
Route::get('/',);

});

