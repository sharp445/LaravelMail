<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
// email send
Route::get ('index',[MailController::class,'mailform'])->name('mailform');
Route::post ('/send-mail',[MailController::class,'maildata'])->name('send_mail');


