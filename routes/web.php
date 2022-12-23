<?php

use App\Http\Controllers\Admin\CocktailController;
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

Route::resource('cocktails', CocktailController::class);

Route::get('/', function () {
    return view('welcome');
});
