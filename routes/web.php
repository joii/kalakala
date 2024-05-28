<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\LanguageController;

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

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/book-a-session', function () {
    return view('frontend.book-a-session');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/meet-your-colourist', function () {
    return view('frontend.meet-your-colourist');
});

Route::get('/service', function () {
    return view('frontend.service');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/press', function () {
    return view('frontend.press');
});

/* Multi Language All Route */
Route::get('/language/thai', [LanguageController::class, 'Thai'])->name('language.thai');
Route::get('/language/english', [LanguageController::class, 'English'])->name('language.english');
