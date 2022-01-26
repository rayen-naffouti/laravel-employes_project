<?php
use App\Http\Controllers\PersonnelController;

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

// Route::get('user', [App\Http\Controllers\AuthController::class, 'user']);
// Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'create']);
Route::resource('user', 'userController');

Route::resource('personnels', 'PersonnelController');