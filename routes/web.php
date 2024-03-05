<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\authentications\Myprofile;
use App\Http\Controllers\managing\manage;
use App\Http\Controllers\pages\History;
//use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\pages\Dashboard;
use App\Http\Controllers\Settings\Account;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

// Main Page Route
Route::get('/', [Dashboard::class, 'index'])->name('dashboard');
Route::get('/map', [HomePage::class, 'index'])->name('map');
Route::get('/locations', [Page2::class, 'index'])->name('locations');
Route::get('/report', [History::class, 'index'])->name('report');

//PROFILE

Route::get('/auth/my-profile', [Myprofile::class, 'profile'])->name('my-profile');
Route::get('/auth/my-security', [Myprofile::class, 'security'])->name('my-security');
Route::get('/auth/my-notification', [Myprofile::class, 'notification'])->name('my-notification');

//Settings
Route::get('/account-settings', [Account::class, 'account'])->name('account-settings');
Route::get('/account-security', [Account::class, 'security'])->name('account-security');
Route::get('/account-notification', [Account::class, 'notification'])->name('account-notification');

//Manage
Route::get('/roles', [Manage::class, 'roles'])->name('roles');
Route::get('/permission', [Manage::class, 'permission'])->name('permission');

// locale
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
  Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashboard');
});

// Auth::routes();

Route::get('/roles-and-permissions', [App\Http\Controllers\HomeController::class, 'index'])->name(
  'roles-and-permissions'
);

Route::resources([
  'roles' => RoleController::class,
  'users' => UserController::class,
]);
