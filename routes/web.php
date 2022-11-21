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
Route::get('/admin/contact/add',[App\Http\Controllers\ContactController::class, 'formadd'])->name('adminpage.contact.add');
Route::post('/admin/contact/add',[App\Http\Controllers\ContactController::class, 'add'])->name('adminpage.contact.add');
Route::get('/admin/contact/edit/{id}',[App\Http\Controllers\ContactController::class, 'edit']);
Route::post('/admin/contact/update/{id}',[App\Http\Controllers\ContactController::class, 'update']);
Route::get('/admin/contact/delete/{id}',[App\Http\Controllers\ContactController::class, 'delete']);
//promotion
Route::get('/admin/adminpromotion',[App\Http\Controllers\PromotionController::class, 'index'])->name('adminpage.promotion.adminpromotion');
Route::get('/admin/adminpromotion/add',[App\Http\Controllers\PromotionController::class, 'formadd'])->name('adminpage.promotion.add');
Route::post('/admin/adminpromotion/create',[App\Http\Controllers\PromotionController::class, 'add'])->name('adminpage.promotion.create');
Route::get('/admin/promotion/edit/{id}',[App\Http\Controllers\PromotionController::class, 'edit']);
Route::post('/admin/promotion/update/{id}',[App\Http\Controllers\PromotionController::class, 'update']);
Route::get('/admin/promotion/delete/{id}',[App\Http\Controllers\PromotionController::class, 'delete']);
//blackground
Route::get('/admin/adminblackground',[App\Http\Controllers\BlackgroundController::class, 'index'])->name('adminpage.blackground.adminblackground');
Route::get('/admin/adminblackground/add',[App\Http\Controllers\BlackgroundController::class, 'formadd'])->name('adminpage.blackground.add');
Route::post('/admin/adminblackground/create',[App\Http\Controllers\BlackgroundController::class, 'add'])->name('adminpage.blackground.create');
Route::get('/admin/adminblackground/edit',[App\Http\Controllers\BlackgroundController::class, 'edit'])->name('adminpage.blackground.edit');
Route::get('/admin/adminblackground/delete/{id}',[App\Http\Controllers\BlackgroundController::class, 'delete']);
//product
Route::get('/admin/product',[App\Http\Controllers\ProductController::class, 'index'])->name('adminpage.product.adminproduct');
Route::get('/admin/product/add',[App\Http\Controllers\ProductController::class, 'formadd'])->name('adminpage.product.add');
Route::post('/admin/product/create',[App\Http\Controllers\ProductController::class, 'add'])->name('adminpage.product.create');  
Route::get('/admin/product/edit',[App\Http\Controllers\ProductController::class, 'edit'])->name('adminpage.product.edit'); 
//content
Route::get('/admin/content',[App\Http\Controllers\ContentController::class, 'index'])->name('adminpage.content.admincontent');
Route::get('/admin/content/add',[App\Http\Controllers\ContentController::class, 'formadd'])->name('adminpage.content.add');
Route::post('/admin/content/create',[App\Http\Controllers\ContentController::class, 'add'])->name('adminpage.content.create');
Route::get('/admin/content/edit/{id}',[App\Http\Controllers\ContentController::class, 'edit']);
Route::post('/admin/content/update/{id}',[App\Http\Controllers\ContentController::class, 'update']);
Route::get('/admin/content/delete/{id}',[App\Http\Controllers\ContentController::class, 'delete']);   
//delivery
Route::get('/admin/delivery',[App\Http\Controllers\DeliveryController::class, 'index'])->name('adminpage.delivery.admindelivery');
Route::get('/admin/delivery/add',[App\Http\Controllers\DeliveryController::class, 'formadd'])->name('adminpage.delivery.add');
Route::post('/admin/delivery/add',[App\Http\Controllers\DeliveryController::class, 'add'])->name('adminpage.delivery.add');
Route::get('/admin/delivery/edit',[App\Http\Controllers\DeliveryController::class, 'edit'])->name('adminpage.delivery.edit');
//customer
Route::get('/admin/customer',[App\Http\Controllers\CustomerController::class, 'index'])->name('adminpage.customer.admincustomer');
Route::get('/admin/customer/add',[App\Http\Controllers\CustomerController::class, 'formadd'])->name('adminpage.customer.add');
Route::post('/admin/customer/add',[App\Http\Controllers\CustomerController::class, 'add'])->name('adminpage.customer.add');
Route::get('/admin/customer/edit/{id}',[App\Http\Controllers\CustomerController::class, 'edit']);
Route::post('/admin/customer/update/{id}',[App\Http\Controllers\CustomerController::class, 'update']);
Route::get('/admin/customer/delete/{id}',[App\Http\Controllers\CustomerController::class, 'delete']);
//address
Route::get('/admin/address',[App\Http\Controllers\AddressController::class, 'index'])->name('adminpage.address.adminaddress');
Route::get('/admin/address/add',[App\Http\Controllers\AddressController::class, 'formadd'])->name('adminpage.address.add');
Route::post('/admin/address/add',[App\Http\Controllers\AddressController::class, 'add'])->name('adminpage.address.add');
Route::get('/admin/address/edit',[App\Http\Controllers\AddressController::class, 'edit'])->name('adminpage.address.edit');
Route::get('/admin/address/edit/{id}',[App\Http\Controllers\AddressController::class, 'edit']);
Route::post('/admin/address/update/{id}',[App\Http\Controllers\AddressController::class, 'update']);
Route::get('/admin/address/delete/{id}',[App\Http\Controllers\AddressController::class, 'delete']);
//type
Route::get('/admin/type',[App\Http\Controllers\TypeController::class, 'index'])->name('adminpage.type.admintype');  
Route::get('/admin/type/add',[App\Http\Controllers\TypeController::class, 'formadd'])->name('adminpage.type.add');
Route::post('/admin/type/add',[App\Http\Controllers\TypeController::class, 'add'])->name('adminpage.type.add');
Route::get('/admin/type/edit/{id}',[App\Http\Controllers\TypeController::class, 'edit']);
Route::post('/admin/type/update/{id}',[App\Http\Controllers\TypeController::class, 'update']);
Route::get('/admin/type/delete/{id}',[App\Http\Controllers\TypeController::class, 'delete']);

//End admin


