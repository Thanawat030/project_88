<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//  Route::get('/', function () {
//      return view('welcome');
//  });

//  Auth::routes();

//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/', 'promotepage.home')->name('home');

Route::view('/mashroom', 'promotepage.mashroom')->name('mashroom');
Route::view('/mashroomkonnoy', 'promotepage.mashroomkonnoy')->name('mashroomkonnoy');
Route::view('/mashroomkondum', 'promotepage.mashroomkondum')->name('mashroomkondum');
Route::view('/mushroomangle', 'promotepage.mushroomangle')->name('mushroomangle');
Route::view('/mushroomputan', 'promotepage.mushroomputan')->name('mushroomputan');
Route::view('/mushroomrinje', 'promotepage.mushroomrinje')->name('mushroomrinje');

//end promote

//start admin
Auth::routes();

Route::get('/admin/home',[App\Http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');
//contact
Route::get('/admin/admincontact',[App\Http\Controllers\ContactController::class, 'index'])->name('adminpage.contact.admincontact');
Route::get('/admin/admincontact/add',[App\Http\Controllers\ContactController::class, 'add'])->name('adminpage.contact.add');
Route::get('/admin/admincontact/edit',[App\Http\Controllers\ContactController::class, 'edit'])->name('adminpage.contact.edit');
//promotion
Route::get('/admin/adminpromotion',[App\Http\Controllers\PromotionController::class, 'index'])->name('adminpage.promotion.adminpromotion');
Route::get('/admin/adminpromotion/add',[App\Http\Controllers\PromotionController::class, 'add'])->name('adminpage.promotion.add');
Route::get('/admin/adminpromotion/edit',[App\Http\Controllers\PromotionController::class, 'edit'])->name('adminpage.promotion.edit');
//blackground
Route::get('/admin/adminblackground',[App\Http\Controllers\BlackgroundController::class, 'index'])->name('adminpage.blackground.adminblackground');
Route::get('/admin/adminblackground/add',[App\Http\Controllers\BlackgroundController::class, 'add'])->name('adminpage.blackground.add');
Route::get('/admin/adminblackground/edit',[App\Http\Controllers\BlackgroundController::class, 'edit'])->name('adminpage.blackground.edit');
//product
Route::get('/admin/product',[App\Http\Controllers\ProductController::class, 'index'])->name('adminpage.product.adminproduct');
Route::get('/admin/product/add',[App\Http\Controllers\ProductController::class, 'add'])->name('adminpage.product.add');  
Route::get('/admin/product/edit',[App\Http\Controllers\ProductController::class, 'edit'])->name('adminpage.product.edit'); 
//content
Route::get('/admin/content',[App\Http\Controllers\ContentController::class, 'index'])->name('adminpage.content.admincontent');
Route::get('/admin/content/add',[App\Http\Controllers\ContentController::class, 'add'])->name('adminpage.content.add');
Route::get('/admin/content/edit',[App\Http\Controllers\ContentController::class, 'edit'])->name('adminpage.content.edit');   
//delivery
Route::get('/admin/delivery',[App\Http\Controllers\DeliveryController::class, 'index'])->name('adminpage.delivery.admindelivery');
Route::get('/admin/delivery/add',[App\Http\Controllers\DeliveryController::class, 'add'])->name('adminpage.delivery.add');
Route::get('/admin/delivery/edit',[App\Http\Controllers\DeliveryController::class, 'edit'])->name('adminpage.delivery.edit');
//customer
Route::get('/admin/customer',[App\Http\Controllers\CustomerController::class, 'index'])->name('adminpage.customer.admincustomer');
Route::get('/admin/customer/add',[App\Http\Controllers\CustomerController::class, 'add'])->name('adminpage.customer.add');
Route::get('/admin/customer/edit',[App\Http\Controllers\CustomerController::class, 'edit'])->name('adminpage.customer.edit');
//address
Route::get('/admin/address',[App\Http\Controllers\AddressController::class, 'index'])->name('adminpage.address.adminaddress');
Route::get('/admin/address/add',[App\Http\Controllers\AddressController::class, 'add'])->name('adminpage.address.add');
Route::get('/admin/address/edit',[App\Http\Controllers\AddressController::class, 'edit'])->name('adminpage.address.edit');
//type
Route::get('/admin/type',[App\Http\Controllers\TypeController::class, 'index'])->name('adminpage.type.admintype');  
Route::get('/admin/type/add',[App\Http\Controllers\TypeController::class, 'add'])->name('adminpage.type.add');
Route::get('/admin/type/edit',[App\Http\Controllers\TypeController::class, 'index'])->name('adminpage.type.edit');

//End admin

