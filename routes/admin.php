<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;



//admin route
Route::group(['prefix' => 'dashboard','middleware' => ['auth']], function(){

    Route::get('/',[AdminController::class,'index'])->name('admin.index');

    //userController
    Route::prefix('user')->controller(UserController::class)->group( function () {
         Route::get('/', 'index')->name('user.index');
         Route::get('/create', 'create')->name('user.create');
         Route::post('/', 'store')->name('user.store');
         Route::get('/edit/{slug}', 'edit')->name('user.edit');
         Route::put('/{slug}', 'update')->name('user.update');
         Route::delete('/delete/{slug}', 'update')->name('user.delete');
         //user status
         Route::get('/status/{slug}','status')->name('user.status');
    });

});
