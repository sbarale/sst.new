<?php

namespace App\Http\Controllers\Offers;

use App\Http\Controllers\LeadspediaController;


class BathwrapsController extends LeadspediaController {
	// Populate here the credentials for the given campaign/offer
	protected $offer_credentials = [
		'campaign_id'  => '5b6313889dc73',
		'campaign_key' => 'fxYHVwbMWT4t2By6mpn8',
	];

	public function showForm() {
		return view( 'fronts.sst.remodeling.bath2.index', $this->data );
	}

	public function postForm() {
		/*
		 * Call the parent class for functionality
		 */
		parent::postForm();

		/*
		 * Return the specialized version of the view
		 */

		return view( 'fronts.sst.remodeling.bath2.thankyou', [
			'fname'     => $this->post_data['first_name'],
			'lname'     => $this->post_data['last_name'],
			'urlupsell' => $this->post_data['urlupsell'],
		] );
	}
}