<?php

use App\Http\Controllers\Admin\AdminHotelController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');


Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha( 'name')->name('test');
Route::redirect('/anasayfa', '/home');
Route::get('/hello', function () {
    return 'Hello World';
});
require __DIR__.'/auth.php';
//**************************HOME PAGE ROUTES*******************************
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');




//******************** ADMIN PANEL ROUTES ********************************************************
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[AdminHomeController::class, 'index'])->name('index');
//************************* GENERAL ROUTES ********************************************************
    Route::get('/setting',[AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting',[AdminHomeController::class, 'settingUpdate'])->name('setting.update');
//****************ADMİN MESSAGE ROUTES*****************************
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
    //****************ADMIN FAQ ROUTES*****************************
    Route::prefix('faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });


//********************ADMIN CATEGORY ROUTES ******************************************************
Route::prefix('category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    Route::get('/destroy/{id}','destroy')->name('destroy');
    Route::get('/show/{id}','show')->name('show');

});
//********************ADMIN HOTEL ROUTES ******************************************************
    Route::prefix('hotel')->name('hotel.')->controller(AdminHotelController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');

    });

    //********************ADMIN HOTEL IMAGE GALLERY ROUTES ******************************************************
    Route::prefix('image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{hid}', 'index')->name('index');
        Route::post('/store/{hid}','store')->name('store');
        Route::get('/destroy/{hid}/{id}','destroy')->name('destroy');

    });
});
Route::get('/hotel/{id}',[HomeController::class,'hotel'])->name('hotel');
Route::get('/categoryhotels/{id}/{slug}',[HomeController::class,'categoryhotels'])->name('categoryhotels');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
