<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
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
    !       Page List 
    !--------------------------------------------------------
    */
    public function index()
    {

        $this->db->join('tbl_blog_category','tbl_blog_category.tbcid = tbl_blog.tbcid');
        $this->db->order_by('tbl_blog.blog_id','desc');
        $data['blogs'] = $this->db->get('tbl_blog')->result_object();

        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/blog_list');
        $this->load->view('admin/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !       Page Category Llist
    !--------------------------------------------------------
    */
    public function blog_cat_list()
    {
        $this->db->order_by('tbl_blog_category.category_title','asc');
        $data['blog_categories'] = $this->db->get('tbl_blog_category')->result_object();
        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/blog_cat_list');
        $this->load->view('admin/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !      Add Blog Admin
    !--------------------------------------------------------
    */
    public function add_blog()
    {
        $this->db->order_by('category_title','asc');
        $data['categories'] = $this->db->get('tbl_blog_category')->result_object(); 

        $this->db->order_by('tag_name','asc');
        $data['tags'] = $this->db->get('tbl_tag')->result_object(); 

        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/add_blog');
        $this->load->view('admin/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !     Save Blog
    !--------------------------------------------------------
    */
    public function save_blog ()
    {
        //echo '<pre>';
       // print_r($_POST); die;

        $blog_slug  = str_replace(" ", '-', $this->input->post('blog_slug'));
        $tagid  = $this->input->post('tagid');
        $data = array(
            'blog_title'       => $this->input->post('blog_title'),
            'tbcid'            => $this->input->post('tbcid'),
            'blog_slug'        => $blog_slug,
            'blog_status'      => $this->input->post('blog_status'),
            'blog_description' => $this->input->post('blog_description'),
            'create'           => date("Y-m-d H:i:s"),
            'update'           => date("Y-m-d H:i:s") 
        );

        $this->db->insert('tbl_blog',$data);
        $insert_id = $this->db->insert_id(); 

        if (!empty($_FILES['blog_attachment']['name'])) {
                
                $config['upload_path']   = './uploads/blog/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|PNG|JPG|JPEG';
                $config['max_size']      = 10000;
                $config['max_width']     = 10000;
                $config['max_height']    = 10000;
                $config['file_name']     =   $insert_id."-".time();

                $this->load->library('upload', $config);
                $this->upload->initialize($config);



                if ($this->upload->do_upload('blog_attachment')) {
                    $upload_data = array('upload_data' => $this->upload->data());
                    $file = $upload_data['upload_data']['file_name'];
                    $this->db->set('blog_attachment',$file);
                    $this->db->where('blog_id',$insert_id);
                    $this->db->update('tbl_blog');   
                } 
        } 

        $this->session->set_flashdata('success', 'Blog Added Successfully');
        redirect('admin/blog_list');
    }


    /*
    !--------------------------------------------------------
    !     Edit Page Admin
    !--------------------------------------------------------
    */
    public function edit_blog($blog_id)
    {
        
        $this->db->order_by('category_title','asc');
        $data['categories'] = $this->db->get('tbl_blog_category')->result_object(); 

        $this->db->order_by('tag_name','asc');
        $data['tags'] = $this->db->get('tbl_tag')->result_object(); 

        $this->db->where('blog_id',$blog_id);
        $data['blog'] = $this->db->get('tbl_blog')->result_object(); 
        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/edit_blog');
        $this->load->view('admin/lib/footer');
    }

    /*
    !--------------------------------------------------------
    !     Update Page
    !--------------------------------------------------------
    */
    public function update_blog ($blog_id)
    {

        //$blog_slug  = str_replace(" ", '-', $this->input->post('blog_slug'));
        $tagid  = $this->input->post('tagid');
        $data = array(
            'blog_title'       => $this->input->post('blog_title'),
            'tbcid'            => $this->input->post('tbcid'),
            'blog_status'      => $this->input->post('blog_status'),
            'blog_description' => $this->input->post('blog_description'),
            'update'           => date("Y-m-d H:i:s") 
        );
        $this->db->set($data)->where('blog_id',$blog_id)->update('tbl_blog');
      
        if (!empty($_FILES['blog_attachment']['name'])) {

                $attch_q = $this->db->where('blog_id',$blog_id)->get('tbl_blog')->result_object();
                if (file_exists("./uploads/blog/".$attch_q[0]->blog_attachment)) {
                    unlink("./uploads/blog/".$attch_q[0]->blog_attachment);
                }
               
                $config['upload_path']   = './uploads/blog/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|PNG|JPG|JPEG';
                $config['max_size']      = 10000;
                $config['max_width']     = 10000;
                $config['max_height']    = 10000;
                $config['file_name']     =   $blog_id."-".time();

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('blog_attachment')) {
                    $upload_data = array('upload_data' => $this->upload->data());
                    $file = $upload_data['upload_data']['file_name'];
                    $this->db->set('blog_attachment',$file);
                    $this->db->where('blog_id',$blog_id);
                    $this->db->update('tbl_blog');   
                } 
        } 

        $this->session->set_flashdata('success', 'Blog Updated Successfully');
        redirect('admin/blog_list');
    }



    /*
    !--------------------------------------------------------
    !     Save Page Category
    !--------------------------------------------------------
    */
    public function save_blog_category()
    {
        $data = array(
            'category_title' => $this->input->post('category_title'),
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s'),
        );

        $this->db->insert('tbl_blog_category',$data);
        $insert_id = $this->db->insert_id();

        $this->session->set_flashdata('success', 'Blog Category <strong>'.$this->input->post("category_title").'</strong> Added Successfully');
       redirect('admin/blog_cat_list');
    }



    /*
    !--------------------------------------------------------
    !     Edit Post Category
    !--------------------------------------------------------
    */
    public function edit_blog_cat($tbcid)
    {
        $this->db->set(array(
            'category_title' => $this->input->post('category_title'),
            'updated_at'     => date('Y-m-d H:i:s')
        ));
        $this->db->where('tbcid',$tbcid)->update('tbl_blog_category');
        
        $this->session->set_flashdata('success', 'Blog Category Successfully Updated to <strong>'.$this->input->post("category_title").'</strong>');
        redirect('admin/blog_cat_list');
    }

    /*
    !--------------------------------------------------------
    !    Update Post
    !--------------------------------------------------------
    */
    public function update_post ($post_id)
    {
        $post_slug  = str_replace(" ", '-', $this->input->post('post_slug'));
        $tagid  = $this->input->post('tagid');
        $this->db->set(
            $data = array(
                'post_title'       => $this->input->post('post_title'),
                'catid'            => $this->input->post('catid'),
                'post_slug'        => $post_slug,
                'post_description' => trim($this->input->post('post_description')),
                'updated'          => date("Y-m-d H:i:s") 
            )
        );
        $this->db->where('post_id',$post_id)->update('tbl_post');

        if (!empty($_FILES['post_attachment']['name'])) {

                $query_result = $this->db->where('post_id',$post_id)->get('tbl_post')->result_object();
                if(file_exists('uploads/blog/'.$query_result[0]->post_attachment))
                {
                   unlink('uploads/blog/'.$query_result[0]->post_attachment);
                }

                $config['upload_path']   = './uploads/blog/';
                $config['allowed_types'] = 'gif|jpg|png|GIF|PNG|JPG|JPEG';
                $config['max_size']      = 10000;
                $config['max_width']     = 10000;
                $config['max_height']    = 10000;
                $config['file_name']     = $post_id."-".time();
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('post_attachment')) {
                    $upload_data = array('upload_data' => $this->upload->data());
                    $file = $upload_data['upload_data']['file_name'];
                    $this->db->set('post_attachment',$file);
                    $this->db->where('post_id',$post_id);
                    $this->db->update('tbl_post');   
                } 
        }
        
        
        $this->db->where('post_id',$post_id)->delete('tbl_post_tag');
    
        for ($i = 0; $i < count($tagid) ; $i++) {
            $this->db->insert('tbl_post_tag',array(
                'post_id' => $post_id,
                'tagid'   => $tagid[$i]
            ));
        }

        $this->session->set_flashdata('success', 'Post Added Successfully');
        redirect('admin/post_list');
    }


    /*
    !--------------------------------------------------------
    !      Delete Blog
    !--------------------------------------------------------
    */
    public function delete_blog($blog_id)
    {
        $this->db->where(array(
            'blog_id ' => $blog_id
        )); 
        $this->db->delete('tbl_blog');
        $this->session->set_flashdata('success', 'Blog (<strong>'.$blog_id.'</strong>) Deleted Successfully');
        redirect('admin/blog_list');
    }
  
    /*
    !--------------------------------------------------------
    !      Delete User
    !--------------------------------------------------------
    */
    public function delete_blog_cat($tpcid)
    {
        $this->db->where(array(
            'tpcid ' => $tpcid
        )); 
        $this->db->delete('tbl_blog_category');
        $this->session->set_flashdata('success', 'Page Category(<strong>'.$tpcid.'</strong>) Deleted Successfully');
        //redirect('admin/blog_cat_list');
    }

}