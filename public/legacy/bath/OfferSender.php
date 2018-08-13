<?php
/**
* This offer sender class makes the job faster and 
* eliminates the redundunt procedure on sending
* the leads to the offer site and avoiding any
* parameter and typo errors when creating the URL.
*
* @package    OfferSender
* @author     Anthony King
* @version    1.0
*/

class OfferSender
{
    /**
     * Offer full url w/ or w/o parameters.
     *
     * @var string
     */
    private $offer_url = '';


    /**
     * Prepared offer url w/ data attached.
     *
     * @var string
     */
    private $prepare_url = '';


    /**
     * POST/GET/REQUEST user data.
     *
     * @var array
     */
    private $user_data = array();


    /**
     * Save data to CSV file
     *
     * @var bool
     */
    private $create_csv = false;


    /** 
     * Class constructor.
     *
     * @param string $offer_url Offer URL
     */
    public function __construct( $offer_url = '' ) 
    {
        $this->offer_url = $offer_url; 
    }


    /** 
     * Prepare the offer url and user data.
     *
     * @param array $params Data from the user
     * @return array $this->sendLeads() Status and message respond
     */
    public function postLeads( $params = array(), $csv = false ) 
    {
        $this->user_data = $params;
        $this->create_csv = $csv;
        $this->prepare_url = $this->offer_url 
            . ( parse_url($this->offer_url, PHP_URL_QUERY) ? '&' : '?' )
            . http_build_query( $this->user_data );

        return $this->sendLeads();
    }


    /** 
     * Send the data to the offer site then prepare the CSV dump.
     *
     * @return array $respond Status and message respond
     */
    private function sendLeads()
    {
        $obj = simplexml_load_file( $this->prepare_url );
        $status = $obj->status;
        
        if (isset($status)) {
            if ($status != "Error") {
                $respond = array(
                    'status' => 1,
                    'message' => "Success"
                );

                // Saves only the data that are flagged as leads
                if ($obj->lead_id) {
                    
                    // Add custom data to fields
                    $this->user_data = array_merge( 
                        array(
                            'IP' => $this->getUserIP(),
                            'Lead' => @$obj->lead_id,
                            'Status' => "not using Gocella"
                        ),
                        $this->user_data
                    );

                    // Output CSV
                    if ( $this->create_csv ) {
                        $this->dumpCSV();
                    }
                }
            } else {
                $respond = array(
                    'status' => 0,
                    'message' => $status . " (" . @$obj->error . ")"
                );
            }   
        } 

        return $respond;
    }


    /** 
     * Get current user IP.
     *
     * @return string $ip User IP
     */
    function getUserIP() {
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) 
          && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') > 0) {
                $addr = explode(",", $_SERVER['HTTP_X_FORWARDED_FOR']);
                $ip = trim($addr[0]);
            } else {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }


    /** 
     * Creates a CSV file based on user data then save 
     * it on current date file name.
     * e.g: d_2015_07_22.csv
     */
    private function dumpCSV()
    {
        $csv_filename = "d_" . date('Y_m_d') . ".csv";

        // fetch the user data then prepare the fields
        if (file_exists($csv_filename)) {
            foreach ($this->user_data as $k => $v) {
                $data[] = $v;
            }
        } else {
            foreach ($this->user_data as $k => $v) {
                $label[] = $k;
                $data[] = $v;
            }
        
            $list[] = $label;
        }
        $list[] = $data;

        $fp = fopen($csv_filename, "a");
        foreach ($list as $fields) {
            // insert data to csv
            fputcsv($fp, $fields);
        }

        // close csv file
        fclose($fp);
    }

} // End of OfferSender Class