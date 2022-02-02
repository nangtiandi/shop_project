<?php

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

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::get('/about',function (){
    return view('about');
})->name('about');
Route::get('/services',function (){
    return view('services');
})->name('services');
Route::get('/contact',function (){
   return view('contact');
})->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware("auth")->group(function(){
    Route::resource('cart',\App\Http\Controllers\CartController::class);
    Route::view("test","test")->name('test');
    Route::post("test",[TestController::class,'test'])->name('test');
    Route::resource('order-item',\App\Http\Controllers\OrderItemController::class);
    Route::middleware('isAdmin')->group(function (){
        Route::resource('category',\App\Http\Controllers\CategoryController::class);
        Route::resource('brand',\App\Http\Controllers\BrandController::class);
    });
    Route::resource('orderCancel',\App\Http\Controllers\OrderCancelController::class);
    Route::resource('item',\App\Http\Controllers\ItemController::class);

    Route::resource('order',\App\Http\Controllers\OrderController::class);
    Route::post('order-confirm',[\App\Http\Controllers\OrderController::class,'orderConfirm'])->name('order.confirm');

    Route::prefix("profile")->name("profile.")->group(function(){
        Route::view("/","profile.index")->name('index');
        Route::get('/change-photo',[ProfileController::class,'updatePhotoView'])->name('update-photo');
        Route::post('/change-photo',[ProfileController::class,'updatePhoto'])->name('update-photo');
        Route::get("/change-password",[ProfileController::class,'changePassword'])->name('change-password');
        Route::post("/change-password",[ProfileController::class,'updatePassword'])->name('change-password');
    });
});
