<?php

namespace App\Http\Controllers\Offers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\LeadspediaController;

class InsuranceController extends LeadspediaController {
    // Populate here the credentials for the given campaign/offer
    protected $offer_credentials = [
        'campaign_id'  => '5b6313889dc73',
        'campaign_key' => 'fxYHVwbMWT4t2By6mpn8',
    ];

    public function showPresell() {
        return view( "fronts.sst.remodeling.insurance.insurance-presell", $this->data );
    }

    public function showForm( $id = 1 ) {
        return view( "fronts.sst.remodeling.insurance.$id.index", $this->data );
    }

    public function postForm( $id = 1, $custom_fields = [] ) {
        $custom_fields = [
            'over50'            => Input::post( 'over50', '' ),
            'resident'          => Input::post( 'resident', '' ),
            'dd_dob_day'        => Input::post( 'dd_dob_day', '' ),
            'dd_dob_month'      => Input::post( 'dd_dob_month', '' ),
            'dd_dob_year'       => Input::post( 'dd_dob_year', '' ),
            'email_address'     => Input::post( 'email', '' ),
            'first_name'        => Input::post( 'firstName', '' ),
            'last_name'         => Input::post( 'lastName', '' ),
            'phone_home'        => Input::post( 'landLinePhone', '' ),
        ];
        /*
         * Call the parent class for functionality
         */
        parent::postForm( $id, $custom_fields );

        /*
         * Return the specialized version of the view
         */

        return view( "fronts.sst.remodeling.insurance.$id.thankyou", [
            'fname'     => $this->post_data['first_name'],
            'lname'     => $this->post_data['last_name'],
            'urlupsell' => $this->post_data['urlupsell'],
            'response'  => $this->response,
        ])->with($this->data); // <<--- VERY IMPORTANT SINCE IT CONTROLS BEHAVIOR OF THE PAGE
    }
}