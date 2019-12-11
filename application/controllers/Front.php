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
        $data['title'] = '';

        $data['blogs'] = $this->blogmodel->home_blogs();
        $data['post_categories'] = $this->postmodel->post_categories(8,'asc');
       
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
        $this->load->library('front/bloghelper');

        $data['title'] = $category = '';
        $data['blog'] = $this->blogmodel->single_blog($id);

        if (count($data['blog']) > 0) {
            $category = $data['blog'][0]->tbcid;
            $data['title'] = ucfirst($data['blog'][0]->blog_title);
            $this->bloghelper->increase_view($id);

            $data['related_blogs'] = $this->blogmodel->related_blog($data['blog'][0]->tbcid,$id);
            $data['popular_blogs'] = $this->blogmodel->popular_blog(12);

            $this->load->view('front/lib/header',$data);
            $this->load->view('front/blog_details');
            $this->load->view('front/lib/footer');

        }else{
            redirect('/');
        }

        
    }


    /*
    !--------------------------------------------------------
    !       Blog View @id
    !--------------------------------------------------------
    */
    public function blog($page_id = 1)
    {
        $data['title'] = 'Blog';

        $row  = $this->db->get('tbl_blog')->num_rows();
        $perpage = PER_PAGE;
        $offset = ($page_id-1) * $perpage;
        $previous_page      = $page_id - 1;
        $next_page          = $page_id + 1;
        $total_no_of_pages  = ceil($row / $perpage);
        $this->db->select("*");
        $this->db->join('tbl_blog_category','tbl_blog_category.tbcid=tbl_blog.tbcid');
        $this->db->order_by('tbl_blog.blog_id','desc');
        $this->db->limit($perpage,$offset);
        $query          = $this->db->get('tbl_blog');
        if ($query->num_rows() > 0) {

            $data['blogs']  = $query->result(); 
            $data['row']    = $row;
            $data['page']   = $page_id;
            $data['pages']  = (int)$total_no_of_pages;
            $data['previous_page']  = $previous_page;
            $data['next_page']      = $next_page;
           
            $this->load->view('front/lib/header',$data);
            $this->load->view('front/blog');
            $this->load->view('front/lib/footer');
        }else{
            redirect('/','refresh');
        }
    }

    /*
    !--------------------------------------------------------
    !       Show Blogs By Category
    !--------------------------------------------------------
    */
    public function blog_category($category_name="",$category_id,$page_id=1)
    {
        $data['title']       = $category_name;
        $data['category_name'] = $category_name;
        $data['category_id'] = $category_id;

        $row  = $this->db->get('tbl_blog')->num_rows();
        $perpage = PER_PAGE;
        $offset = ($page_id-1) * $perpage;
        $previous_page      = $page_id - 1;
        $next_page          = $page_id + 1;
        $total_no_of_pages  = ceil($row / $perpage);
        $this->db->select("*");
        $this->db->join('tbl_blog_category','tbl_blog_category.tbcid=tbl_blog.tbcid');
        $this->db->where('tbl_blog.tbcid',$category_id);
        $this->db->order_by('tbl_blog.blog_id','desc');
        $this->db->limit($perpage,$offset);
        $query          = $this->db->get('tbl_blog');
        if ($query->num_rows() > 0) {

            $data['blogs']  = $query->result(); 
            $data['row']    = $row;
            $data['page']   = $page_id;
            $data['pages']  = (int)$total_no_of_pages;
            $data['previous_page']  = $previous_page;
            $data['next_page']      = $next_page;
           
            $this->load->view('front/lib/header',$data);
            $this->load->view('front/blog/blog_category');
            $this->load->view('front/lib/footer');
        }else{
            redirect('/','refresh');
        }

    }

    /*
    !--------------------------------------------------------
    !       Post View @id
    !--------------------------------------------------------
    */
    public function post_details($slug="", $id="")
    {
        $data['post_id']  = $id;
        $data['post_categories'] = $this->db->order_by('category_title','asc')->limit(8)->get('tbl_post_category')->result_object();

        $this->db->join('tbl_post_tag','tbl_post_tag.post_id = tbl_post.post_id','left');
        $this->db->join('tbl_tag','tbl_post_tag.tagid = tbl_tag.tagid','left');
        $this->db->where(array(
                'tbl_post.post_id'      =>  $id,
                'tbl_post.post_status'  =>  "published"
        ));
        $stmt = $this->db->get('tbl_post');
        $post_row = $stmt->result_id->num_rows;

        if ($post_row >0) {
            
            $data['post']     = $stmt->result_object();
            $data['title']    = $data['post'][0]->post_title;
            
            $data['post_slug']  = $id;
            $data['sidebar_posts'] = $this->db->where('catid',$data['post'][0]->catid)->order_by('created','asc')->get('tbl_post')->result_object();
            $data['singlecategory'] = $this->db->where('catid',$data['post'][0]->catid)->get('tbl_post_category')->result_object();

            $this->load->view('front/lib/header',$data);
            $this->load->view('front/lib/post_sidebar');
            $this->load->view('front/post/post_details');
            $this->load->view('front/lib/footer');
        }else{
            redirect('/');
        }
    } 
}