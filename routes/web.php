<?php

use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

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

Route::get('/home2', function () {
    return view('welcome');
});
Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/', function () {
    return view('home.index');
});
Route::get('/home', function () {
    return view('home.index');
});


Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/home',[HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus',[HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/faq',[HomeController::class, 'faq'])->name('faq');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/references',[HomeController::class, 'references'])->name('references');
Route::post('/sendmessage',[HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/place/{id}',[HomeController::class, 'place'])->name('place');
Route::get('/categoryplaces/{id}',[HomeController::class, 'categoryplaces'])->name('categoryplaces');
Route::get('/addtofav/{id}',[HomeController::class, 'addtofav'])->name('addtofav');
Route::post('/getplace',[HomeController::class, 'getplace'])->name('getplace');
Route::get('/placelist/{search}',[HomeController::class, 'placelist'])->name('placelist');




//admin

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware('auth');

    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    #Place
    Route::prefix('place')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\PlaceController::class, 'index'])->name('admin_places');
        Route::get('create', [\App\Http\Controllers\Admin\PlaceController::class, 'create'])->name('admin_place_add');
        Route::post('store', [\App\Http\Controllers\Admin\PlaceController::class, 'store'])->name('admin_place_store');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\PlaceController::class, 'update'])->name('admin_place_update');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\PlaceController::class, 'edit'])->name('admin_place_edit');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\PlaceController::class, 'destroy'])->name('admin_place_delete');
        Route::get('show', [\App\Http\Controllers\Admin\PlaceController::class, 'show'])->name('admin_place_show');

    });


    #Place
    Route::prefix('message')->group(function () {
        Route::get('/', [MessageController::class, 'index'])->name('admin_message');
        Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
        Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
        Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');

    });



    #Place Image Gallery
    Route::prefix('image')->group(function () {
        Route::get('create/{place_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{place_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{place_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');

    });

    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {

    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');

});


Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('profile');

});



Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
