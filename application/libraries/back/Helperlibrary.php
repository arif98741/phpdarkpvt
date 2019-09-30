<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helperlibrary extends CI_Model
{
    /*front blog helper*/
    public function get_location($ip)
    {

    	$curl_handle=curl_init();
        curl_setopt($curl_handle,CURLOPT_URL,'http://ip-api.com/json/'.$ip);
        curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
        curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
        $buffer = curl_exec($curl_handle);
        $buffer = json_decode($buffer);
        if (!empty($buffer)) {
        	return $buffer;
        }else{
        	return false;
        }

    }
}

/* End of file Testlibrary.php */
/* Location: ./application/libraries/Testlibrary.php */
