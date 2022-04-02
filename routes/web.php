<?php
// my home page controller
use App\Http\Controllers\AichaController;

// additional files.
use Illuminate\Support\Facades\Route;

// the admin panel controller
use App\Http\Controllers\AdminPanel\AichaController as Aicha;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// this is my home controller.....

Route::get('/', [AichaController::class, 'index'])->name('home');

// this is my admin panel.....

Route::get('/aicha', [Aicha::class, 'index'])->name('home');


