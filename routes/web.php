<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\WorksController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\Admin\MastersController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\FreeplaceController;
use App\Http\Controllers\Admin\RecordingController;


Route::get('/',[MainController::class,'index'])->name('home');
Route::get('/works',[MainController::class,'work'])->name('work');
Route::get('/stocks',[MainController::class,'stock'])->name('stock');
Route::get('/contacts',[MainController::class,'contact'])->name('contact');
Route::get('/about',[MainController::class,'about'])->name('about');
Route::get('/price',[MainController::class,'price'])->name('price');
Route::post('/rewiews',[MainController::class,'addRewiews'])->name('rewiews');



Route::get('/recorde/service',[RecordController::class,'index'])->name('service');
Route::get('/recorde/master',[RecordController::class,'master'])->name('master');
Route::get('/recorde/data',[RecordController::class,'dataRecode'])->name('dataRecode');
// Route::post('/recorde/data',[RecordController::class,'dataRecod'])->name('dataRecod');
Route::get('/recorde',[RecordController::class,'recode'])->name('recorde');
Route::get('/record',[RecordController::class,'recodeBase'])->name('recodeBase');
// Route::get('/record',[RecordController::class])->name('dataR');
Route::post('/recorde/data',[RecordController::class,'recod'])->name('recod');


Route::get('/login',[MainController::class,'login'])->name('login');
Route::post('/login',[MainController::class,'login_admin'])->name('login_admin');

Route::middleware(['auth','role:1'])->prefix('admin_panel')->group(function(){
  Route::get('/',[MainController::class,'adminPanel'])->name('adminIndex');
Route::resource('works',WorksController::class);
Route::resource('masters',MastersController::class);
Route::resource('contact',ContactsController::class);
Route::resource('stock',StockController::class);
Route::resource('services',ServicesController::class);
Route::resource('freeplace',FreeplaceController::class);
Route::resource('recording',RecordingController::class);
});