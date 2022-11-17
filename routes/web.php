<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\pagina\PaginaController;
use App\Http\Controllers\PaginaController as ControllersPaginaController;
use App\Http\Controllers\webController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';

// Route::get('/',function(){
//     return view('pagina/index');
// });

/*
-------------------------------------------------------
            Rutas de la Pagina Web
-------------------------------------------------------
*/

// Route::get('/',function()
// {
//     return Inertia::render('Login');
// });

Route::controller(webController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/login','login')->name('login');
});

/*
-------------------------------------------------------
            Rutas de la administracion interna
-------------------------------------------------------
*/

Route::controller(adminController::class)->group(function(){
    Route::post('/home','home')->name('home');
    Route::get('/company','company')->name('company');
    Route::get('/category','category')->name('category');
    Route::get('/provider','provider')->name('provider');
    Route::get('/book','book')->name('book');
    Route::get('/admin','admin')->name('admin');
    Route::get('/admin-list','adminList')->name('admin-list');
    Route::get('/admin-search','adminSearch')->name('admin-search');
    Route::get('/client','client')->name('client');
    Route::get('/catalog','catalog')->name('catalog');
});

