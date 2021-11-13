<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ListingController;

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
    return view('home');
})->name('index');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/listing', function(){
    return view('listing');
})->name('listing');

Route::get('/blog', function(){
    return view('blog');
})->name('blog');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');


Route::get('/dashboard', function(){
    return view('user.dashboard');
})->middleware('auth');

Route::GET('/profile', [UserProfileController::class, 'create'])->middleware('auth');
Route::post('/edit-profile', [UserProfileController::class, 'update'])->middleware('auth');
Route::post('/add-image', [UserProfileController::class, 'addImage'])->middleware('auth');

Route::get('/add-listing', [ListingController::class, 'create'])->middleware('auth')->name('add-listing');
Route::post('/add-listing', [ListingController::class, 'store'])->middleware('auth');