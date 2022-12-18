<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\frontend\PostsController;
use App\Http\Controllers\frontend\MotelsController;
use App\Http\Controllers\userProfilesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DuyetBaiController;
use App\Http\Controllers\friendsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\messagesController;
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

Route::prefix('administrator')->group(function(){   
    Route::get('dashboard',[AuthController::class ,'getDashboard'])->name('show-dashboard')->middleware('checkadmin');
    Route::get('login',[AuthController::class ,'getShowLogin'])->name('show-login')->middleware('checklogout');
    Route::post('login',[AuthController::class ,'getlogin'])->name('login');
    Route::get('logout',[AuthController::class ,'getLogout'])->name('logout');
    Route::get('show-categories',[CategoryController::class ,'index'])->name('show-category');
    Route::get('show-add-categories',[CategoryController::class ,'create'])->name('form-category');
    Route::get('show-edit-categories/{id}',[CategoryController::class ,'show'])->name('form-edit');

    Route::post('add-category',[CategoryController::class ,'store'])->name('add-category');
    Route::post('edit-category/{id}',[CategoryController::class ,'update'])->name('edit-category');
    Route::get('delete-category/{id}',[CategoryController::class ,'destroy'])->name('delete-category');

    Route::get('duyet-bai',[DuyetBaiController::class ,'showTT'])->name('duyet-bai');
    Route::get('duyet-bai-pd',[DuyetBaiController::class ,'showproduct'])->name('s-pd');
    Route::get('duyet-bai-pt',[DuyetBaiController::class ,'showPost'])->name('s-pt');
    Route::get('duyet-bai-mt',[DuyetBaiController::class ,'showMotel'])->name('s-mt');
    Route::get('deleteData/{id}',[DuyetBaiController::class ,'destroy']);
    Route::get('deleteDataPost/{id}',[DuyetBaiController::class ,'destroyPost']);
    Route::get('deleteDataMotel/{id}',[DuyetBaiController::class ,'destroyMotel']);
    Route::get('editProduct/{id}',[DuyetBaiController::class ,'showEditProduct'])->name('showEditProduct-product');
    Route::get('editPost/{id}',[DuyetBaiController::class ,'showEditPost']);
    Route::get('editMotel/{id}',[DuyetBaiController::class ,'showEditMotel']);
    Route::get('editprofiles/{id}',[DuyetBaiController::class ,'showEditProfiles']);
    Route::post('edit-Product/{id}',[DuyetBaiController::class ,'editProduct']);
    Route::post('edit-Post/{id}',[DuyetBaiController::class ,'editPost']);
    Route::post('edit-Motel/{id}',[DuyetBaiController::class ,'editMotel']);
    Route::post('edit-Profiles/{id}',[DuyetBaiController::class ,'editProfiles']);



});


// home page
Route::prefix('home')->group(function(){
    Route::get('page/{id}',[userProfilesController::class ,'getHomePage'])->name('home-pages');
    Route::get('add/{id}',[userProfilesController::class ,'updateProfiles'])->name('update-home-pages')->middleware('checkuser');
    Route::get('edit/{id}',[userProfilesController::class ,'showEditProfiles'])->name('edit-home-pages')->middleware('checkuser');
    Route::post('update/{id}',[userProfilesController::class ,'updateProfilesHome'])->name('update-home');
    Route::post('edit/{id}',[userProfilesController::class ,'editProfiles'])->name('edit-home');
    Route::post('addstatus/{id}',[userProfilesController::class ,'addStatus']);

    Route::get('follow/{id}',[friendsController::class, 'followFriends']);
    Route::get('followN/{id}',[friendsController::class, 'followNext']);
    Route::get('unfollow/{id}',[friendsController::class, 'unfollowFriends']);
    


});
Route::get('search',[SearchController::class ,'getSearch'])->name('search-product');
Route::get('search-m',[SearchController::class ,'getSearchM'])->name('search-product-M');
Route::get('search-p',[SearchController::class ,'getSearchP'])->name('search-product-P');


Route::prefix('/')->group(function(){
    Route::middleware('checklogoutuser')->group(function(){
    Route::get('register',[AuthController::class ,'getRegister'])->name('form-register-user');
    Route::get('login',[AuthController::class ,'getLoginUser'])->name('form-login-user');    
    });
   Route::get('logout',[AuthController::class ,'getLogoutUser'])->name('logout-user');
    Route::post('register',[AuthController::class ,'Register'])->name('register-user');   
    Route::post('login',[AuthController::class ,'loginUser'])->name('login-user'); 
});



Route::get('/',[PagesController::class ,'pages'])->name('page');


Route::prefix('messages')->group(function(){
     Route::middleware('checkuser')->group(function(){
         Route::get('/',[messagesController::class ,'getAllMess'])->name('messages');

        });
});

Route::prefix('products')->group(function(){
     Route::get('/',[ProductController::class ,'productPage'])->name('product-page');
     Route::get('/add',[ProductController::class ,'productAdd'])->name('product-page-add')->middleware('checkuser');
     Route::get('/detail/{id}',[ProductController::class ,'productDetail'])->name('product-page-detail');
     Route::get('/list-user/{id}',[ProductController::class ,'listProductDetail'])->name('list-product-page-detail');

    Route::post('add-product',[ProductController::class ,'store'])->name('add-product');
    Route::post('edit-product/{id}',[ProductController::class ,'update'])->name('edit-product');
    Route::get('delete-product/{id}',[ProductController::class ,'destroy'])->name('delete-product');
    Route::post('add-product-comment/{id}',[ProductController::class ,'addCommentProduct']);
});

Route::prefix('posts')->group(function(){
     Route::get('/',[PostsController::class ,'postPage'])->name('post-page');
     Route::get('/add',[PostsController::class ,'postAdd'])->name('post-page-add')->middleware('checkuser');
     Route::get('/show/{id}',[PostsController::class ,'postShow'])->name('post-page-show');
     Route::get('/list-user/{id}',[PostsController::class ,'listpostDetail'])->name('list-post-page-detail');

    Route::post('add-post',[PostsController::class ,'store'])->name('add-post');
    Route::post('edit-posts/{id}',[PostsController::class ,'update'])->name('edit-post');
    Route::get('delete-post/{id}',[PostsController::class ,'destroy'])->name('delete-post');
     Route::post('add-post-comment/{id}',[PostsController::class ,'addCommentPost']);
});
Route::prefix('motels')->group(function(){
    Route::get('/',[MotelsController::class ,'motelPage'])->name('motel-page');
     Route::get('/add',[MotelsController::class ,'motelAdd'])->name('motel-page-add')->middleware('checkuser');
     Route::get('/show/{id}',[MotelsController::class ,'motelShow'])->name('motel-page-show');
     Route::get('/list-user/{id}',[MotelsController::class ,'motelList'])->name('list-motel-page');

    Route::post('add-motel',[MotelsController::class ,'store'])->name('add-motel');
    Route::post('edit-motel/{id}',[MotelsController::class ,'update'])->name('edit-motel');
    Route::get('delete-motel/{id}',[MotelsController::class ,'destroy'])->name('delete-motel');
     Route::post('add-motel-comment/{id}',[MotelsController::class ,'addCommentMotel']);

});

Route::get('/hanh-trinh', function () {
    return view('frontend.hanh-trinh');
});