<?php

namespace App\Http\Controllers\Offers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\LeadspediaController;

class TaxSettlementController extends LeadspediaController {
    // Populate here the credentials for the given campaign/offer
    protected $offer_credentials = [
        'campaign_id'  => '5b6313889dc73',
        'campaign_key' => 'fxYHVwbMWT4t2By6mpn8',
    ];

    public function showForm( $id = 1 ) {
        return view( "fronts.sst.remodeling.tax-settlement.$id.index", $this->data );
    }

    public function postForm( $id = 1, $custom_fields = [] ) {
        $custom_fields = [
            'tax_debt'          => Input::post( 'tax_debt', '' ),
            'IRS_debt_program'  => Input::post( 'IRS_debt_program', '' ),
            'source_of_income'  => Input::post( 'source_of_income', '' ),
        ];
        /*
         * Call the parent class for functionality
         */
        parent::postForm( $id, $custom_fields );

        /*
         * Return the specialized version of the view
         */

        return view( "fronts.sst.remodeling.tax-settlement.$id.thankyou", [
            'fname'     => $this->post_data['first_name'],
            'lname'     => $this->post_data['last_name'],
            'urlupsell' => $this->post_data['urlupsell'],
        ] );
    }
}