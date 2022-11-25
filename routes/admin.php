<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\SliderController;


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


/*========================== Start Admin Route  ==========================*/
Route::get('/admin/login',[AdminController::class, 'Index'])->name('login_form');
Route::post('/admin',[AdminController::class, 'Login'])->name('admin.login');

// Admin All Routes
Route::prefix('admin')->middleware('admin')->group(function(){
	Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
	Route::get('/logout',[AdminController::class, 'AminLogout'])->name('admin.logout');
	Route::get('/register',[AdminController::class, 'AdminRegister'])->name('admin.regester');
	Route::post('/register/store',[AdminController::class, 'AdminRegisterStore'])->name('admin.register.store');
	Route::get('/forgot-password',[AdminController::class, 'AdminForgotPassword'])->name('admin.password.request');
	Route::get('/profile',[AdminController::class, 'Profile'])->name('admin.profile');
	Route::get('/edit/profile',[AdminController::class, 'EditProfile'])->name('edit.profile');
	Route::post('/store/profile',[AdminController::class, 'StoreProfile'])->name('store.profile');
	Route::get('/change/password',[AdminController::class, 'ChangePassword'])->name('change.password');
	Route::post('/update/password',[AdminController::class, 'UpdatePassword'])->name('update.password');

	// ==================== Admin Slider All Routes ===================//
	Route::prefix('slider')->group(function(){
		Route::get('/index', [SliderController::class, 'index'])->name('slider.index');
		Route::get('/create', [SliderController::class, 'create'])->name('slider.create');
		Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
		Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
		Route::get('/view/{id}', [SliderController::class, 'view'])->name('slider.view');
		Route::post('/update/{id}',[SliderController::class, 'update'])->name('slider.update');
		Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');
		Route::get('/slider_active/{id}', [SliderController::class, 'active'])->name('slider.active');
		Route::get('/slider_inactive/{id}', [SliderController::class, 'inactive'])->name('slider.in_active');
	});

});

/*========================== End Admin Route  ==========================*/

require __DIR__.'/auth.php';
