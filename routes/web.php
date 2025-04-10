<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/o-canil', [SiteController::class, 'ocanil'])->name('ocanil');
Route::get('/o-husky', [SiteController::class, 'ohusky'])->name('ohusky');
Route::get('/nossas-estrelas', [SiteController::class, 'nossas_estrelas'])->name('nossas_estrelas');
Route::get('/filhotes', [SiteController::class, 'filhotes'])->name('filhotes');
Route::get('/contato', [SiteController::class, 'contato'])->name('contato');


Route::get('/login', function(){return view('auth.login');})->name('login');

