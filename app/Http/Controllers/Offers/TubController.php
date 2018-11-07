<?php

namespace App\Http\Controllers\Offers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\LeadspediaController;

class TubController extends LeadspediaController {
	// Populate here the credentials for the given campaign/offer
	protected $offer_credentials = [
		'campaign_id'  => '5bd74cb2df487',
		'campaign_key' => 'bTP2ZY6jLhJVRqGwHXpD',
	];

	public function showForm( $id = 1 ) {
		return view( "fronts.sst.remodeling.tub.$id.index", $this->data );
	}

	public function postForm( $id = 1, $custom_fields = [] ) {
        $custom_fields = [
//			'phone' => preg_replace( "#[[:punct:]]#", "", Input::post( 'alt_phone', '' ) ),
			'city'      => Input::post( 'city', '' ),
			'state'     => Input::post( 'state', '' ),
		];
		/*
		 * Call the parent class for functionality
		 */
		parent::postForm( $id, $custom_fields );

		/*
		 * Return the specialized version of the view
		 */

		return view( "fronts.sst.remodeling.tub.$id.thankyou", [
			'fname'     => $this->post_data['first_name'],
			'lname'     => $this->post_data['last_name'],
			'urlupsell' => $this->post_data['urlupsell'],
            'response'  => $this->response,
        ])->with($this->data); // <<--- VERY IMPORTANT SINCE IT CONTROLS BEHAVIOR OF THE PAGE
	}
}