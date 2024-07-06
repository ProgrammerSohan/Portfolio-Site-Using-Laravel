<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
Route::get('/dash',[ItemController::class,'index']);
Route::post('/items',[ItemController::class,'store']);
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout'); 
Route::get('/users',[ItemController::class,'usersList']);
});

Route::group(['middleware'=>'guest'],function(){
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerPost'])->name('register.post');
Route::get('/admin/login', [AuthController::class, 'login'])->name('login'); 
Route::post('/admin/login', [AuthController::class, 'loginPost'])->name('login.post'); 

//Home Route
Route::get('/',[HomeController::class,'index']);

});

//Laravel Routes
//a
Route::get('/test1', function(){
    return 'Hello, Sohan!';
});
//b
Route::get('/test2',function(){
    return "Test2 is running";
});

//sample website
Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('about', function(){
    return view('about');
});

Route::get('products', function(){
     return view('products');
});

Route::get('services', function(){
    return view('services');
});

//Route Parameters
/********** */
//Required Parameters
Route::get('/user/{id}', function($id){
    return 'User Id: ' . $id;
});

//Optional Parameters
Route::get('/testuser/{name?}', function($name = 'Guest'){
    return 'User Name: ' . $name;
});

//Parameters with constraints
Route::get('/usercons/{id}', function($id){
    return 'User ID: ' . $id;
})->where('id','[0-9]+'); //http://localhost:8000/usercons/112
