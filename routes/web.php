<?php

use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\FavcartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaceController;
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
Route::post('/getplace',[HomeController::class, 'getplace'])->name('getplace');
Route::get('/placelist/{search}',[HomeController::class, 'placelist'])->name('placelist');




//admin

Route::middleware('auth')->prefix('admin')->group(function () {
    #adminrole
    Route::middleware('admin')->group(function (){
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
    #review
    Route::prefix('review')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
    });

    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

    #Faq
    Route::prefix('faq')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
        Route::get('create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
        Route::post('store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
        Route::get('show', [\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');

    });
        #User
        Route::prefix('user')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::post('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');

        });


}); #admin
}); #auth

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {

    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [\App\Http\Controllers\UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}', [\App\Http\Controllers\UserController::class, 'destroymyreview'])->name('user_review_delete');

});


Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('profile');

    #Place
    Route::prefix('place')->group(function () {
        Route::get('/', [PlaceController::class, 'index'])->name('user_places');
        Route::get('create', [PlaceController::class, 'create'])->name('user_place_add');
        Route::post('store', [PlaceController::class, 'store'])->name('user_place_store');
        Route::post('update/{id}', [PlaceController::class, 'update'])->name('user_place_update');
        Route::get('edit/{id}', [PlaceController::class, 'edit'])->name('user_place_edit');
        Route::get('delete/{id}', [PlaceController::class, 'destroy'])->name('user_place_delete');
        Route::get('show', [PlaceController::class, 'show'])->name('user_place_show');

    });
    #Place Image Gallery
    Route::prefix('image')->group(function () {
        Route::get('create/{place_id}', [PlaceController::class, 'create'])->name('user_image_add');
        Route::post('store/{place_id}', [PlaceController::class, 'store'])->name('user_image_store');
        Route::get('delete/{id}/{place_id}', [PlaceController::class, 'destroy'])->name('user_image_delete');
        Route::get('show', [PlaceController::class, 'show'])->name('user_image_show');

});

    #Favcart
    Route::prefix('favcart')->group(function () {
        Route::get('/', [FavcartController::class, 'index'])->name('user_favcart');
        Route::post('store/{id}', [FavcartController::class, 'store'])->name('user_favcart_add');
        Route::post('update/{id}', [FavcartController::class, 'update'])->name('user_favcart_update');
        Route::get('delete/{id}', [FavcartController::class, 'destroy'])->name('user_favcart_delete');

    });
});



Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
