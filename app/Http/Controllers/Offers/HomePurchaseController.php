<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 01.10.2018
 * Time: 21:21
 */

namespace App\Http\Controllers\Offers;

use App\Http\Controllers\LeadspediaController;
use Illuminate\Support\Facades\Input;


class HomePurchaseController extends LeadspediaController {
    // Populate here the credentials for the given campaign/offer
    protected $offer_credentials = [
        'campaign_id'  => '5b6313889dc73',
        'campaign_key' => 'fxYHVwbMWT4t2By6mpn8',
    ];

    public function showForm( $id = 1 ) {
        return view( "fronts.sst.remodeling.home-purchase.$id.index", $this->data );
    }

    public function postForm( $id = 1, $custom_fields = [] ) {
        $custom_fields = [
            'property_type'     => Input::post( 'property_type', '' ),
            'credit'            => Input::post( 'credit', ''),
            'loan_balance'      => Input::post( 'loan_balance', ''),
            'property_value'    => Input::post( 'property_value', ''),
            'interest_value'    => Input::post( 'interest_value', ''),
        ];
        /*
         * Call the parent class for functionality
         */
        parent::postForm( $id, $custom_fields );

        /*
         * Return the specialized version of the view
         */

        return view( "fronts.sst.remodeling.home-purchase.$id.thankyou", [
            'fname'     => $this->post_data['first_name'],
            'lname'     => $this->post_data['last_name'],
            'urlupsell' => $this->post_data['urlupsell'],
            'response'  => $this->response,
        ])->with($this->data); // <<--- VERY IMPORTANT SINCE IT CONTROLS BEHAVIOR OF THE PAGE
    }
}