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

        $this->db->join('tbl_blog_category','tbl_blog_category.tbcid = tbl_blog.tbcid');
        $this->db->where('blog_status','published');
        $this->db->order_by('tbl_blog.blog_id','desc');
        $this->db->limit(6);
        $data['blogs'] = $this->db->get('tbl_blog')->result_object();

        $this->load->view('front/lib/header',$data);
        $this->load->view('front/lib/sidebar',$data);
        $this->load->view('front/index');
        $this->load->view('front/lib/footer');
    }


    
   /*
    !--------------------------------------------------------
    !       Blog View @id
    !--------------------------------------------------------
    */
    public function view_blog($slug,$id)
    {
        $this->db->join('tbl_blog_category','tbl_blog_category.tbcid = tbl_blog.tbcid');
        $this->db->order_by('tbl_blog.blog_id','desc');
        $this->db->where('blog_id',$id);
        $data['blog'] = $this->db->get('tbl_blog')->result_object();
        $this->load->view('front/lib/header',$data);
        $this->load->view('front/blog_details');
        $this->load->view('front/lib/footer');
    }



   
}