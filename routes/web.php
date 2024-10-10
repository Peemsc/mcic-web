<?php

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
//-===================>Home<====================
Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home-customer');
});

Route::get('/seller', function () {
    return view('home-seller');
});

//===================>Register<==================
Route::get('/register', function () {
    return view('registers.index');
});

Route::get('/products-detail', function () {
    return view('products.detail');
});
Route::get('/products-catagory', function () {
    return view('products.catagory');
});
Route::get('/products-catagorygrid', function () {
    return view('products.catagorygrid');
});
Route::get('/promotions', function () {
    return view('products.promotion');
});

Route::get('/contents', function () {
    return view('contents.content');
});
Route::get('/content-details', function () {
    return view('contents.contentDetail');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/term-and-condition', function () {
    return view('termcondition');
});
Route::get('/cookie-policy', function () {
    return view('cookie-policy');
});
Route::get('/signin-customer', function () {
    return view('signin.signin-normal');
});
Route::get('/signin-juristic', function () {
    return view('signin.signin-juristic');
});
Route::get('/forgot-password', function () {
    return view('signin.forgot-password');
});
Route::get('/otp', function () {
    return view('signin.otp');
});
Route::get('/reset-password', function () {
    return view('signin.reset-password');
});
Route::get('/cart', function () {
    return view('cart.cart');
});



Route::get('/register/step-1', function () {
    return view('registers.customers.personal');
});

Route::get('/juristic/register/step-1', function () {
    return view('registers.juristic.personal');
});



Route::get('/register/success', function () {
    return view('registers.customers.success');
});

Route::get('/customers/profile', function () {
    return view('customers.profiles.profile');
});
Route::get('/customers/profile/edit', function () {
    return view('customers.profiles.edit');
});
Route::get('/customers/profile/document-upload', function () {
    return view('customers.profiles.documentupload');
});


Route::get('/customers/stock', function () {
    return view('customers.stocks.index');
});
Route::get('/customers/stock/update', function () {
    return view('customers.stocks.update');
});


Route::get('/customers/notification', function () {
    return view('customers.notifications.notification');
});

Route::get('/customers/reward-coupon', function () {
    return view('customers.rewards.index');
});
Route::get('/customers/credits', function () {
    return view('customers.creditStore.index');
});

Route::get('/customers/orders/purchase', function () {
    return view('customers.order.purchase');
});
Route::get('/customers/orders/delivery', function () {
    return view('customers.order.delivery');
});
Route::get('/customers/orders/payment', function () {
    return view('customers.order.payment');
});
Route::get('/customers/orders/credit', function () {
    return view('customers.order.credit');
});




Route::get('/seller/profile', function () {
    return view('sellers.profile.index');
});
Route::get('/seller/tripplan', function () {
    return view('sellers.tripplan.index');
});
