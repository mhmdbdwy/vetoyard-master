<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/

//this is to redirect the hompage and landing url which is usuaullly / to another url
/*
Route::redirect('/', '/production/dashboard');
*/

Route::get('/', function() {
    return view('content.dashboard');
})->name('dashboard');

Route::get('/customers', function() {
    return view('content.customers');
})->name('customers');

Route::get('/settings', function() {
    return view('content.settings');
})->name('settings');

Route::get('/products', function() {
    return view('content.products');
})->name('products');



Route::get('/build', function () {
    return view('build');
})->middleware(['verify.shopify'])->name('home');