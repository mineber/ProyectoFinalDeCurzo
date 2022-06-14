<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\travelController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\userController;

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

Route::get('', [indexController::class, 'index'])->name('index');
Route::get('travel', [travelController::class, 'travel'])->name('travel');
Route::get('shop', [shopController::class, 'shop'])->name('shop');
Route::get('login', [userController::class, 'login'])->name('login');
Route::get('register', [userController::class, 'register'])->name('register');
Route::post('log', [userController::class, 'log'])->name('log');
Route::post('registro', [userController::class, 'registro'])->name('registro');
Route::get('cs', [userController::class, 'cs'])->name('cs');
Route::get('profile', [userController::class, 'profile'])->name('profile');
Route::get('ld', [userController::class, 'ld'])->name('ld');
Route::post('save', [shopController::class, 'save'])->name('save');
Route::post('save2', [shopController::class, 'save2'])->name('save2');
Route::post('borrarlista', [userController::class, 'borrarlista'])->name('borrarlista');
Route::post('modificar', [userController::class, 'modificar'])->name('modificar');
Route::post('anotherprofile', [userController::class, 'anotherprofile'])->name('anotherprofile');
Route::post('comentar', [userController::class, 'comentar'])->name('comentar');
Route::post('borrarcoment', [userController::class, 'borrarcoment'])->name('borrarcoment');
Route::post('producto', [shopController::class, 'producto'])->name('producto');
Route::post('viaje', [travelController::class, 'viaje'])->name('viaje');
Route::get('conf', [userController::class, 'conf'])->name('conf');
Route::get('info', [indexController::class, 'info'])->name('info');
Route::get('ayuda', [indexController::class, 'ayuda'])->name('ayuda');
Route::post('buscar', [indexController::class, 'buscar'])->name('buscar');
