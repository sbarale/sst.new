<?php

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

Route::get( '/', function () {
	return view( 'fronts.sst.index' );
} );

Route::get( '/refinance', function () {
	return view( 'fronts.sst.loan.home.refinance.refinance_v1' );
} );

Route::get( '/remodeling/bath', function () {
	return view( 'fronts.sst.remodeling.bath.index' );
} );

/*
 * by using 'controller' instead of get/post we make use of Laravel's controller routing
 * and it will invoke getIndex() and postIndex() automatically. This way we can use just
 * one line per offer/campaign.
 */
Route::get( '/remodeling/bath/{id}', 'Offers\BathwrapsController@showForm' );
Route::post( '/remodeling/bath/{id}', 'Offers\BathwrapsController@postForm' );

Route::get( '/remodeling/tub/{id}', 'Offers\TubController@showForm' );
Route::post( '/remodeling/tub/{id}', 'Offers\TubController@postForm' );
