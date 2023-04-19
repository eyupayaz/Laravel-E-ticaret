<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
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


Route::get("/",[HomeController::class,"index"])->name("home");
Route::get("/iletisim",[HomeController::class,"contact"])->name("contact");
Route::get("/aboutus", [HomeController::class, "aboutus"])->name("aboutus");


Route::get("/home",[AdminController::class,"home"]);
Route::get('/test/{id}',[AdminController::class,'test']) ->where('id', '[0-9]+');

Route::redirect('/anasayfa', '/home');

/*
Route::prefix("/admin")
    ->controller(AdminController::class)
    ->name("admin.")
    ->group(function(){
    Route::get("/dashboard","dashboard")->name("dashboard"); // /admin/dashboard
    Route::get("/product","product")->name("product"); // /admin/product
    Route::get("/order","order")->name("order"); // /admin/order
});
*/


/*
 * Kendi modeli var mı? ProductController, PageController, FaqController */

/*
 * homepage
 * iletisim
 * urun-detay : ProductController
 * urunler
 * sepet
 * profile : UserController
 *  /profile-bilgileri /profile/bilgiler
 *  /sifre degistir /profile/sifre
 *  /siparislerim  /profile/siparislerim : OrderController
 *  /siparis-detay /profile/siparis-detay/1
 * kayitol
 * girisyap
 * */

/*
 * */

/*
 * 1-web.php içerisinde route tanımlanır
 * 2-controllera gönderilir ve controllerdan sayfaya gönderilir (Model - Controller)
 * 3-view altında sayfa oluşturur (View)
 * */
