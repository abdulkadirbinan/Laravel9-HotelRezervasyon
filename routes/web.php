<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view ('home.index',['name' => 'apoo']);
});
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha( 'name')->name('test');
Route::redirect('/anasayfa', '/home');
Route::get('/hello', function () {
    return 'Hello World';
});
require __DIR__.'/auth.php';

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
