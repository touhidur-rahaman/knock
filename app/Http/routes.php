<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Product;
use App\FeaturedProduct;
use App\MainSlider;
use App\SmallSlider;
use DB;


Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    $fp_data = FeaturedProduct::getAllFeaturedProducts();
    $ms_data = MainSlider::getMainSliderItems();
    $ss_data = SmallSlider::getSmallSliderItems();

    $data = array('product_list' => $fp_data,
                  'ms_list' => $ms_data,
                  'ss_list' => $ss_data
            );
    return view( 'home', $data );
});

Route::get('/featured', function () {
    $data = FeaturedProduct::getAllFeaturedProducts();
    return view('featured', array('product_list' => $data));
});

Route::get('/upcoming', function () {
    $data = DB::table('products')
              ->where('products.status', 5)
              ->orderBy('created_at', 'desc')
              // ->take(9)
              ->get();
    return view('upcoming', array('product_list' => $data));
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/details/{id}', function ($id) {
    $data = Product::find($id);
    return view('details', array('product' => $data));
});

Route::get('/register', function () {
    return view('register');
});


// Route::resource('cars', 'Site\ProductCtrl');
