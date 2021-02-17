<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class helperlibrary extends CI_Model
{

    /*front blog helper*/
    public function get_location($ip)
    {
        //http://api.ipstack.com/check?access_key=22fa8587c1e83719fc449200d6b95891&format=1
        //http://api.ipstack.com/180.148.214.181?access_key=22fa8587c1e83719fc449200d6b95891&format=1
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
