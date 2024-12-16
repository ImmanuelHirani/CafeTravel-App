<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\contactUsController;
use App\Http\Controllers\CustomCategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerOrderController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\profileController;

// FE
// Customer
Route::get('/', [CustomerController::class, 'index'])->name('template');
Route::post('/customer/register', [CustomerController::class, 'register'])->name('register');
Route::post('/customer/login', [CustomerController::class, 'login'])->name('login');
Route::post('/customer/logout', [CustomerController::class, 'logout'])->name('logout');

// frontend menu
Route::get('/menu', [MenuController::class, 'Product'])->name('frontend.menu');
Route::get('/menu/detail/{id}/{size?}', [MenuController::class, 'getMenuDetails'])->name('frontend.menu.details');

// Profile
Route::get('/profile', [profileController::class, 'profile'])->name('frontend.profile');
Route::put('/profile/update/{customer_ID}', [CustomerController::class, 'updateCustomer'])->name('profile.update');
Route::post('/profile/location/add', [LocationController::class, 'addLocation'])->name('profile.location.add');
Route::put('/profile/location/update/primary/{locationID}', [LocationController::class, 'updatePrimary'])->name('profile.location.primary');


// Custom Order
Route::get('/menu/custom', [CustomerOrderController::class, 'customPizza'])->name('frontend.menu.custom');
Route::post('/custom-categories/store', [CustomCategoriesController::class, 'store'])->name('custom.categories.store');
Route::delete('admin/menu/custom/delete/{id}', [CustomCategoriesController::class, 'delete'])->name('custom.categories.delete');

Route::get('admin/menu/custom/details/{id}', [OrderController::class, 'getCategoriesDetails'])->name('custom.categories.details');



// Cart
Route::get('/cart', [CartController::class, 'cartMenu'])->name('cart.view');
Route::put('/cart/update/{tempID}', [CartController::class, 'updateCartQuantity'])->name('cart.update');
Route::delete('/cart/delete/{tempID}', [CartController::class, 'deleteCart'])->name('delete.cart');
Route::post('/cart/add', [CartController::class, 'AddToCart'])->name('cart.add');


// Order
Route::get('/payment', [OrderController::class, 'payment'])->name('payment.view');
Route::get('/tracking/order', [OrderController::class, 'trackOrder'])->name('tracking.view');
Route::get('/make-order', [OrderController::class, 'makeOrder'])->name('make.order');
Route::put('/order/cancel/{orderId}', [OrderController::class, 'cancelOrder'])->name('order.cancel');
Route::put('/order/pay/{orderId}', [OrderController::class, 'payOrder'])->name('order.pay');



// Contact US
Route::get('/contact', [contactUsController::class, 'contactUS'])->name('contact.view');


Route::get('/Dashboard', function () {
    return view('Backend.Admin-Dashboard');
})->name('Dashboard');

// BE

// Admin Customer
Route::get('/Customer', [CustomerController::class, 'viewAdmin'])->name('customer.admin');
Route::get('/customer/detail/{id}', [CustomerController::class, 'getCustomerDetails'])->name('customer.details');

// Admin Product
Route::get('/admin/product', [MenuController::class, 'Product'])->name('admin.product');
Route::get('/admin/product/detail/{id}', [MenuController::class, 'getMenuDetails'])->name('admin.product.detail');

// Route untuk update ukuran menu

Route::get('/admin/menu/order', [OrderController::class, 'adminOrder'])->name('admin.order');
Route::get('/admin/menu/custom/order', [OrderController::class, 'adminCustomOrder'])->name('admin.custom.order');
Route::get('/admin/menu/order/{id}', [OrderController::class, 'getCustomerOrderDetails'])->name('admin.order.details');
// Route untuk mengupdate status order
Route::post('/order/update-status/{orderID}', [OrderController::class, 'updateStatus'])->name('order.updateStatus');



Route::put('/update/product/{id}', [MenuController::class, 'updateMenu'])->name('update.menu');
Route::delete('/delete/product/{id}', [MenuController::class, 'deleteMenu'])->name('delete.menu');
Route::post('/create/product', [MenuController::class, 'NewMenu'])->name('create.new.product');
