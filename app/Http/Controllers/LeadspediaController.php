<?php

namespace App\Http\Controllers;

use App\Services\DummySender;
use App\Services\OfferSender;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;


abstract class LeadspediaController extends BaseController
{
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

    /*
     * Let's store the result of the operation
     */
    protected $result = null;

    /*
     * Store the object used to post data back to Leadspedia
     */
    public $response = null;

    /*
     * Some control properties
     */

    /*
     * DEBUG MODE:
     *  - Won't post data to Leadspedia
     *  - Won't shot Thank You page
     *  - Will show dump of data posted to Thank you page.
     */
    protected $debug_mode = false;


    /*
     * TEST MODE:
     *  - Will post data to Leadspedia as normal
     *  - Will send a 'test' flag so the lead is not sold.
     */
    protected $test_mode = false;

    /*
     * DEV MODE:
     *  - Won't post data to Leadspedia (will run Dummy Poster, instead)
     *  - Will show Thank you page
     *  - Won't fire pixels
     */
    protected $dev_mode = false;

    public function __construct()
    {
        /*
         * Let's build some protection so in case the data is not defined
         * correctly, bail out.
         */

        $this->verify();
        $adid             = Request::input('adid', false);
        $kwid             = Request::input('kwid', false);
        $fbid             = Request::input('fbid', false);
        $click_id         = Request::input('click_id', false);
        $lp_request_id    = Request::input('rid', false);
        $this->debug_mode = Request::input('debug', false);
        $this->test_mode  = Request::input('test', false);
        $this->dev_mode   = Request::input('dev', false);
        $sub_id           = Request::input('sub_id', false);

        $this->data = [
            'adid'          => $adid,
            'kwid'          => $kwid,
            'click_id'      => $click_id,
            'fbid'          => $fbid,
            'sub_id'        => $sub_id,
            'lp_request_id' => $lp_request_id,
            'debug'         => $this->debug_mode,
            'test'          => $this->test_mode,
            'dev'           => $this->dev_mode
        ];
    }

    /*
     * Extend the functionality by extending this class and overloading this method
     * where you return the view that you need for a specific form.
     * You can pass pre-populated values using $this->data.
     */
    abstract public function showForm($id = 1);

    public function postForm($id = 1, $custom_fields = [])
    {
        if (empty($this->offer_credentials)) {
            die('Must provide campaign_id and campaign_key');
        }
        if (empty($this->offer_credentials['pixel'])) {
            die('Must provide offer pixel for conversion tracking');
        }
        $campaign_id  = $this->offer_credentials['campaign_id'];
        $campaign_key = $this->offer_credentials['campaign_key'];
        $offer_px     = $this->offer_credentials['pixel'];
        $offer_url    = 'http://track.geek3.io/post.do';


        if (isset($_POST['_submit']) && $_POST['_submit'] == 1) {
            if ($this->dev_mode) {
                $this->response = new DummySender($offer_url, $offer_px);
            } else {
                $this->response = new OfferSender($offer_url, $offer_px);
            }
            $first_name = Request::input('first_name', '');
            $last_name  = Request::input('last_name', '');
//            $phone           = preg_replace("#[[:punct:]]#", "", Input::post('phone_home', ''));
            $phone           = Input::post('phone_home', '');
            $adid            = Input::post('adid', false);
            $kwid            = Input::post('kwid', false);
            $click_id        = Input::post('click_id', false);
            $sub_id          = Input::post('sub_id', false);
            $lp_request_id   = Input::post('lp_request_id', false);
            $is_test         = Request::input('is_test', false);
            $fbid            = Input::post('fbid', false);
            $ip              = $this->response->getUserIP();
            $zip             = Input::post('zip_code', false);
            $email           = Input::post('email_address', false);
            $address         = Input::post('address', false);
            $lp_url          = Request::server('REQUEST_URI');
            $lead_id         = Input::post('universal_leadid', 'N/A');
            $this->post_data = [
                'lp_test'          => $is_test,
                'lp_campaign_id'   => $campaign_id,
                'lp_campaign_key'  => $campaign_key,
                'lp_request_id'    => $lp_request_id,
                'email_address'    => $email,
                'first_name'       => $first_name,
                'last_name'        => $last_name,
                'phone_home'       => $phone,
                'address'          => $address,
                'zip_code'         => $zip,
                'ip_address'       => $ip,
                'landing_page_url' => $lp_url,
                'universal_leadid' => $lead_id,
                'click_id'         => $click_id,
                'sub_id'           => $sub_id,
                'fbid'             => $fbid,
                'adid'             => $adid,
                'kwid'             => $kwid,
                'urlupsell'        => "",
                'release'          => file_get_contents(public_path("VERSION.txt"))
            ];

            $this->post_data = array_merge($this->post_data, $custom_fields);

            $debug = Input::post('debug', false) == 1 ? true : false;


            if (!$debug) {
                $this->result = $this->response->postLeads($this->post_data, false);

            } else {
//                echo "<pre>";
//                print_r($this->data);
//                print_r($this->post_data);
//                echo "</pre>";
                echo view('layouts.debug', ['post' => $this->post_data, 'data' => $this->data]);
                die();
            }
        }
    }

    protected function verify()
    {
        $ok = isset($this->offer_credentials['campaign_id']) &&
            isset($this->offer_credentials['campaign_key']) &&
            isset($this->offer_credentials['pixel']);
        if (env('APP_ENV') == 'local' && !$ok) {
            die('must set campaign_id, campaign_key and pixel for the offer');
        }
    }
}