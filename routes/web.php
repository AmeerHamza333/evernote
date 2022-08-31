<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\LoginController;
 use App\Http\Controllers\ItemsController;
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
    if(session()->has('email')){
        return view('mainhome');
        }
    return view('home');
});

Route::get('/login', function () {
    if(session()->has('email')){
        return view('mainhome');
        }
    return view('login');
});

Route::get('/register', function () {
    if(session()->has('email')){
    return view('mainhome');
    }
    return view('register');
});

Route::get('/home', function(){
    if(session()->has('email')){
        return view('mainhome');
        }
        return view('home');
});

Route::get('/items', [ItemsController::class, 'itemsShow']);
Route::delete('/items/{id}', [ItemsController::class, 'destroyItem']);
Route::get('/items/{id}', [ItemsController::class, 'editItem']);
Route::get('/itemshow/{id}', [ItemsController::class, 'showItem']);

Route::post('/register', [LoginController::class, 'registerUser']);
Route::post('/login', [LoginController::class, 'loginUser']);
Route::post('/items', [ItemsController::class, 'itemStore']);

Route::get('/search', [ItemsController::class, 'searchItems']);

Route::put('/items/{id}', [ItemsController::class, 'updateItem']);

Route::put('/itemsupdate/{email}', [ItemsController::class, 'updateRegistration']);

Route::get('/logout', function(){
    if(session()->has('email')){
        session()->pull('email', null);
    }
return redirect('/');
});
