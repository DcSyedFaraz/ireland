<?php

use App\Service;
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

Auth::routes(['register' => true]);


// Admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'verified', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    // Web_Setting
    Route::resource('setting', 'WebSettingController');

    // Orders
    Route::get('get-orders', 'OrdersController@getOrders')->name('orders.get');
    Route::resource('orders', 'OrdersController');

     // Invoices
     Route::resource('invoices', 'InvoicesController');

     // Contacts
    Route::get('get-contacts', 'ContactController@getContacts')->name('contacts.get');
    Route::resource('contacts', 'ContactController');


     // Customers
     Route::resource('customers', 'CustomersController');

     // Contacts
     Route::get('get-contacts', 'ContactController@getContacts')->name('contacts.get');
     Route::resource('contacts', 'ContactController');

    //Service
    Route::post('services/slug', 'ServiceController@getSlug')->name('services.getSlug');
    Route::resource('services', 'ServiceController');

    //Blogs
    Route::post('blogs/slug', 'BlogsController@getSlug')->name('blogs.getSlug');
    Route::resource('blogs', 'BlogsController');
});

//Customer Routes
Route::group(['prefix' => 'customer', 'as' => 'customer.', 'namespace' => 'Customer', 'middleware' => [ 'auth', 'verified', 'customer']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    // Orders
    Route::resource('orders', 'OrdersController');

    // Invoices
    Route::resource('invoices', 'InvoicesController');

    // Profile
    Route::resource('profile', 'ProfileController')->only(['index', 'update']);
    // Change
    Route::get('change-password', 'ProfileController@changePassword')->name('profile.change-password');
    Route::post('change-password', 'ProfileController@changePasswordUpdate')->name('profile.change-password.change');
});


//Change Password
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {

    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});




// Web routes
Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'PagesController@index')->name('home');
    Route::get('/about-us', 'PagesController@about')->name('about');
     // PoliciesController
     Route::get('/revision-policy',     "PoliciesController@revisionPolicy")->name('policy.revision');
     Route::get('/refund-policy',       "PoliciesController@refundPolicy")->name('policy.refund');
     Route::get('/terms-and-conditions',"PoliciesController@termsAndConditions")->name('policy.terms-and-conditions');
     Route::get('/privacy-policy',      "PoliciesController@privacyPolicy")->name('policy.privacy-policy');

    //Order
    Route::get('/order', 'OrderController@create')->name('order');
    Route::post('/order', 'OrderController@store')->name('order.store');
    Route::get('/invoice', "OrderController@invoice")->name('invoice');


    Route::post('/', 'PagesController@queryStore')->name('form.submit');

    // ContactController
    Route::get('/contact',    "ContactController@create")->name('contact');
    Route::post('/contact',   "ContactController@store")->name('contact.store');

    // Blogs
    Route::get('/blogs', 'BlogsController@create')->name('blogs');
    Route::get('/blogs/{slug}', 'BlogsController@show')->name('blogs.show');
    // Service
    Route::get('/reviews',      "PagesController@reviews")->name('reviews');
    Route::get('/{slug}', 'ServiceController@show')->name('services.show');

    Route::post('/get-fare',    "PagesController@getFare")->name('get.fare');






});






