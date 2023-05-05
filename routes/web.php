<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
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
Route::get("/aboutus", [HomeController::class, "aboutus"])->name("aboutus");
Route::get("/references",[HomeController::class, "references"])->name("references");
Route::get("/faq",[HomeController::class,"faq"])->name("faq");
Route::get("/contact",[HomeController::class,"contact"])->name("contact");
Route::post("/sendmessage",[HomeController::class,"sendmessage"])->name("sendmessage");
Route::get("/categoryproducts/{id}/{slug}",[HomeController::class,"categoryproducts"])->name("categoryproducts");


//admin
Route::middleware("auth")->group(function (){
    Route::get('/admin',[AdminController::class,'index'])->name('adminhome');

    Route::get('/admin/login',[HomeController::class, 'login'])->name('admin_login');
    Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
    Route::post('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');
#Category

    Route::prefix("/admin/category")
        ->controller(CategoryController::class)
        ->name("admin.category.")->group(function(){

        Route::get("/","index")->name("index");
        Route::get("/create","create")->name("create");
        Route::post("/store","store")->name("store");
        Route::get("/destroy/{categoryid}","destroy")->name("destroy");
        Route::get("/edit/{categoryid}","edit")->name("edit");
        Route::post("update/{categoryid}","update")->name("update");

    });


#Product
    Route::prefix('/admin/product')
        ->controller(ProductController::class)
        ->name('admin.product.')->group(function (){

            Route::get('/index',"index")->name('index');
            Route::post('/store',"store")->name('store');
            Route::get('/create',"create")->name('create');
            Route::get('/edit/{id}',"edit")->name('edit');
            Route::post('/update/{id}',"update")->name('update');
            Route::get('/delete/{id}',"delete")->name('delete');
            Route::get("/show","show")->name('show');

    });

#Message
    Route::prefix('/admin/messages')
        ->controller(MessageController::class)
        ->name('admin.messages.')->group(function (){

            Route::get('/index','index')->name('index');
            Route::get('/edit/{id}',"edit")->name('edit');
            Route::post('/update/{id}',"update")->name('update');
            Route::get('/delete/{id}',"delete")->name('delete');
            Route::get("/show","show")->name('show');

        });


#image
    Route::prefix('/admin/image')
        ->controller(\App\Http\Controllers\ImageController::class)
        ->name('admin.image.')->group(function (){

            Route::get('/index',"index")->name('index');
            Route::post('/store/{product_id}',"store")->name('store');
            Route::get('/create/{product_id}',"create")->name('create');
            Route::get('/delete/{product_id}/image/{image_id}',"destroy")->name('delete');
            Route::get("/show","show")->name('show');

        });

#Setting

    Route::prefix("/admin/setting")
        ->controller(SettingController::class)
        ->name("admin.setting.")->group(function(){

            Route::get("/","index")->name("index");
            Route::get("/update","update")->name("update");
            Route::post('/update',"update")->name("update");
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
