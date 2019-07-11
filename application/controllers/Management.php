<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller
{

    /*
    !--------------------------------------------------------
    !       Constructor Load During Creation of Object
    !--------------------------------------------------------
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('security');
        if (!$this->session->has_userdata('user')) {
             redirect('dashboard');
        }
    }

 

}