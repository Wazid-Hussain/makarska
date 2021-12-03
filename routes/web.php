<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PaymentController;
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


/*====== CUSTOMER ROUTES ==========*/
Route::prefix('customer')->group(function (){
    Route::get('/login', [CustomerController::class, 'Index'])->name('customer_login_form');
    Route::post('/login/customer', [CustomerController::class, 'Login'])->name('customer_login');
    Route::post('/register/customer', [CustomerController::class, 'Register'])->name('customer_register');
    Route::get('/dashboard', [CustomerController::class, 'Dashboard'])->name('customer.dashboard')->middleware('customer');
    Route::post('/logout', [CustomerController::class, 'CustomerLogout'])->name('customer_logout')->middleware('customer');    
 
    Route::get('/profile', [CustomerProfileController::class, 'create'])->middleware('customer')->name('customer_profile');
    Route::post('/edit-profile', [CustomerProfileController::class, 'update'])->middleware('customer')->name('customer_edit_profile');
    Route::post('/add-image', [CustomerProfileController::class, 'addImage'])->middleware('customer')->name('customer_add_image');
    Route::get('/change-password', [CustomerProfileController::class, 'changePasswordView'])->middleware('customer')->name('customer_change_password');
    Route::post('/change-password', [CustomerProfileController::class, 'changePassword'])->middleware('customer')->name('customer_change_password');    
    
    Route::get('/bookings', [BookingController::class, 'userBooking'])->middleware('customer')->name('customer_booking');  
});
/*===== END CUSTOMER ROUTES ======*/

/*====== PAGE  ROUTES ==========*/
Route::get('/', [ListingController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/accommodations', [PageController::class, 'accommodations'])->name('accommodations');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/signup', [PageController::class, 'signup'])->name('signup');
Route::post('/search', [searchController::class, 'search'])->name('search');
/*====== PAGE  ROUTES  End==========*/


/*====== HOST  ROUTES ==========*/
Route::get('/dashboard', function(){
    return view('user.dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/profile', [UserProfileController::class, 'create'])->middleware('auth');
Route::post('/edit-profile', [UserProfileController::class, 'update'])->middleware('auth');
Route::post('/add-image', [UserProfileController::class, 'addImage'])->middleware('auth');
Route::get('/change-password', [UserProfileController::class, 'changePasswordView'])->middleware('auth');
Route::post('/change-password', [UserProfileController::class, 'changePassword'])->middleware('auth');

Route::get('/add-listing', [ListingController::class, 'create'])->middleware('auth')->name('add-listing');
Route::post('/add-listing', [ListingController::class, 'store'])->middleware('auth');

Route::get('/edit-listing/{id}', [ListingController::class, 'edit'])->middleware('auth')->name('edit-listing');
Route::post('/edit-listing/{id}', [ListingController::class, 'update'])->middleware('auth');


Route::get('/my-listings', [ListingController::class, 'myListings'])->middleware('auth');
Route::get('/my-bookings', [BookingController::class, 'index'])->middleware('auth');

Route::get('/category-listing/{category}', [ListingController::class, 'categoryListing'])->name('category-listing');
Route::get('/single-listing/{listing}', [ListingController::class, 'singleListing'])->name('single-listing');

Route::match(['GET','POST'], '/booking', [BookingController::class, 'store'])->name('add-booking');
/*====== HOST  ROUTES END ==========*/

/*====== LANGUAGE  ROUTES ==========*/
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
/*====== LANGUAGE  ROUTES END==========*/


/*====== SOCIAL LOGIN  ROUTES ==========*/
Route::get('/sign-in/facebook', [SocialLoginController::class, 'facebook']);
Route::get('/sign-in/facebook/redirect', [SocialLoginController::class, 'facebookRedirect']);
/*====== SOCIAL LOGIN  ROUTES END==========*/


/*====== PAYMENT  ROUTES ==========*/
Route::post('/payment', [PaymentController::class, 'index'])->name('personalStep');
Route::get('/payment-step-2', [PaymentController::class, 'billingStepPage'])->name('billingStep');
Route::post('/payment-step-2', [PaymentController::class, 'billingStep'])->name('billingStep');
Route::get('/payment-step-3', [PaymentController::class, 'paymentStepPage'])->name('paymentStep');
Route::post('/payment-step-3', [PaymentController::class, 'paymentStep'])->name('paymentStep');
Route::get('/payment-step-4', [PaymentController::class, 'thankyouStep']);
/*====== PAYMENT  ROUTES END==========*/

/*====== DEFAULT AUTH  ROUTES ==========*/
require __DIR__.'/auth.php';