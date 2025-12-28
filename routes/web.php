<?php

use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Auth\LoginController;
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
    return view('/front/index');
});

Auth::routes(['register'=>false]);

Route::get('login',function(){
  return abort('404');
});


Route::middleware('auth')->prefix('dashboard/panel/')->group(function(){

    Route::get('admin',function(){
      return view('panel/index');
    })->name('panel.dashboard');

    Route::resource('/seo',SeoController::class)->parameters(['seo'=>'id']);

    //crud slider

    Route::resource('slider',SliderController::class)->parameters(['slider'=>'id']);


    //end crud slider
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


