<?php

namespace App\Http\Controllers\Offers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\LeadspediaController;


class MedicareController extends LeadspediaController {
    // Populate here the credentials for the given campaign/offer
    protected $offer_credentials = [
        'campaign_id'  => '5b6313889dc73',
        'campaign_key' => 'fxYHVwbMWT4t2By6mpn8',
    ];

    public function showPresell() {
        return view( "fronts.sst.remodeling.medicare.medicare-presell", $this->data );
    }

    public function showForm( $id = 1 ) {
        return view( "fronts.sst.remodeling.medicare.$id.index", $this->data );
    }

    public function postForm( $id = 1, $custom_fields = [] ) {
        $custom_fields = [
            'Plan'              => Input::post( 'Plan', '' ),
            'birth_year'        => Input::post( 'birth_year', '' ),
            'birth_month'       => Input::post( 'birth_month', '' ),
            'birth_day'         => Input::post( 'birth_day', '' ),
            'gender'            => Input::post( 'gender', '' ),
            'street_address'    => Input::post( 'street_address', '' ),
            'city'              => Input::post( 'city', '' ),
            'state'             => Input::post( 'state', '' ),
            'alt_phone'         => Input::post( 'alt_phone', '' ),
        ];
        /*
         * Call the parent class for functionality
         */
        parent::postForm( $id, $custom_fields );

        /*
         * Return the specialized version of the view
         */

        return view( "fronts.sst.remodeling.medicare.$id.thankyou", [
            'fname'     => $this->post_data['first_name'],
            'lname'     => $this->post_data['last_name'],
            'urlupsell' => $this->post_data['urlupsell'],
            'response'  => $this->response,
        ])->with($this->data); // <<--- VERY IMPORTANT SINCE IT CONTROLS BEHAVIOR OF THE PAGE
    }
}