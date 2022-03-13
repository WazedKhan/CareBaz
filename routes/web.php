<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;

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

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/order/track',[CartController::class,'track'])->name('track');
Route::get('/delivery/info',[HomeController::class,'delivery_info'])->name('delivery.info');
Route::get('/contact',[HomeController::class,'contact'])->name('contact')->middleware('auth');
Route::post('/contact/submit',[HomeController::class,'contactSub'])->name('contact.submit')->middleware('auth');
Route::get('/replace-refund/info',[HomeController::class,'replace_refund'])->name('replace.refund');
Route::get('/cart/',[CartController::class,'cart'])->name('cart');
Route::get('/add/{id}',[CartController::class,'addToCart'])->name('add');
Route::post('/makeOrder/',[CartController::class,'makeOrder'])->name('makeOrder');
Route::post('/add_/',[CartController::class,'addToCart_'])->name('order_');
Route::post('/orderNow/',[CartController::class,'orderNow'])->name('orderNow');
Route::get('/remove/{id}',[CartController::class,'remove'])->name('remove');
Route::get('/products/',[HomeController::class,'products'])->name('products');
Route::get('/register/',[UserController::class,'register'])->name('register');
Route::get('/login/',[UserController::class,'login'])->name('login');
Route::get('/logout/',[UserController::class,'logout'])->name('logout');
Route::get('/increase/{id}',[CartController::class,'increase'])->name('increase');
Route::get('/confirmation/{id}',[CartController::class,'confirmation'])->name('confirmation');
Route::get('/decrease/{id}',[CartController::class,'decrease'])->name('decrease');
Route::post('/doregister/',[UserController::class,'doRegister'])->name('doRegister');
Route::post('/dologin/',[UserController::class,'doLogin'])->name('dologin');
Route::get('/products/{id}',[HomeController::class,'productsDetail'])->name('products.details');
Route::get('/productList/{id}',[HomeController::class,'productList'])->name('productList');
Route::get('/hotProducts/',[HomeController::class,'hotProducts'])->name('hotProducts');
Route::post('/search/',[HomeController::class,'search'])->name('search');

Route::group(['prefix'=>'profile','middleware'=>['auth']],function (){
    Route::get('/',[UserController::class,'profile'])->name('profile');
    Route::get('/order',[UserController::class,'order'])->name('p.orders');
    Route::get('/edit',[UserController::class,'edit'])->name('p.edit');
    Route::post('/update',[UserController::class,'profileUpdate'])->name('p.update');
});

Route::group(['prefix'=>'admin/app'],function (){

    // category
    Route::get('/dashboard/',[AdminController::class,'index'])->name('index');
    Route::post('/banner/',[AdminController::class,'banner'])->name('bannar');
    Route::post('/number/',[AdminController::class,'number'])->name('number');
    Route::get('/order/',[AdminController::class,'order'])->name('orders');
    Route::get('/contact/',[AdminController::class,'contactInfo'])->name('contact.info');
    Route::get('/order/{id}',[AdminController::class,'orderDetalis'])->name('order.detalis');
    Route::get('/order/cancle/{id}',[AdminController::class,'orderCancle'])->name('order.cancle');
    Route::get('/order/shiped/{id}',[AdminController::class,'orderShiped'])->name('order.shiped');
    Route::get('/order/done/{id}',[AdminController::class,'orderDone'])->name('order.done');
    Route::get('/category/',[AdminController::class,'categoryView'])->name('category');
    Route::patch('/category/{id}',[AdminController::class,'updateCategory'])->name('category.update');
    Route::post('/category/create/',[AdminController::class,'categoryCreate'])->name('category.create');
    Route::get('/category/{id}/update/',[AdminController::class,'categoryUpdateView'])->name('category.update.view');

    // Proudcts

    Route::get('/product/',[AdminController::class,'product'])->name('admin.product');
    Route::post('/product/create/',[AdminController::class,'createProduct'])->name('product.create');
    Route::get('/product/update/{id}/view',[AdminController::class,'updateProductView'])->name('product.update.view');
    Route::patch('/product/update/{id}',[AdminController::class,'updateProduct'])->name('product.update');
    Route::get('/product/delete/{id}',[AdminController::class,'deleteProduct'])->name('product.delete');
    Route::get('/product/{id}/image',[AdminController::class,'productImage'])->name('product.image');
    Route::get('/product/{id}/image/delete',[AdminController::class,'productImageDelete'])->name('product.image.delete');
    Route::patch('/product/image/{id}/update',[AdminController::class,'productImageUpdate'])->name('product.image.update');
    Route::post('/product/image/{id}/new',[AdminController::class,'productImageNew'])->name('product.image.new');
    Route::patch('/product/{id}/new/discount/',[AdminController::class,'productDiscountUpdate'])->name('product.discount');
});
