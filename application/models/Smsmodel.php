<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Smsmodel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database("default", TRUE);
       
    }


    /*
    !-------------------------------------
    ! Send message to user
    !-------------------------------------
    */
    public function sendMessage($mobile,$message)
    {
       //return false;
        
        $token = $this->session->user_token;
        $url   = "http://sms.greenweb.com.bd/api.php";
        $data = array(
            'to'        => $mobile,
            'message'   => $message,
            'token'     => "$token"
        ); // Add parameters in key value
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = curl_exec($ch); //execute statement to send sms
        return $smsresult;
       
    }


     /*
    !-------------------------------------
    ! Send message to user
    !-------------------------------------
    */
    public function sendMessageDefault($mobile,$message)
    {
       //return false;
        
        $token = "a22f016033146547d5073b3a10c2c8f3";
        $url   = "http://sms.greenweb.com.bd/api.php";
        $data = array(
            'to'        => $mobile,
            'message'   => $message,
            'token'     => "$token"
        ); // Add parameters in key value
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = curl_exec($ch); //execute statement to send sms
        return $smsresult;
       
    }


    


    /*
    !-------------------------------------
    ! Current Balance
    !-------------------------------------
    */
    public function current_balance()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://api.greenweb.com.bd/g_api.php?token=".$this->session->user_token."&balance");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
                    "postvar1=value1&postvar2=value2&postvar3=value3");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);

        curl_close ($ch);
        return $server_output;
       
    }

     /*
    !-------------------------------------
    ! Used SMS
    !-------------------------------------
    */
    public function used_sms()
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://api.greenweb.com.bd/g_api.php?token=".$this->session->user_token."&tokensms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
                    "postvar1=value1&postvar2=value2&postvar3=value3");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);

        curl_close ($ch);
        return $server_output;

    }
    
}
?>