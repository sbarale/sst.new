<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 04.10.2018
 * Time: 12:19
 */

namespace App\Http\Controllers\Offers;

use App\Http\Controllers\LeadspediaController;
use Illuminate\Support\Facades\Input;

class CarLoanController extends LeadspediaController{
    // Populate here the credentials for the given campaign/offer
    protected $offer_credentials = [
        'campaign_id'  => '5b6313889dc73',
        'campaign_key' => 'fxYHVwbMWT4t2By6mpn8',
    ];

    public function showForm( $id = 1 ) {
        return view( "fronts.sst.remodeling.car-loan.$id.index", $this->data );
    }

    public function postForm( $id = 1, $custom_fields = [] ) {
        $custom_fields = [
            'car-select'        => Input::post( 'car-select', '' ),
            'birth_month'       => Input::post( 'birth_month', '' ),
            'birth_day'         => Input::post( 'birth_day', '' ),
            'birth_year'        => Input::post( 'birth_year', '' ),
            'residence_time'    => Input::post( 'residence_time', '' ),
            'residence_status'  => Input::post( 'residence_status', '' ),
            'residence_payment' => Input::post( 'residence_payment', '' ),
            'employer_name'     => Input::post( 'employer_name', '' ),
            'job_title'         => Input::post( 'job_title', '' ),
            'employer_time'     => Input::post( 'employer_time', '' ),
            'monthly_income'    => Input::post( 'monthly_income', '' ),
            'ssn1'              => Input::post( 'ssn1', '' ),
            'ssn2'              => Input::post( 'ssn2', '' ),
            'ssn3'              => Input::post( 'ssn3', '' )
        ];
        /*
         * Call the parent class for functionality
         */
        parent::postForm( $id, $custom_fields );

        /*
         * Return the specialized version of the view
         */

        return view( "fronts.sst.remodeling.car-loan.$id.thankyou", [
            'fname'     => $this->post_data['first_name'],
            'lname'     => $this->post_data['last_name'],
            'urlupsell' => $this->post_data['urlupsell'],
        ] );
    }
}