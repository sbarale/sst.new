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

//Route::get( '/refinance', function () {
//	return view( 'fronts.sst.loan.home.refinance.refinance_v1' );
//} );

//Route::get( '/remodeling/bath', function () {
//	return view( 'fronts.sst.remodeling.bath.index' );
//} );

/*
 * by using 'controller' instead of get/post we make use of Laravel's controller routing
 * and it will invoke getIndex() and postIndex() automatically. This way we can use just
 * one line per offer/campaign.
 */
Route::get( '/remodeling/bath/{id}', 'Offers\BathwrapsController@showForm' );
Route::post( '/remodeling/bath/{id}', 'Offers\BathwrapsController@postForm' );

Route::get( '/remodeling/tub/{id}', 'Offers\TubController@showForm' );
Route::post( '/remodeling/tub/{id}', 'Offers\TubController@postForm' );

Route::get( '/remodeling/refinance/{id}', 'Offers\RefinanceController@showForm' );
Route::post( '/remodeling/refinance/{id}', 'Offers\RefinanceController@postForm' );

Route::get( '/remodeling/home-purchase/{id}', 'Offers\HomePurchaseController@showForm' );
Route::post( '/remodeling/home-purchase/{id}', 'Offers\HomePurchaseController@postForm' );

Route::get( '/remodeling/car-loan/{id}', 'Offers\CarLoanController@showForm' );
Route::post( '/remodeling/car-loan/{id}', 'Offers\CarLoanController@postForm' );

Route::get( '/remodeling/window/{id}', 'Offers\WindowController@showForm' );
Route::post( '/remodeling/window/{id}', 'Offers\WindowController@postForm' );

Route::get( '/remodeling/roof/{id}', 'Offers\RoofController@showForm' );
Route::post( '/remodeling/roof/{id}', 'Offers\RoofController@postForm' );

Route::get( '/remodeling/home-warrenty/{id}', 'Offers\HomeWarrentyController@showForm' );
Route::post( '/remodeling/home-warrenty/{id}', 'Offers\HomeWarrentyController@postForm' );

Route::get( '/remodeling/tax-settlement/{id}', 'Offers\TaxSettlementController@showForm' );
Route::post( '/remodeling/tax-settlement/{id}', 'Offers\TaxSettlementController@postForm' );

Route::get( '/remodeling/solar-energy-choose/', 'Offers\SolarEnergyController@showList' );

Route::get( '/remodeling/solar-energy/{id}/{location}', 'Offers\SolarEnergyController@showForm' );
Route::post( '/remodeling/solar-energy/{id}/{location}', 'Offers\SolarEnergyController@postForm' );

Route::post( '/get-state-providers/', 'Offers\SolarEnergyController@getProviders' );

Route::get( '/remodeling/debt-choose/', 'Offers\DebtController@showList' );

Route::get( '/remodeling/debt/{id}/{location}', 'Offers\DebtController@showForm' );
Route::post( '/remodeling/debt/{id}/{location}', 'Offers\DebtController@postForm' );

Route::get( '/remodeling/auto-warranty/{id}', 'Offers\AutoWarrantyController@showForm' );
Route::post( '/remodeling/auto-warranty/{id}', 'Offers\AutoWarrantyController@postForm' );

Route::get( '/remodeling/insurance-presell/', 'Offers\InsuranceController@showPresell' );

Route::get( '/remodeling/insurance/{id}', 'Offers\InsuranceController@showForm' );
Route::post( '/remodeling/insurance/{id}', 'Offers\InsuranceController@postForm' );

Route::get( '/remodeling/medicare-presell/', 'Offers\MedicareController@showPresell' );

Route::get( '/remodeling/medicare/{id}', 'Offers\MedicareController@showForm' );
Route::post( '/remodeling/medicare/{id}', 'Offers\MedicareController@postForm' );