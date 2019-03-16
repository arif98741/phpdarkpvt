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
        $data['post_categories'] = $this->db->order_by('category_title','asc')->limit(8)->get('tbl_post_category')->result_object();
       
        $this->load->view('front/lib/header',$data);
        $this->load->view('front/lib/sidebar');
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
       

        $category = '';

        if (count($data['blog']) > 0) {
            $category = $data['blog'][0]->tbcid;
        }

        $this->db->join('tbl_blog_category','tbl_blog_category.tbcid = tbl_blog.tbcid');
        $this->db->order_by('rand()');
        $this->db->where(['tbl_blog.tbcid'=>$category]);
        $this->db->where(['tbl_blog.blog_id !='=>$id]);
        $this->db->limit(4);
        $data['related_blogs'] = $this->db->get('tbl_blog')->result_object();

        $this->load->view('front/lib/header',$data);
        $this->load->view('front/blog_details');
        $this->load->view('front/lib/footer');
    }


     /*
    !--------------------------------------------------------
    !       Blog View @id
    !--------------------------------------------------------
    */
    public function blog()
    {
        $this->db->join('tbl_blog_category','tbl_blog_category.tbcid = tbl_blog.tbcid');
        $this->db->order_by('tbl_blog.blog_id','desc');
        $data['blogs'] = $this->db->get('tbl_blog')->result_object();

        $this->load->view('front/lib/header',$data);
        $this->load->view('front/blog');
        $this->load->view('front/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !       Post View @id
    !--------------------------------------------------------
    */
    public function post_details()
    {
        $this->db->join('tbl_blog_category','tbl_blog_category.tbcid = tbl_blog.tbcid');
        $this->db->order_by('tbl_blog.blog_id','desc');
        $data['blogs'] = $this->db->get('tbl_blog')->result_object();
        $data['post_categories'] = $this->db->order_by('category_title','asc')->limit(8)->get('tbl_post_category')->result_object();

        $this->load->view('front/lib/header',$data);
        $this->load->view('front/lib/sidebar');
        $this->load->view('front/post/post_details');
        $this->load->view('front/lib/footer');
    }


    


    
   
}