<?php

namespace App\Http\Controllers\Offers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\LeadspediaController;


class DebtController  extends LeadspediaController {
    // Populate here the credentials for the given campaign/offer
    protected $offer_credentials = [
        'campaign_id'  => '5b6313889dc73',
        'campaign_key' => 'fxYHVwbMWT4t2By6mpn8',
    ];

    public function showList() {
        return view( "fronts.sst.remodeling.debt.debt-choose", $this->data );
    }

    public function showForm( $id = 1, $location = 'us'  ) {
        return view( "fronts.sst.remodeling.debt.$location.$id.index", $this->data );
    }

    public function postForm( $id = 1, $location = 'us', $custom_fields = [] ) {
        $custom_fields = [
            'debt_amount'       => Input::post( 'debt_amount', '' ),
            'program'           => Input::post( 'program', '' ),
            'credit'            => Input::post( 'credit', '' ),
            'late_on_bills'     => Input::post( 'late_on_bills', '' ),
            'source_of_income'  => Input::post( 'source_of_income', '' ),
            'num_debts'         => Input::post( 'num_debts', '' ),
            'behind_on_bills'   => Input::post( 'behind_on_bills', '' ),
            'employment_status' => Input::post( 'employment_status', '' ),
            'house_number'      => Input::post( 'house_number', '' ),
            'postcode'          => Input::post( 'postcode', '' ),
            'time_to_call'      => Input::post( 'time_to_call', '' ),
            'alt_phone'         => Input::post( 'alt_phone', '' ),
        ];
        /*
         * Call the parent class for functionality
         */
        parent::postForm( $id, $custom_fields );

        /*
         * Return the specialized version of the view
         */

        return view( "fronts.sst.remodeling.debt.$location.$id.thankyou", [
            'fname'     => Input::post( 'first_name', '' ),
            'lname'     => Input::post( 'last_name', '' ),
            'urlupsell' => Input::post( 'urlupsell', '' ),
        ] );
    }
}