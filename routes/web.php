<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

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
    return view('home');
});

// require __DIR__.'/auth.php';
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/supplier', [App\Http\Controllers\FoodController::class, 'supplierindex']);

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::get('/login', '\App\Http\Controllers\Auth\LoginController@loginPage')->name('login');
// Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login');

Route::group(['prefix'=>'donor','middleware'=>'donor'],function()
{
    Route::get('/', [App\Http\Controllers\FoodController::class, 'index'])->name('index');
    Route::get('/food/create', [App\Http\Controllers\FoodController::class, 'create']);
    Route::delete('/food/delete/{id}', [App\Http\Controllers\FoodController::class, 'destroy']);
    Route::post('/food/create', [App\Http\Controllers\FoodController::class, 'store']);
    Route::get('/food/edit/{id}', [App\Http\Controllers\FoodController::class, 'edit']);
    Route::post('/food/edit/{id}', [App\Http\Controllers\FoodController::class, 'update']);
}
);
