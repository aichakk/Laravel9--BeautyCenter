<?php
// my home page controller
use App\Http\Controllers\AichaController;



// additional files.
use Illuminate\Support\Facades\Route;

// the admin panel controller
use App\Http\Controllers\AdminPanel\AichaController as Aicha;

use App\Http\Controllers\AdminPanel\CategoryController as AichaCategory;
use App\Http\Controllers\AdminPanel\MessageController as MessageController;
// faq
use App\Http\Controllers\AdminPanel\FaqController as MyAdminFaqController;

// user controller
use App\Http\Controllers\AdminPanel\UserController as MYAdminUserController;


// service controller
use App\Http\Controllers\AdminPanel\ServiceController as AichaServiceController;

use App\Http\Controllers\AdminPanel\ImageController as AichaImageController;
use App\Http\Controllers\userController as AichaHomeUserController;

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
//this is my package route
Route::get('/package/{id}', [AichaController::class, 'package'])->name('package');

//for apointment
Route::get('/appointment/{id}', [AichaController::class, 'appointment'])->name('appointment');

// this is our services
Route::get('/services', [AichaController::class, 'services'])->name('services');
// this is for the review part
Route::post('/storecomment', [AichaController::class, 'storecomment'])->name('storecomment');

// this is the contact page home settings......
Route::get('/contact', [AichaController::class, 'contact'])->name('contact');
Route::get('/about', [AichaController::class, 'about'])->name('about');
Route::get('/reference', [AichaController::class, 'references'])->name('references');
Route::post('/storemessage', [AichaController::class, 'storemessage'])->name('storemessage');
// this is my admin panel grouped with sub:cat function.....

//************************ Log in,log out credentials********************
Route::view('/loginuser', 'home.login');
Route::view('/registeruser', 'home.register');
Route::get('/logoutuser', [AichaController::class, 'logout'])->name('logout');
//admin login credentials
Route::view('/loginadmin', 'homeAdminP.login')->name('loginadmin');;
Route::post('/adminlogin', [AichaController::class, 'adminlogincheck'])->name('adminlogincheck');


//there are all the routes
//**************** user authentication **************************
Route::middleware('auth')->group(function () {
    Route::prefix('userpanel')->name('userpanel.')->controller(\App\Http\Controllers\userController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/reviews', 'reviews')->name('reviews');
        Route::get('/reviewdestroy/{id}', 'reviewdestroy')->name('reviewdestroy');
    });

    Route::prefix('userpanel')->name('userpanel.')->controller(\App\Http\Controllers\userController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });


// this is my admin panel grouped with sub:cat function.....
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {

        Route::get('/settings', [Aicha::class, 'setting'])->name('settings');

    Route::post('/settings/update', [Aicha::class, 'settingUpdate'])->name('settingUpdate');
//    Route::get('/settings',[App\Http\Controllers\AdminPanel\AichaController::class, 'settings'])->name('settings');

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
    Route::prefix('service')->name('service.')->controller(AichaServiceController::class)->group(function () {
        // this is my service controller for category index.....
        Route::get('/', 'index')->name('index');

        // this is my service controller for  create.....
        Route::get('/create', 'create')->name('create');

        // this is my service controller for category store.....
        Route::post('/store', 'store')->name('store');

        // this is my service controller for category update.....
        Route::post('/update/{id}', 'update')->name('update');

        // this is my service controller for category edit.....
        Route::get('/edit/{id}', 'edit')->name('edit');

        // this is my service controller for category destrtoy.....
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

        // this is my service controller for category show.....
        Route::get('/show/{id}', 'show')->name('show');

    });

//    images routes are below
    Route::prefix('image')->name('image.')->controller(AichaImageController::class)->group(function () {

        // this is my service controller for category index.....
        Route::get('/{pid}', 'index')->name('index');

        // this is my service controller for  create.....
        Route::get('/create/{pid}', 'create')->name('create');

        // this is my service controller for category store.....
        Route::post('/store/{pid}', 'store')->name('store');

        // this is my service controller for category update.....
        Route::post('/update/{id}/{pid}', 'update')->name('update');

        // this is my service controller for category edit.....
        Route::get('/edit/{id}/{pid}', 'edit')->name('edit');

        // this is my service controller for category destrtoy.....
        Route::get('/destroy/{id}/{pid}', 'destroy')->name('destroy');

        // this is my service controller for category show.....
        Route::get('/show/{id}/{pid}', 'show')->name('show');


    });
    Route::prefix('message')->name('message.')->controller(MessageController::class)->group(function () {
        // this is my message controller for category index.....
        Route::get('/', 'index')->name('index');


        // this is my message controller for category store.....
        Route::post('/store', 'store')->name('store');

        // this is my message controller for category update.....
        Route::post('/update/{id}', 'update')->name('update');

        // this is my message controller for category edit.....
        Route::get('/edit/{id}', 'edit')->name('edit');

        // this is my message controller for category destrtoy.....
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

        // this is my show controller for category show.....
        Route::get('/show/{id}', 'show')->name('show');

    });


    // faq starting
    Route::prefix('faq')->name('faq.')->controller(MyAdminFaqController::class)->group(function () {

        // my AdminPanle category-list
        Route::get('/', 'index')->name('index');

        // my AdminPanle create
        Route::get('/create', 'create')->name('create');

        // my AdminPanle store
        Route::post('/store', 'store')->name('store');

        // my AdminPanle update
        Route::post('/update/{id}', 'update')->name('update');

        // my AdminPanle edit
        Route::get('/edit/{id}', 'edit')->name('edit');

        // my Adminpanle show
        Route::get('/show/{id}', 'show')->name('show');

        // my Adminpanle show
        Route::get('/delete/{id}', 'delete')->name('delete');
        // my Adminpanle show
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('user')->name('user.')->controller(MYAdminUserController::class)->group(function () {

        // my AdminPanle category-list
        Route::get('/', 'index')->name('index');

        // my AdminPanle update
        Route::post('/update/{id}', 'update')->name('update');

        // my Adminpanle show
        Route::get('/show/{id}', 'show')->name('show');

        // my Adminpanle show
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        // remove role of the role person
        Route::get('/destroy/{uid}/{rid}', 'destroyrole')->name('destroy');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');
    });

});
});




