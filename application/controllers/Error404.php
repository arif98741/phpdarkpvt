<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller
{

    /*
    !--------------------------------------------------------
    !       Constructor Load During Creation of Object
    !--------------------------------------------------------
    */
    public function __construct()
    {
        parent::__construct();
    }

    /*
    !--------------------------------------------------------
    !       404 Page
    !--------------------------------------------------------
    */
    public function index()
    {
        echo 'hi'; exit;
        $data['post_categories'] = $this->db->order_by('category_order','asc')->limit(8)->get('tbl_post_category')->result_object();
        $data['title'] = 'Error404! Page Not Found - PHPDark.com';
        $this->load->view('front/lib/header.php',$data);
        $this->load->view('front/lib/sidebar.php',$data);
        $this->load->view('errors/cli/publicerror_404');
        $this->load->view('front/lib/footer.php');
    }

    
}