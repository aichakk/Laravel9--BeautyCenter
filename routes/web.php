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
Route::prefix('admin')->group(function () {


    Route::get('/', [Aicha::class, 'index'])->name('admin');

    // this is my admin panel grouped with sub:cat function.....
    Route::prefix('category')->group(function () {

        // this is my adminPanelCategory controller category.....
        Route::get('/', [AichaCategory::class, 'index'])->name('admin_category');

        // this is my adminPanelCategory controller create.....
        Route::get('/create', [AichaCategory::class, 'create'])->name('admin_category_create');

        // this is my adminPanelCategory controller store.....
        Route::post('/store', [AichaCategory::class, 'store'])->name('admin_category_store');

        // this is for updating the data
        Route::post('/update/{id}', [AichaCategory::class, 'update'])->name('admin_category_update');

        // this is my adminPanelCategory controller edit.....
        Route::get('/edit/{id}', [AichaCategory::class, 'edit'])->name('admin_category_edit');

        // this is my adminPanelCategory controller delete.....
        Route::get('/delete/{id}', [AichaCategory::class, 'delete'])->name('admin_category_delete');

        // this is my adminPanelCategory controller show.....
        Route::get('/show/{id}', [AichaCategory::class, 'show'])->name('admin_category_show');


    });
});




