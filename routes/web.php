<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\TopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/five',[TopController::class,'index']) ;

Route::get('/five/about',[TopController::class,'about']) ;
Route::get('/five/company',[TopController::class,'company']) ;

Route::get('/five/contact',[TopController::class,'contact']) ;

Route::post('/five/edit',[TopController::class,'edit']) ;
// Route::get('/five/edit',[TopController::class,'edit']) ;


Route::get('/five/recruit',[TopController::class,'recruit']) ;
Route::get('/five/service',[TopController::class,'service']) ;

Route::get('/five/privacy',[TopController::class,'privacy']) ;
Route::get('/five/info',[TopController::class,'info']) ;

Route::post('/five/mail', [MailController::class, 'send']);