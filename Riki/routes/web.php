<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PortofolioController;



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
Route::get('project', function () {
        return view('project');
    });


Route::get('profile', function () {
        return view('profile');
    });


Route::get('contact', function () {
    return view('contact');
});

Route::get('register', function () {
    return view('register');
});

Route::get('portofolio', function () {
    return view('portofolio');
});



Route::get('/', function () {
    return view('welcome');
})->name('login');

    //Project pak alam

Route::get('project', [ProjectController::class, 'show']);



    //Login
    Route::post('auth', [UserController::class, 'auth']);
    Route::get('logout', [UserController::class, 'logout']);
    Route::get('daftar', [UserController::class, 'daftar']);
    Route::post('daftar/create', [UserController::class, 'create']);



Route::middleware('auth')->group(function (){
    Route::get('home', function () {
        return view('home');
    });

Route::get('profile', [ProfileController::class, 'show']);
Route::get('portofolio', [PortofolioController::class, 'show']);
Route::get('contact', [ContactController::class, 'show']);

});

    //
Route::get('register', [RegisterController::class, 'show']);
Route::get('formportofolio', [PortofolioController::class, 'tampilform']);
Route::get('formProfile', [ProfileController::class, 'showformProfile']);




    //Portofolio
Route::get('portofolio/add', [PortofolioController::class, 'add']);
Route::post('portofolio/create', [PortofolioController::class, 'create']);
Route::get('portofolio/hapus/{id}', [PortofolioController::class, 'hapus']);
Route::get('portofolio/edit/{id}', [PortofolioController::class, 'edit']);
Route::post('portofolio/update/{id}', [PortofolioController::class, 'update']);

    //  Profile

Route::get('profile/add', [ProfileController::class, 'add']);
Route::post('profile/create', [ProfileController::class, 'create']);
Route::post('profile/hapus/{id}', [ProfileController::class, 'hapus']);
Route::post('profile/edit/{id}', [ProfileController::class, 'edit']);
Route::post('profile/update/{id}', [ProfileController::class, 'update']);



    //contact
Route::get('contact', [ContactController::class, 'show']);
Route::get('contact/add', [ContactController::class, 'add']);
Route::post('contact/create', [ContactController::class, 'create']);
Route::get('contact/hapus/{id}', [ContactController::class, 'hapus']);



    //Layout
// Route::get('layout', [LayoutController::class, 'show']);
