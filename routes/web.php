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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/' , 'HomepageController@index');
Route::get('/contact-us' , 'HomepageController@contactUs');
Route::post('/contact-us' , 'HomepageController@contactUsConfirm');
Route::get('/about-us', 'HomepageController@about_us');
Route::get('/products', 'HomepageController@products');
// Route::get('/single-product', 'HomepageController@single_product');
Route::get('/faq', 'HomepageController@faq');
// Route::get('/newsletter', 'HomepageController@news_letter');
Route::get('/terms-of-use', 'HomepageController@terms_of_use');

Route::get('/la-familia', 'HomepageController@la_familia');
Route::get('/classic-loaf', 'HomepageController@classic_loaf');
Route::get('/amet-coconut-loaf', 'HomepageController@amet_coconut_loaf');
Route::get('/fresh-basil-slipper', 'HomepageController@fresh_basil_slipper');
Route::get('/fresco-delight-roll', 'HomepageController@fresco_delight_roll');
Route::get('/sano-juice', 'HomepageController@sano_juice');
Route::get('/breakfast-box', 'HomepageController@breakfast_box');

