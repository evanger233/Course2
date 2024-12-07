<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Index\HomeController;
use App\Http\Controllers\Index\RegisterController;
use App\Http\Controllers\Index\LoginController;
use App\Http\Controllers\Index\AboutController;
use App\Http\Controllers\Index\ContactController;
use App\Http\Controllers\Index\ArticleController;


use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PageController;

use App\Http\Controllers\Admin\ContactController as AdminConnactController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');


Route::get('register', [RegisterController::class, 'showRegisterPage'])->middleware('guest')->name('register');
Route::post('register', [RegisterController::class, 'register'])->middleware('guest');

Route::get('login', [LoginController::class, 'showLoginPage'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'login'])->middleware('guest');

Route::get('contact', [ContactController::class, 'showContactForm'])->name('contact.form');
Route::post('contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');

Route::get('about', [AboutController::class, 'show'])->name('about');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::post('articles/{article}/like', [ArticleController::class, 'like'])->name('article.like');
Route::get('article/{article}', [ArticleController::class, 'show'])->name('article.show');



// 退出
Route::get('logout', [LoginController::class, 'logout'])->name('logout');




Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AdminLoginController::class, 'displayLoginForm'])->name('login');
    Route::post('login', [AdminLoginController::class, 'login']);
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');
    
    Route::get('articles', [AdminArticleController::class, 'list'])->name('articles.list');
    Route::get('articles/create', [AdminArticleController::class, 'create'])->name('articles.create');
    Route::post('articles', [AdminArticleController::class, 'store'])->name('articles.store');
    Route::get('articles/{id}/edit', [AdminArticleController::class, 'edit'])->name('articles.edit');
    Route::put('articles/{id}', [AdminArticleController::class, 'update'])->name('articles.update');
    Route::delete('articles/{id}', [AdminArticleController::class, 'destroy'])->name('articles.destroy');

    Route::resource('admins', AdminController::class);
    Route::resource('users', UserController::class); 
    
    
    Route::get('pages/edit', [PageController::class, 'edit'])->name('pages.edit');
    Route::put('pages', [PageController::class, 'update'])->name('pages.update');

    Route::get('contacts', [AdminConnactController::class, 'index'])->name('contacts.index');
    Route::delete('contacts/{contact}', [AdminConnactController::class, 'destroy'])->name('contacts.destroy');
 

    Route::middleware(['auth:admins'])->get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});