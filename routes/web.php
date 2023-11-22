<?php

use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'homepage']);
Route::get('/product', [WelcomeController::class, 'product']);
Route::get('/detail-product', [WelcomeController::class, 'detailProduct']);
Route::get('/your-cart', [WelcomeController::class, 'cart']);
Route::get('/order', [WelcomeController::class, 'order']);
Route::get('/list-ukm', [WelcomeController::class, 'list_ukm']);
