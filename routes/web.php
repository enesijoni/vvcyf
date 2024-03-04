<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\FrontImagController;
use App\Http\Controllers\BlogImgContoller;
use App\Http\Controllers\UsersController;

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
    return view('index');
});

Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact');
Route::get('/child-protection', [ContactUsController::class, 'childprotection'])->name('childprotection');
Route::get('/downloadd', [ContactUsController::class, 'downloadd'])->name('downloadd');
Route::get('/about-us', [ContactUsController::class, 'aboutus'])->name('aboutus');
Route::get('/', [ContactUsController::class, 'home'])->name('home');
Route::get('/raising-awareness', [ContactUsController::class, 'raising'])->name('raising');
Route::get('/blog', [ContactUsController::class, 'blog'])->name('blog');
Route::get('/out-reaching-services', [ContactUsController::class, 'outreaching'])->name('outreaching');
Route::get('/promoting-hardwork-and-self-discipline', [ContactUsController::class, 'promotinghardwork'])->name('promotinghardwork');

 Route::group(['middleware'=>'auth'],function(){

Route::get('/admin-index', [Admin::class, 'index'])->name('admin');
Route::get('/index-pic', [Admin::class, 'indexpic'])->name('indexpic');
Route::post('/add-frontimg', [FrontImagController::class, 'store'])->name('add.frontimg');
Route::get('/fetchall', [FrontImagController::class, 'fetchAll'])->name('frontimg.fetchAll');
Route::post('/delete-frontimg', [FrontImagController::class, 'destroy'])->name('delete.frontimg');

Route::get('/blog-img', [BlogImgContoller::class, 'index'])->name('blogimg');
Route::post('/add-blogimg', [BlogImgContoller::class, 'store'])->name('add.blogimg');
Route::get('/blog-fetchall', [BlogImgContoller::class, 'fetchAll'])->name('blogimg.fetchAll');
Route::post('/delete-blogimg', [BlogImgContoller::class, 'destroy'])->name('delete.blogimg');

Route::post('/load_more', [BlogImgContoller::class, 'load_data'])->name('loadmore.load_data');

Route::get('/reg-user', [UsersController::class, 'index'])->name('reg.user');
Route::post('/add-user', [UsersController::class, 'store'])->name('add.user');

Route::get('/logout', [UsersController::class, 'logout'])->name('logout');
   });
Route::post('/login', [UsersController::class, 'login'])->name('login');
Route::get('/login-form', [UsersController::class, 'loginpage'])->name('user.login');