<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskFisrtController;
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

Route::get('/', [TaskFisrtController::class, 'login']);

Route::get('/reg', [TaskFisrtController::class, 'reg']);
Route::post('/regStore', [TaskFisrtController::class, 'regStore']);

Route::get('/login', [TaskFisrtController::class, 'login']);
Route::post('/loginStore', [TaskFisrtController::class, 'loginStore']);

Route::get('/home', [TaskFisrtController::class, 'home'])->middleware('isLoggedIn');

Route::get('/logout', function () {
    if (session()->has('name')) {
        session()->pull('name');
    }
    return redirect('login');
});
