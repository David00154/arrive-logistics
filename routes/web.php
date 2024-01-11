<?php

use App\Http\Controllers\TrackParcelController;
use App\Livewire\Pages\ContactUs;
use App\Livewire\Pages\TrackParcel;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

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

Route::view('/', 'welcome')->name("home");
Route::view("/about", "about-us")->name("about");

Route::view("/get-quote", "request-a-quote")->name("get-quote");
Route::get("/track-item", TrackParcelController::class)->name("track-item");
Volt::route("/faqs", "pages.faqs")->name("faq");

Route::get("/contact-us", ContactUs::class)->name("contact-us");


// Route::group(["prefix"=> "our-services"], function () {
//     Route::view("/", "services")
// });
Route::view("our-services", "services");

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';