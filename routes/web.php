<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmailController;
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

Route::get('/', function () {
    return view('welcome');
});
//sending static email
Route::get('send-mail',[EmailController::class, 'index']);
//sending dynamic email
Route::get('/email', [EmailController::class, 'form']);
Route::get('/send-mail', [EmailController::class, 'send'])->name('sendmail');


