<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\home\HomeSliderController;
use App\Http\Controllers\home\AboutController;

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

// Frontend All Route 
Route::controller(FrontendController::class)->group(function(){

    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');

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


// Home Slider Route
Route::controller(HomeSliderController::class)->group(function(){

    Route::prefix('admin')->group(function(){

        Route::get('/home-slide', 'index')->name('admin.home.slide');

        Route::post('/home-slide/update', 'update_home_slide')->name('admin.update.home.slide');
        

    });
 
});   


// About Page Route
Route::controller(AboutController::class)->group(function(){

    Route::prefix('admin')->group(function(){

        Route::get('/about','home_about')->name('admin.home.about');

        Route::post('/about/update','admin_update_about_page')->name('admin.update.about.page');

        Route::get('/about/multi-image', 'admin_about_multi_image')->name('admin.about.multi.image');

        Route::post('/about/multi-image/store', 'admin_update_multi_page')->name('admin.update.multi.page');

        Route::get('/about/all-multi-image', 'admin_all_multi_image')->name('admin.all.multi.image');

    });

});


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
