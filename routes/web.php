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
Route::get('/clear-cache', function() {
   return \Illuminate\Support\Facades\Artisan::call('config:cache');
});
//Route::get('/', [App\Http\Controllers\PageManageController::class, 'home'])->name('home');
Route::get('/', [App\Http\Controllers\PageManageController::class, 'homeTwo'])->name('home2');
Route::get('/about-us', [App\Http\Controllers\PageManageController::class, 'aboutUs'])->name('about_us');
Route::get('/business-wings', [App\Http\Controllers\PageManageController::class, 'businessWings'])->name('business_wings');
Route::get('/business-wings/{name}', [App\Http\Controllers\PageManageController::class, 'businessWingDetails'])->name('business_wing_details');
