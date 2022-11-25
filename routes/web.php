<?php

use Illuminate\Support\Facades\Route;
//======= Use A Frontend Controller =======*/
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\FrontendController;

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

/*================== Frontend All Route ==============*/
Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function() {

	Route::get('/user/dashboard', [UserController::class, 'index'])->name('dashboard');
	Route::get('/user/profile/view', [UserController::class, 'UserProfileIndex'])->name('user.profile.index');
	Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
	Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
	Route::get('/user/password/change', [UserController::class, 'UserChangePassword'])->name('user.change.password');
	Route::post('/user/update/password', [UserController::class, 'UserUpdatePassword'])->name('user.update.password');
	Route::get('/user/order/view', [OrderController::class, 'index'])->name('user.orders.index');
	Route::get('/user/address/view', [UserController::class, 'UserAddress'])->name('user.address');


}); // Gorup Milldeware End


/* ==================== Start User dashboard Route ================== */
// Route::group(['prefix'=>'user'], function(){
//     Route::get('/dashboard',[UserController::class, 'index'])->name('dashboard');
//     Route::get('/password-change',[UserController::class, 'UserUpdatePassword'])->name('password.change');


//    });

require __DIR__.'/auth.php';
