<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends CI_Controller
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
     !       Page View @id
     !--------------------------------------------------------
     */
    public function view_blog($slug)
    {
        $this->db->where('page_slug',$slug);
        $data['page'] = $this->db->get('tbl_page')->result_object();

        $this->load->view('front/lib/header',$data);
       // $this->load->view('front/lib/sidebar');
        $this->load->view('front/frontpage/frontpage');
        $this->load->view('front/lib/footer');

    }

}