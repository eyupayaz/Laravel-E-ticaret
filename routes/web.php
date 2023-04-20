<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!*/

Route::get("/",[HomeController::class,"index"])->name("home");
Route::get("/iletisim",[HomeController::class,"contact"])->name("contact");
Route::get("/aboutus", [HomeController::class, "aboutus"])->name("aboutus");

//admin
Route::middleware("auth")->group(function (){
    Route::get('/admin',[AdminController::class,'index'])->name('adminhome');

    Route::get('/admin/login',[HomeController::class, 'login'])->name('admin_login');
    Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
    Route::post('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');

    Route::prefix("/admin/category")
        ->controller(CategoryController::class)
        ->name("category.")->group(function(){

        Route::get("/","index")->name("index");
    });
});



Route::get('/test/{id}',[AdminController::class,'test']) ->where('id', '[0-9]+');

Route::redirect('/anasayfa', '/home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
/*
 * user
 * product
 * category
 * order
 * cart_items
 * cart
 *
 * */
