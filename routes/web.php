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
Route::view('/mashroomkonnoy', 'promotepage.mashroomkonnoy')->name('mashroom');

//end promote

//start admin
Auth::routes();

Route::get('/admin/home',[App\Http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');
Route::get('/admin/admincontact',[App\Http\Controllers\ContactController::class, 'index'])->name('adminpage.contact.admincontact');
Route::get('/admin/adminpromotion',[App\Http\Controllers\PromotionController::class, 'index'])->name('adminpage.promotion.adminpromotion');
Route::get('/admin/adminblackground',[App\Http\Controllers\BlackgroundController::class, 'index'])->name('adminpage.blackground.adminblackground');
Route::get('/admin/product',[App\Http\Controllers\ProductController::class, 'index'])->name('adminpage.product.adminproduct'); 
Route::get('/admin/content',[App\Http\Controllers\ContentController::class, 'index'])->name('adminpage.content.admincontent'); 
Route::get('/admin/delivery',[App\Http\Controllers\DeliveryController::class, 'index'])->name('adminpage.delivery.admindelivery');
Route::get('/admin/customer',[App\Http\Controllers\CustomerController::class, 'index'])->name('adminpage.customer.admincustomer');
Route::get('/admin/customer',[App\Http\Controllers\AddressController::class, 'index'])->name('adminpage.address.adminaddress');
Route::get('/admin/type',[App\Http\Controllers\TypeController::class, 'index'])->name('adminpage.type.admintype');  

//End admin

