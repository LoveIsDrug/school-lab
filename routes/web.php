<?php

    use App\Http\Controllers\AdminController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Requests;
    use Illuminate\Support\Facades\Redirect;
    use App\Http\Controllers\ProductController;

    session_start();


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

    Route::get('/', [HomeController::class, 'index']);

    Route::get('/trang-chu', [HomeController::class, 'index']);

    Route::get('/product', function () {
        return view('pages.home');
    });
    Route::get('/product', function () {
        return view('pages.product');
    });
    Route::get('/news', function () {
        return view('pages.news');
    });
    Route::get('/contact', function () {
        return view('pages.contact');
    });

    Route::get('/admin', [AdminController::class, 'index']);

    Route::get('/dashboard', [AdminController::class, 'show_dashnoard']);
    Route::post('/admin-dashboard', 'AdminController@dashboard');
    Route::get('/logout', 'AdminController@logout');

    //Category Product
    Route::get('/add-category-product', 'CategoryProduct@add_category_product');
    Route::get('/all-category-product', 'CategoryProduct@all_category_product');
    Route::post('/save-category-product', 'CategoryProduct@save_category_product');
    Route::get('/unactive-categoryproduct/{category_product_id}', 'CategoryProduct@unactive_category_product');
    Route::get('/active-categoryproduct/{category_product_id}', 'CategoryProduct@active_category_product');

    //Brand Product
    Route::get('/add-brand-product', 'BrandProduct@add_brand_product');
    Route::get('/all-brand-product', 'BrandProduct@all_brand_product');
    Route::post('/save-brand-product', 'BrandProduct@save_brand_product');
    Route::get('/unactive-brandproduct/{brand_product_id}', 'BrandProduct@unactive_brand_product');
    Route::get('/active-brandproduct/{brand_product_id}', 'BrandProduct@active_brand_product');
    Route::get('/edit-brandproduct/{brand_product_id}', 'BrandProduct@edit_brand_product');
    Route::post('/update-brandproduct/{brand_product_id}', 'BrandProduct@update_brand_product');
    Route::get('/delete-brandproduct/{brand_product_id}', 'BrandProduct@delete_brand_product');

    Route::get('/add-product', [ProductController::class], 'add_product');
    Route::post('/save-product', 'ProductController@save_product');
    Route::get('/all-product', 'ProductController@all_product');
    Route::get('/unactiveproduct/{product_id}', 'ProductController@unactive_product');
    Route::get('/active-product/{product_id}', 'ProductController@active_product');
    Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
    Route::post('/update-product/{product_id}', 'ProductController@update_product');
    Route::get('/delete-product/{product_id}', 'ProductController@delete_product');

    Route::get('/danh-muc-sanpham/{slug_category_product}', 'CategoryProduct@show_category_home');
    Route::get('/thuong-hieu-sanpham/{brand_slug}', 'BrandProduct@show_brand_home');
    Route::get('/chi-tiet-san-pham/{product_id}', 'ProductController@details_product');
    Route::post('/save-cart', 'CartController@save_cart');
    Route::get('/show-cart', 'CartController@show_cart');
    Route::get('/delete-to-cart/{rowId}', 'CartController@delete_to_cart');
    Route::post('/update-cart-quantity', 'CartController@update_cart_quantity');
    Route::get('/login-checkout', 'CheckoutController@login_checkout');
    Route::post('/add-customer', 'CheckoutController@add_customer');
    Route::get('/checkout', 'CheckoutController@checkout');
    Route::post('/login-customer', 'CheckoutController@login_customer');
    Route::get('/logout-checkout', 'CheckoutController@logout_checkout');
    Route::post('/save-checkoutcustomer', 'CheckoutController@save_checkout_customer');
    Route::get('/payment', 'CheckoutController@payment');
    Route::post('/order-place', 'CheckoutController@order_place');
    Route::get('/manage-order', 'CheckoutController@manage_order');
    Route::get('/view-order/{orderId}', 'CheckoutController@view_order');
    Route::get('/chi-tiet-san-pham/{product_id}', 'ProductController@details_product');
    Route::get('/taikhoan', 'CheckoutController@user_setting');
    Route::get('/view-order-user/{orderId}', 'CheckoutController@view_order_user');
    Route::post('/tim-kiem', 'HomeController@search');


