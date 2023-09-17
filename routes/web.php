<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurteamController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ContactController;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');;
Route::get('/ourteam', [OurteamController::class, 'index']);
Route::get('/partner/{slug}', [PartnerController::class, 'show'])->name('partner.show');


Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');
