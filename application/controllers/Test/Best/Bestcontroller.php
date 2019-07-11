<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bestcontroller extends CI_Controller
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
    }

    
    public function index($x)
    {
        
        echo 'hi I am from best'.$x;
        
    }

}