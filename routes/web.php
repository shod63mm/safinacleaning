<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Counter;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KlientController;
use App\Http\Controllers\DahboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\HomeController;
 
Route::get('/counter', Counter::class);

Route::group(['middleware'=>'guest'], function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login1');
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', [DahboardController::class, 'dashboard'])->name('dashboard');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/userlist', [DahboardController::class, 'userlist'])->name('userlist');
    Route::delete('/users/{id}', [DahboardController::class, 'userdelete'])->name('users.delete');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register1');

    Route::get('/userregister', [KlientController::class, 'register'])->name('userregister');
    Route::post('/userregister', [KlientController::class, 'registerPost'])->name('userregister1');
    Route::get('/klientlist', [KlientController::class, 'klientlist'])->name('klientlist');
    Route::delete('/klientlist/{id}', [KlientController::class, 'klientlistdelete'])->name('klientlist.delete');

    Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

    Route::get('/orders/list', [OrderController::class, 'list'])->name('orderlist');

    Route::get('orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
    Route::put('orders/{order}', [OrderController::class, 'update'])->name('orders.update');




});


Route::get('/sms', [SmsController::class, 'index'])->name('sms');
Route::post('/sms/send', [SmsController::class, 'sendSms'])->name('send.sms');
Route::post('/send-sms-to-clients', [SmsController::class, 'sendSMSToClients'])->name('send.sms.to.clients');
Route::post('/ordershome', [HomeController::class, 'store'])->name('orders.home');
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
