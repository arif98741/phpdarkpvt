<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller
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
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }
    }

    /*
    !--------------------------------------------------------
    !       Post List View
    !--------------------------------------------------------
    */
    public function index()
    {

        $this->db->join('tbl_post_category','tbl_post_category.catid = tbl_post.catid');
        $this->db->order_by('tbl_post.post_id','desc');
        $data['posts'] = $this->db->get('tbl_post')->result_object();
        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/post_list');
        $this->load->view('admin/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !      Add Post Page Admin
    !--------------------------------------------------------
    */
    public function add_post()
    {

        $this->db->join('tbl_post_category','tbl_post_category.catid = tbl_post.catid');
        $this->db->order_by('tbl_post.post_id','desc');
        $data['posts'] = $this->db->get('tbl_post')->result_object();
        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/add_post');
        $this->load->view('admin/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !     Save Post Categories
    !--------------------------------------------------------
    */
    public function save_categories()
    {

        $post_category = $this->input->post('post_category');
        $this->db->where('category_title',$post_category);
        $stmt =  $this->db->get('tbl_post_category');
        if ($stmt->result_id->num_rows >0) {
            $this->session->set_flashdata('error', 'Post Category Already Exist');

            redirect('admin/post_categories');
        }else{
            $data = array(
                'category_title' => $post_category
            );
            $this->db->insert('tbl_post_category',$data);
            $this->session->set_flashdata('success', 'Post Category Added Successfully');
            redirect('admin/post_categories');
        }
		
    }


    /*
    !--------------------------------------------------------
    !     Edit Post Category
    !--------------------------------------------------------
    */
    public function edit($catid)
    {

        $category_title = $this->input->post('category_title');
        $this->db->set('category_title',$category_title);
        $this->db->where('catid',$catid);
        $stmt =  $this->db->update('tbl_post_category');
        
        $this->session->set_flashdata('success', 'Post Category Added Successfully');
        redirect('admin/post_categories');
        
        
    }


  
    /*
    !--------------------------------------------------------
    !      Delete User
    !--------------------------------------------------------
    */
    public function delete($post_id)
    {
     
        $this->db->where(array(
            'post_id ' => $post_id
        )); 
        $this->db->delete('tbl_post');
        $this->session->set_flashdata('success', 'Post Deleted Successfully');
        redirect('admin/post_list');
    }

}