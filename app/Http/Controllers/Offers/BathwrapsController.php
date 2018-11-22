<?php

namespace App\Http\Controllers\Offers;

use App\Http\Controllers\LeadspediaController;
use Illuminate\Support\Facades\Input;


class BathwrapsController extends LeadspediaController
{
    // Populate here the credentials for the given campaign/offer
    protected $offer_credentials = [
        'campaign_id'  => '5b6313889dc73',
        'campaign_key' => 'fxYHVwbMWT4t2By6mpn8',
        // This is the offer conversion pixel from Leadspedia.
        // Get it from Leadspedia / Offers / Generate Conversion Pixel
        'pixel'        => 'https://track.geek3.io/pixel.do?o=2&t=p'
    ];

    public function showForm($id = 1)
    {
        return view("fronts.sst.remodeling.bath.$id.index", $this->data);
    }

    public function postForm($id = 1, $custom_fields = [])
    {
        $custom_fields = [
            'ratio_credit'        => Input::post('credit_rate', ''),
        ];
        /*
         * Call the parent class for functionality
         */
        parent::postForm($id, $custom_fields);

        /*
         * Return the specialized version of the view
         */

        return view("fronts.sst.remodeling.bath.$id.thankyou", [
            'fname'       => $this->post_data['first_name'],
            'lname'       => $this->post_data['last_name'],
            'urlupsell'   => $this->post_data['urlupsell'],
            'response'    => $this->response,
        ])->with($this->data); // <<--- VERY IMPORTANT SINCE IT CONTROLS BEHAVIOR OF THE PAGE
    }
}