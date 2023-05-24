<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PizzaCrustController;
use App\Http\Controllers\Admin\SettingController;
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
         Route::get('/delete/{slug}', 'destroy')->name('user.delete');
         //user status
         Route::get('/status/{slug}','status')->name('user.status');
    });

    //settingController
    Route::prefix('setting')->group(function(){
        //socialsettingcontroller
         Route::prefix('socialmedia')->controller(SettingController::class)->group(function(){
               Route::get('/', 'sm_index')->name('sm.index');
               Route::put('/update', 'sm_update')->name('sm.update');
             });
        //BasicSettingcontroller
         Route::prefix('basic')->controller(SettingController::class)->group(function(){
              Route::get('/' , 'basic_index')->name('basic.index');
              Route::put('/' , 'basic_update')->name('basic.update');
         });
       //ContactSettingController
       Route::prefix('contactinfo')->controller(SettingController::class)->group(function(){
            Route::get('/', 'cont_index')->name('cont.index');
            Route::put('/update', 'count_update')->name('cont.update');
       });

      });

      //PizzacurstController
     Route::prefix('pizzacrust')->controller(PizzaCrustController::class)->group(function(){
         Route::get('/', 'index')->name('crust.index');
         Route::get('/create', 'create')->name('crust.create');
         Route::post('/', 'store')->name('crust.store');
         Route::get('/edit/{slug}', 'store')->name('crust.edit');
         Route::put('/{slug}', 'update')->name('crust.update');
         Route::get('/delete/{slug}', 'destroy')->name('crust.destroy');
         //publish and status
         Route::get('/publish/{slug}', 'publish')->name('crust.publish');
         Route::get('/status/{slug}', 'status')->name('crust.status');
     });




});
