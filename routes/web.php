<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dasboard', function () {
        return view('dasboard');
    })->name('dashboard');
});

// HOME

Route::get('/redirect',[HomeController::class, 'redirect']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/contact',[HomeController::class, 'contact']);
Route::get('/posts',[HomeController::class, 'posts']);
Route::get('/post/{id}',[HomeController::class, 'post']);
Route::get('/category/{id}',[HomeController::class, 'category']);


// ADMIN
// Route::get('/admin',[AdminController::class, 'admin']);
Route::get('view_nav',[AdminController::class, 'view_nav']);
Route::get('/view_slide',[AdminController::class, 'view_slide']);
Route::get('/view_about',[AdminController::class, 'view_about']);
Route::get('/view_category',[AdminController::class, 'view_category']);
Route::get('/view_posts',[AdminController::class, 'view_posts']);
Route::get('/view_contact',[AdminController::class, 'view_contact']);

// EDIT
Route::get('/edit_nav',[AdminController::class,'edit_nav']);
Route::get('/edit_slider/{id}',[AdminController::class,'edit_slider']);
// Route::get('/edit_about',[AdminController::class,'edit_about']);
    Route::get('/edit_aboutHome',[AdminController::class,'edit_aboutHome']);
    Route::get('/edit_aboutMeet',[AdminController::class,'edit_aboutMeet']);
    Route::get('/edit_aboutDetails',[AdminController::class,'edit_aboutDetails']);
Route::get('/edit_category/{id}',[AdminController::class,'edit_category']);
Route::get('/edit_post/{id}',[AdminController::class,'edit_post']);
Route::get('/edit_contactInfo/{id}',[AdminController::class,'edit_contactInfo']);
Route::get('/edit_contactImg/{id}',[AdminController::class,'edit_contactImg']);

// Detail Post
Route::get('/detail/{id}',[AdminController::class,'post_detail']);

//DELETE
Route::get('/delete_slider/{id}',[AdminController::class,'delete_slider']);
Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
Route::get('/delete_post/{id}',[AdminController::class,'delete_post']);

// EDIT CONFIRM
Route::post('/edit_nav_confirm/{id}',[AdminController::class,'edit_nav_confirm']);
Route::post('/edit_slider_confirm/{id}',[AdminController::class,'edit_slider_confirm']);
Route::post('/edit_aHome_confirm',[AdminController::class,'aHome_confirm']);
Route::post('/edit_aMeet_confirm',[AdminController::class,'aMeet_confirm']);
Route::post('/edit_aDetails_confirm',[AdminController::class,'aDetails_confirm']);
Route::post('/edit_category_confirm/{id}',[AdminController::class,'edit_category_confirm']);
Route::post('/edit_post_confirm/{id}',[AdminController::class,'edit_post_confirm']);
Route::post('/edit_contactInfo_confirm',[AdminController::class,'contactInfo_confirm']);
Route::post('/edit_contactImg_confirm',[AdminController::class,'contactImg_confirm']);


// INSERT
Route::get('add_slider',[AdminController::class,'add_slider']);
Route::get('add_category',[AdminController::class,'add_category']);
Route::get('add_post',[AdminController::class,'add_post']);

// INSERT CONFIRM
Route::post('add_slider_confirm',[AdminController::class,'add_slider_confirm']);
Route::post('add_category_confirm',[AdminController::class,'add_category_confirm']);
Route::post('add_post_confirm',[AdminController::class,'add_post_confirm']);
