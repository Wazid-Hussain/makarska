<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
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

/*====== ADMIN ROUTES ==========*/

Route::prefix('admin')->group(function (){
    Route::get('/login', [AdminController::class, 'Index'])->name('login_form');
    Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');
    
    Route::resource('category', CategoryController::class);
  
});

/*===== END ADMIN ROUTES ======*/


// PAge Cotroller 
Route::get('/', [ListingController::class, 'index'])->name('index');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/listing', [PageController::class, 'listing'])->name('listing');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
// Page Controllers End


Route::get('/dashboard', function(){
    return view('user.dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/profile', [UserProfileController::class, 'create'])->middleware('auth');
Route::post('/edit-profile', [UserProfileController::class, 'update'])->middleware('auth');
Route::post('/add-image', [UserProfileController::class, 'addImage'])->middleware('auth');

Route::get('/add-listing', [ListingController::class, 'create'])->middleware('auth')->name('add-listing');
Route::post('/add-listing', [ListingController::class, 'store'])->middleware('auth');

Route::get('/my-listings', [ListingController::class, 'myListings'])->middleware('auth');


Route::get('/category-listing/{category}', [ListingController::class, 'categoryListing'])->name('category-listing');
Route::get('/single-listing/{listing}', [ListingController::class, 'singleListing'])->name('single-listing');
Route::post('/booking', [BookingController::class, 'store'])->name('add-booking');





require __DIR__.'/auth.php';