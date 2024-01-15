<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Bulletin'], function() {
    Route::get('/', 'IndexController')->name('index');
    Route::get('/bulletins', 'BulletinsWithFilterController')->name('bulletins_with_filter');
    Route::get('/bulletins/{bulletin}', 'ShowController')->name('show');
    Route::get('/create', 'CreateController')->name('create')->middleware('auth');
});



Route::group(['namespace' => 'Bulletin', 'prefix'=> 'userprofile', 'middleware'=> 'auth'], function() {
    Route::get('/', 'IndexByUserController')->name('index_by_user');
    Route::get('/bulletins/{bulletin}', 'ShowByUserController')->name('show_by_user');
    Route::get('/bulletins/{bulletin}/edit', 'EditByUserController')->name('edit_by_user');
    Route::patch('/bulletins/{bulletin}', 'UpdateByUserController')->name('update_by_user');
    Route::delete('/bulletins/{bulletin}', 'DestroyByUserController')->name('delete_by_user');
    Route::post('/', 'StoreByUserController')->name('store_by_user');
});

Route::group(['namespace' => 'Admin', 'prefix'=> 'admin', 'middleware'=> 'admin'], function() {
    Route::group(['namespace' => 'Bulletin'], function() {
        Route::get('/dashboard', 'IndexController')->name('admin.bulletin.index');
        Route::get('/dashboard/bulletins/{bulletin}', 'ShowController')->name('admin.bulletin.show');
        Route::get('/dashboard/bulletins/{bulletin}/edit', 'EditController')->name('admin.bulletin.edit');
        Route::patch('/dashboard/bulletins/{bulletin}', 'UpdateController')->name('admin.bulletin.update');
        Route::delete('/dashboard/bulletins/{bulletin}', 'DestroyController')->name('admin.bulletin.delete');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
