<?php

namespace App\Http\Controllers\Offers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\LeadspediaController;

class AutoWarrantyController extends LeadspediaController
{
    // Populate here the credentials for the given campaign/offer
    protected $offer_credentials = [
        'campaign_id'  => '5b6313889dc73',
        'campaign_key' => 'fxYHVwbMWT4t2By6mpn8',
    ];

    public function showForm($id = 1)
    {
        return view("fronts.sst.remodeling.auto-warranty.$id.index", $this->data);
    }

    public function postForm($id = 1, $custom_fields = [])
    {
        $custom_fields = [
            'edit_model_year' => Input::post('edit_model_year', ''),
            'edit_make'       => Input::post('edit_make', ''),
            'edit_model'      => Input::post('edit_model', ''),
            'edit_mileage'    => Input::post('edit_mileage', ''),
            'fullname'        => Input::post('fullname', ''),
            'zip'             => Input::post('zip', ''),
        ];
        /*
         * Call the parent class for functionality
         */
        parent::postForm($id, $custom_fields);

        /*
         * Return the specialized version of the view
         */

        return view("fronts.sst.remodeling.auto-warranty.$id.thankyou", [
            'fname'     => Input::post('first_name', ''),
            'lname'     => Input::post('last_name', ''),
            'fullname'  => Input::post('fullname', ''),
            'urlupsell' => Input::post('urlupsell', ''),
            'response'  => $this->response,
        ])->with($this->data); // <<--- VERY IMPORTANT SINCE IT CONTROLS BEHAVIOR OF THE PAGE
    }
}