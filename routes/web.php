<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Website\WebsiteController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//admin route
Route::group(['prefix' => 'dashboard','middleware' => ['auth']], function(){
    Route::get('/',[AdminController::class,'index'])->name('admin.index');

});

//websitcontroller
Route::get('/',[WebsiteController::class,'index'])->name('website.index');
Route::get('/contact',[WebsiteController::class, 'contact'])->name('website.contact');
Route::post('/contact/submit',[WebsiteController::class, 'contact_submit'])->name('website.contact.submit');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

