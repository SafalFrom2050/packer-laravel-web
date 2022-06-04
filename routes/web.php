<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\NewsletterEmailsController;
use App\Http\Controllers\QuotationsController;
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
    return view('index');
})->name('home');


Route::post('/contact', [MessagesController::class, 'store'])->name('messages.store');
Route::post('/newsletter', [NewsletterEmailsController::class, 'store'])->name('newsletter-emails.store');
Route::post('/quotation', [QuotationsController::class, 'store'])->name('quotations.store');
