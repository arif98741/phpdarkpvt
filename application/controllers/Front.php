<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller
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

    /*
    !--------------------------------------------------------
    !       Default Function for Front View
    !--------------------------------------------------------
    */
    public function index()
    {
        $data[''] = $this->db->get('tbl_user')->result_object();
        $this->load->view('front/lib/header');
        $this->load->view('front/index');
        $this->load->view('front/lib/footer');
    }
   
}