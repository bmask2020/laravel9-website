<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\home\HomeSliderController;

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

Route::get('/', function () {
    return view('frontend.index');
});


// Admin All Route 
Route::controller(AdminController::class)->group(function(){

    Route::prefix('admin')->group(function(){

    Route::get('/profile', 'profile')->middleware(['auth','verified'])->name('admin.profile');
    Route::get('/logout', 'destroy')->middleware(['auth','verified'])->name('admin.logout');
    Route::get('/profile/edit', 'edit_profile')->middleware(['auth','verified'])->name('admin.edit.profile');
    Route::post('/profile/store', 'store_profile')->middleware(['auth','verified'])->name('admin.store.profile');
    
    Route::get('/change-password', 'change_password')->middleware(['auth','verified'])->name('admin.change.password');
    Route::post('/update-password', 'update_password')->middleware(['auth','verified'])->name('admin.update.password');

    });
    


});


Route::controller(HomeSliderController::class)->group(function(){

    Route::prefix('admin')->group(function(){

        Route::get('/home-slide', 'index')->name('admin.home.slide');

    });
 
});   


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
