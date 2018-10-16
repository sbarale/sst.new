<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 10/10/18
 * Time: 9:56 PM
 */

namespace App\Http\Controllers\Offers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\LeadspediaController;


class SolarEnergyController extends LeadspediaController {
    // Populate here the credentials for the given campaign/offer
    protected $offer_credentials = [
        'campaign_id'  => '5b6313889dc73',
        'campaign_key' => 'fxYHVwbMWT4t2By6mpn8',
    ];

    public function showList() {
        return view( "fronts.sst.remodeling.solar-energy.solar-energy-choose", $this->data );
    }

    public function showForm( $id = 1, $location = 'us'  ) {
        return view( "fronts.sst.remodeling.solar-energy.$location.$id.index", $this->data );
    }

    public function postForm( $id = 1, $custom_fields = [], $location = 'us' ) {
        $custom_fields = [
            'homeowner'     => Input::post( 'homeowner', '' ),
            'home_shaded'     => Input::post( 'home_shaded', '' ),
            'electric_bill'     => Input::post( 'electric_bill', '' ),
            'electricity_Company'     => Input::post( 'electricity_Company', '' ),
        ];
        /*
         * Call the parent class for functionality
         */
        parent::postForm( $id, $custom_fields );

        /*
         * Return the specialized version of the view
         */

        return view( "fronts.sst.remodeling.solar-energy.$location.$id.thankyou", [
            'fname'     => $this->post_data['first_name'],
            'lname'     => $this->post_data['last_name'],
            'urlupsell' => $this->post_data['urlupsell'],
        ] );
    }

    public function getProviders(){
        $state = Input::post( 'state', false );
        header('Access-Control-Allow-Origin: *');
        header('Content-type:application/json;charset=utf-8');
        $output = array();
        $file = file_get_contents(public_path() . "/electrical_providers_30-06-16.csv");
        $data = array_map("str_getcsv", preg_split('/\r*\n+|\r+/', $file));
        if($state){
            foreach($data as $key => $row){
                if($state == $row[1]){
                    $output[] = $row[0];
                }
            }
        }
        else {
            foreach($data as $key => $row){
                $output[] = $row[0];
            }
        }
        asort($output);
        echo json_encode($output);
        exit;
    }
}