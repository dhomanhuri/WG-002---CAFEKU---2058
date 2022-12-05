<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Models\Menu;
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

Route::get('/', function () {
    $data = Menu::all();
    return view('beranda', compact('data'));
});
Route::get('/fortesting', function () {
    echo "route testing";
});
// Route::get('/beranda', function () {
//     return view('beranda');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['auth','owner'])->group(function(){
    Route::resource('user', UserController::class);
    Route::get('/userdel/{user}',[UserController::class, 'destroy']);
});

Route::middleware(['auth'])->group(function(){
    Route::resource('menu', MenuController::class);
    Route::get('/menudel/{menu}',[MenuController::class, 'destroy']);
    
    Route::resource('kategori', KategoriController::class);
    Route::get('/kategoridel/{kategori}',[KategoriController::class, 'destroy']);
    Route::get('/order', [OrderController::class, 'index']);
});


// Route::get('/beranda', [OrderController::class, 'index']);
