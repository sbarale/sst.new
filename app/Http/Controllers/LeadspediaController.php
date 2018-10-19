<?php

namespace App\Http\Controllers;

use App\Services\OfferSender;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;


abstract class LeadspediaController extends BaseController {
	/*
	 * $data:
	 *  Stores the data to pre-populate the fields of the form.
	 */
	protected $data = [];
	/*
	 * $post_data:
	 *  Stores the data from the form to be passed to the network
	 */
	protected $post_data = [];
	/*
	 * $offer_credentials:
	 *  Stores the campaign_id and campaign_key for the offer/campaign in LeadsPedia
	 */
	protected $offer_credentials = [];

	public function __construct() {
		$adid          = Input::get( 'adid', false );
		$kwid          = Input::get( 'kwid', '1' );
		$ad_presell    = Input::get( 'ad_presell', false );
		$ad_image      = Input::get( 'ad_image', false );
		$ad_headline   = Input::get( 'ad_headline', false );
		$st_t          = Input::get( 'st-t', false );
		$st_custom_id  = Input::get( '_st_custom_id', false );
		$lp_request_id = Input::get( 'lp_request_id', '' );
        $debug        = Input::get( 'debug', false );
        $test         = Input::get( 'test', false );
        $dev          = Input::get( 'dev', false );
		if ( Input::has( '_st_custom_value' ) ) {
			$st_custom_value = Input::get( '_st_custom_value', false );
		} else {
			$st_custom_value = Input::get( 'subid', false );
		}
		$click_id = Input::get( 'click_id' );
		$sub_id   = Input::get( 'sub_id' );

		$this->data = [
			'adid'            => $adid,
			'kwid'            => $kwid,
			'ad_presell'      => $ad_presell,
			'ad_image'        => $ad_image,
			'ad_headline'     => $ad_headline,
			'st_t'            => $st_t,
			'st_custom_id'    => $st_custom_id,
			'st_custom_value' => $st_custom_value,
			'click_id'        => $click_id,
			'sub_id'          => $sub_id,
			'lp_request_id'   => $lp_request_id,
            'debug'           => $debug,
            'test'            => $test,
            'dev'             => $dev
		];
	}

	/*
	 * Extend the functionality by extending this class and overloading this method
	 * where you return the view that you need for a specific form.
	 * You can pass pre-populated values using $this->data.
	 */
	abstract public function showForm( $id = 1 );

	public function postForm( $id = 1, $custom_fields = [] ) {
		if ( empty( $this->offer_credentials ) ) {
			die( 'Must provide campaign_id and campaign_key' );
		}
		$campaign_id  = $this->offer_credentials['campaign_id'];
		$campaign_key = $this->offer_credentials['campaign_key'];
		$offer_url    = 'http://track.geek3.io/post.do';

		$offer      = new OfferSender( $offer_url );
		$first_name = Input::post( 'first_name', '' );
		$last_name  = Input::post( 'last_name', '' );

		if ( isset( $_POST['_submit'] ) && $_POST['_submit'] == 1 ) {

			$phone = preg_replace( "#[[:punct:]]#", "", Input::post( 'phone_home', '' ) );

			$status = "";
			$lead   = "";

			$adid                = Input::post( 'adid', 0 );
			$kwid                = Input::post( 'kwid', 0 );
			$custom_fb_px        = Input::post( 'custom_fb_px', '' );
			$click_id            = Input::post( 'click_id', 0 );
			$is_test             = Input::post( 'is_test', 0 );
			$pub_id              = Input::post( 'pub_id', 0 );
			$sub_id              = Input::post( 'sub_id', 0 );
			$fbid                = Input::post( 'fbid', '' );
			$ip                  = $offer->getUserIP();
			$zip                 = Input::post( 'zip_code', false );
			$email               = Input::post( 'email_address', false );
			$st_t_val            = Input::post( 'st-t-val', false );
			$st_custom_value_val = Input::post( 'st-custom-value-val', false );

			$this->post_data = [
				'lp_test'          => $is_test,
				'lp_campaign_id'   => $campaign_id,
				'lp_campaign_key'  => $campaign_key,
				'lp_request_id'    => Input::post( 'lp_request_id' ),
				'email_address'    => $email,
				'first_name'       => $first_name,
				'last_name'        => $last_name,
				'phone_home'       => $phone,
				'address'          => Input::post( 'address', false ),
				'zip_code'         => $zip,
				'ip_address'       => $ip,
				'landing_page_url' => Request::server( 'REQUEST_URI' ),
				'universal_leadid' => Input::post( 'universal_leadid', false ),
				'click_id'         => $click_id,
				'sub_id'           => $sub_id,
				'pub_id'           => $pub_id,
				'fbid'             => $fbid,
				'custom_fb_px'     => $custom_fb_px,
				'adid'             => $adid,
				'kwid'             => $kwid,
				'Trusted_Form_URL' => Input::post( 'xxTrustedFormCertUrl', false ),
				'urlupsell'        => "",
			];

			$this->post_data = array_merge( $this->post_data, $custom_fields );

			$debug = Input::post( 'debug', false ) == 1 ? true : false;
			if ( ! $debug ) {
				$obj = $offer->postLeads( $this->post_data, false );
			} else {
				echo "<pre>";
				print_r( $this->post_data );
				die();
			}
		}
	}
}