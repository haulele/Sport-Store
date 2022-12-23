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
Route::group(['prefix' => 'laravel-filemanager', 'middleware'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::get('/admin', 'App\Http\Controllers\AdminController@loginAdmin')->name('loginAdmin');
Route::post('/admin', 'App\Http\Controllers\AdminController@postloginAdmin');
Route::get('/admin/signup', 'App\Http\Controllers\AdminController@signupAdmin')->name('signupAdmin');
// Trang chủ admin
Route::get('/home', function () {
    return view('home');
});

Route::prefix('admin')->group(function (){
    // Danh mục sản phẩm
    Route::prefix('categories')->group(function () {
        Route::get('/create', [
            'as' => 'categories.create',
            'uses' => 'App\Http\Controllers\CategoryController@create'
        ]);
        Route::get('/index', [
            'as' => 'categories.index',
            'uses' => 'App\Http\Controllers\CategoryController@index'
        ]);
        Route::post('/store', [
            'as' => 'categories.store',
            'uses' => 'App\Http\Controllers\CategoryController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'categories.edit',
            'uses' => 'App\Http\Controllers\CategoryController@edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'categories.update',
            'uses' => 'App\Http\Controllers\CategoryController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'categories.delete',
            'uses' => 'App\Http\Controllers\CategoryController@delete'
        ]);
    });
    //Menu 
    Route::prefix('menus')->group(function () {
        Route::get('/index', [
            'as' => 'menus.index',
            'uses' => 'App\Http\Controllers\MenuController@index'
        ]);

        Route::get('/create', [
            'as' => 'menus.create',
            'uses' => 'App\Http\Controllers\MenuController@create'
        ]);

        Route::post('/store', [
            'as' => 'menus.store',
            'uses' => 'App\Http\Controllers\MenuController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'menus.edit',
            'uses' => 'App\Http\Controllers\MenuController@edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'menus.update',
            'uses' => 'App\Http\Controllers\MenuController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'menus.delete',
            'uses' => 'App\Http\Controllers\MenuController@delete'
        ]);
    });
    //Product
    Route::prefix('product')->group(function () {
        Route::get('/', [
            'as' => 'product.index',
            'uses' => 'App\Http\Controllers\ProductController@index'
        ]);

        Route::get('/create', [
            'as' => 'product.create',
            'uses' => 'App\Http\Controllers\ProductController@create'
        ]);
        Route::post('/store', [
            'as' => 'product.store',
            'uses' => 'App\Http\Controllers\ProductController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'product.edit',
            'uses' => 'App\Http\Controllers\ProductController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'product.update',
            'uses' => 'App\Http\Controllers\ProductController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'product.delete',
            'uses' => 'App\Http\Controllers\ProductController@delete'
        ]);

    });
    //Sliders
    Route::prefix('slider')->group(function () {
        Route::get('/', [
            'as' => 'slider.index',
            'uses' => 'App\Http\Controllers\SliderController@index'
        ]);

        Route::get('/create', [
            'as' => 'slider.create',
            'uses' => 'App\Http\Controllers\SliderController@create'
        ]);

        Route::post('/store', [
            'as' => 'slider.store',
            'uses' => 'App\Http\Controllers\SliderController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'slider.edit',
            'uses' => 'App\Http\Controllers\SliderController@edit'
        ]);
        
        Route::post('/update/{id}', [
            'as' => 'slider.update',
            'uses' => 'App\Http\Controllers\SliderController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'slider.delete',
            'uses' => 'App\Http\Controllers\SliderController@delete'
        ]);


    });
    //Setting
    Route::prefix('settings')->group(function () {
        Route::get('/', [
            'as' => 'settings.index',
            'uses' => 'App\Http\Controllers\SettingController@index'
        ]);

        Route::get('/create', [
            'as' => 'settings.create',
            'uses' => 'App\Http\Controllers\SettingController@create'
        ]);

        Route::post('/store', [
            'as' => 'settings.store',
            'uses' => 'App\Http\Controllers\SettingController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'settings.edit',
            'uses' => 'App\Http\Controllers\SettingController@edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'settings.update',
            'uses' => 'App\Http\Controllers\SettingController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'settings.delete',
            'uses' => 'App\Http\Controllers\SettingController@delete'
        ]);

    });
    //User
    Route::prefix('users')->group(function () {
        Route::get('/', [
            'as' => 'users.index',
            'uses' => 'App\Http\Controllers\UserAdminController@index'
        ]);
        Route::get('/create', [
            'as' => 'users.create',
            'uses' => 'App\Http\Controllers\UserAdminController@create'
        ]);
        Route::post('/store', [
            'as' => 'users.store',
            'uses' => 'App\Http\Controllers\UserAdminController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'users.edit',
            'uses' => 'App\Http\Controllers\UserAdminController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'users.update',
            'uses' => 'App\Http\Controllers\UserAdminController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'users.delete',
            'uses' => 'App\Http\Controllers\UserAdminController@delete'
        ]);
    });
    //Role
    Route::prefix('roles')->group(function () {
        Route::get('/', [
            'as' => 'roles.index',
            'uses' => 'App\Http\Controllers\RoleAdminController@index'
        ]);
    });
});

Route::prefix('homepage')->group(function() {
    //homepage
    Route::get('/', [
        'as' => 'layouts.homepage',
        'uses' => 'App\Http\Controllers\HomepageController@index'
    ]);
    //product follow category
    Route::get('/category/{slug}/{id}', [
        'as' => 'category.product',
        'uses' => 'App\Http\Controllers\HomepageController@categoryProduct'
    ]);
    //full-product
    Route::get('/product', [
        'as' => 'layouts.product',
        'uses' => 'App\Http\Controllers\HomepageController@product'
    ]);
    //product-detail
    Route::get('/detail/{category_id}/{id}', [
        'as' => 'category.productdetail',
        'uses' => 'App\Http\Controllers\HomepageController@productDetail'
    ]);
    //introduce-shop
    Route::get('/introduce', [
        'as' => 'layouts.introduce',
        'uses' => 'App\Http\Controllers\HomepageController@introduce'
    ]);
    //contact
    Route::get('/contact', [
        'as' => 'layouts.contact',
        'uses' => 'App\Http\Controllers\HomepageController@contact'
    ]);
    //add to cart
    Route::get('/products/addtocart/{id}', 'App\Http\Controllers\HomepageController@addToCart')->name('addToCart');
    Route::get('/products/showcart', 'App\Http\Controllers\HomepageController@showCart')->name('showCart');
    Route::get('/products/updatecart', 'App\Http\Controllers\HomepageController@updateCart')->name('updateCart');
    Route::get('/products/deletecart', 'App\Http\Controllers\HomepageController@deleteCart')->name('deleteCart');
    //payment
    Route::get('/payment', [
        'as' => 'layouts.payment',
        'uses' => 'App\Http\Controllers\HomepageController@payment'
    ]);
    //search
    Route::get('/search', [
        'as' => 'layouts.search',
        'uses' => 'App\Http\Controllers\HomepageController@search'
    ]);
});





