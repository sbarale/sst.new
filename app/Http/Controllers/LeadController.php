<?php

namespace App\Http\Controllers;

use App\Services\OfferSender;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Request;




class LeadController extends BaseController {
    public function bath(){

        $adid = Input::get('adid', false);
        $kwid = Input::get('kwid', '1');
        $ad_presell = Input::get('ad_presell', false);
        $ad_image = Input::get('ad_image', false);
        $ad_headline = Input::get('ad_headline', false);
        $st_t = Input::get('st-t', false);
        $st_custom_id = Input::get('_st_custom_id', false);
        if (Input::has('_st_custom_value')){
            $st_custom_value = Input::get('_st_custom_value', false);
        } else {
            $st_custom_value = Input::get('subid', false);
        }
        $click_id = Input::get('click_id');
        $sub_id = Input::get('sub_id');

        return view('fronts.sst.remodeling.bath2.index', [
            'adid'              => $adid,
            'kwid'              => $kwid,
            'ad_presell'        => $ad_presell,
            'ad_image'          => $ad_image,
            'ad_headline'       => $ad_headline,
            'st_t'              => $st_t,
            'st_custom_id'      => $st_custom_id,
            'st_custom_value'   => $st_custom_value,
            'click_id'          => $click_id,
            'sub_id'            => $sub_id,
        ]);
    }
    public function postForm(){

        $campaign_id  = '5b6313889dc73';
        $campaign_key = 'fxYHVwbMWT4t2By6mpn8';

        $offer_url = 'http://track.geek3.io/post.do';


        $offer      = new OfferSender( $offer_url );
        $first_name = Input::post('first_name', '');
        $last_name  = Input::post('last_name', '');

        if ( isset( $_POST['_submit'] ) && $_POST['_submit'] == 1 ) {

            $phone = preg_replace( "#[[:punct:]]#", "", Input::post('phone_home', '') );

            $status = "";
            $lead   = "";

            $adid                = Input::post('adid', 0);
            $kwid                = Input::post('kwid', 0);
            $custom_fb_px        = Input::post('custom_fb_px', '');
            $click_id            = Input::post('click_id', 0);
            $is_test             = Input::post('is_test', 0);
            $pub_id              = Input::post('pub_id', 0);
            $sub_id              = Input::post('sub_id', 0);
            $fbid                = Input::post('fbid', '');
            $ip                  = $offer->getUserIP();
            $zip                 = Input::post('zip_code', false);
            $email               = Input::post('email_address', false);
            $st_t_val            = Input::post('st-t-val', false);
            $st_custom_value_val = Input::post('st-custom-value-val', false);

            $data = [
                'lp_test'          => $is_test,
                'lp_campaign_id'   => $campaign_id,
                'lp_campaign_key'  => $campaign_key,
                'email_address'    => $email,
                'first_name'       => $first_name,
                'last_name'        => $last_name,
                'phone_home'       => Input::post('phone_home', false),
                'address'          => Input::post('address', false),
                'zip_code'         => $zip,
                'ip_address'       => $ip,
                'landing_page_url' => Request::server('REQUEST_URI'),
                'universal_leadid' => Input::post('universal_leadid', false),
                'click_id'         => $click_id,
                'adid'             => $adid,
                'kwid'             => $kwid,
                'Trusted_Form_URL' => Input::post('xxTrustedFormCertUrl', false),
            ];

            $urlupsell="http://tracking.jvprpl.com/aff_c?offer_id=136&aff_id=1008&aff_sub=$email&aff_sub2=$first_name&aff_sub3=$last_name&aff_sub4=$zip&source=$st_t_val&aff_sub5=$st_custom_value_val" ;

            $debug = Input::post('debug', false) == 1 ? true : false;
            if ( ! $debug ) {
                $obj = $offer->postLeads( $data, false );
            } else {
                echo "<pre>";
                print_r( $data );
                die();
            }
        }
        return view('fronts.sst.remodeling.bath2.thankyou', [
            'fname'     => $first_name,
            'lname'     => $last_name,
            'urlupsell' => $urlupsell,
        ]);
    }
}