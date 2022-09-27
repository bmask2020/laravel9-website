<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});


// Admin All Route 
Route::controller(AdminController::class)->group(function(){

    Route::prefix('admin')->group(function(){

    Route::get('/profile', 'profile')->middleware(['auth','verified'])->name('admin.profile');
    Route::get('/logout', 'destroy')->middleware(['auth','verified'])->name('admin.logout');

    });
    


});


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
