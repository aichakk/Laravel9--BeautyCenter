<?php
// my home page controller
use App\Http\Controllers\AichaController;

// additional files.
use Illuminate\Support\Facades\Route;

// the admin panel controller
use App\Http\Controllers\AdminPanel\AichaController as Aicha;

use App\Http\Controllers\AdminPanel\CategoryController as AichaCategory;

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

// this is my admin panel grouped with sub:cat function.....


// this is my admin panel grouped with sub:cat function.....
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [Aicha::class, 'index'])->name('index');


    Route::prefix('category')->name('category.')->controller(AichaCategory::class)->group(function () {

        // this is my adminPanelCategory controller category.....
        Route::get('/', 'index')->name('index');

        // this is my adminPanelCategory controller create.....
        Route::get('/create', 'create')->name('create');

        // this is my adminPanelCategory controller store.....
        Route::post('/store', 'store')->name('store');

        // this is for updating the data
        Route::post('/update/{id}', 'update')->name('update');

        // this is my adminPanelCategory controller edit.....
        Route::get('/edit/{id}', 'edit')->name('edit');

        // this is my adminPanelCategory controller destroy.....
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

        // this is my adminPanelCategory controller show.....
        Route::get('/show/{id}', 'show')->name('show');


    });
});




