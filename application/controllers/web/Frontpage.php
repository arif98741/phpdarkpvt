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
        $data['title'] = ucfirst(str_replace('-', ' ', $slug));
        $this->db->where('page_slug',$slug);
        $statement = $this->db->get('tbl_page');
        if ($statement->result_id->num_rows >0) {
            $data['page'] = $statement->result_object();
            $this->load->view('front/lib/header',$data);
            $this->load->view('front/frontpage/frontpage');
            $this->load->view('front/lib/footer');
        }else{
            redirect(base_url().'error404');
        }
    }

}