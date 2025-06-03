<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/trading', [HomeController::class, 'trading'])->name('trading');
Route::get('/technology', [HomeController::class, 'technology'])->name('technology');

Route::get('aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('news', [HomeController::class, 'news'])->name('news');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('studio', [HomeController::class, 'studio'])->name('studio');

Route::post('contact', [HomeController::class, 'contactus'])->name('contactus');
Route::post('newsletter' , [HomeController::class, 'newsletter'])->name('newsletter');