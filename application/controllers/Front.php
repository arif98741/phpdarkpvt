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

        $this->db->join('tbl_blog_category','tbl_blog_category.tbcid = tbl_blog.tbcid');
        $this->db->where('blog_status','published');
        $this->db->order_by('tbl_blog.blog_id','desc');
        $this->db->limit(3);
        $data['blogs'] = $this->db->get('tbl_blog')->result_object();
        $this->db->where_not_in('category_title', 'Codeigniter');
        $this->db->where_not_in('category_title', 'Laravel');
        $data['post_categories'] = $this->db->order_by('category_order','asc')->limit(8)->get('tbl_post_category')->result_object();
       
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
        $data['title'] = '';
        $data['blog'] = $this->db
            ->join('tbl_blog_category','tbl_blog_category.tbcid = tbl_blog.tbcid')
            ->order_by('tbl_blog.blog_id','desc')
            ->where('blog_id',$id)
            ->get('tbl_blog')->result_object();

        $category = '';

        if (count($data['blog']) > 0) {
            $category = $data['blog'][0]->tbcid;
        }

        $this->db->join('tbl_blog_category','tbl_blog_category.tbcid = tbl_blog.tbcid')->order_by('rand()');
        $this->db->where(['tbl_blog.tbcid'=>$category]);
        $this->db->where(['tbl_blog.blog_id !='=>$id])->limit(4);
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
        $this->db->order_by('tbl_blog.create','desc');
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
    public function blog_category($category_name="",$category_id)
    {
        $this->db->join('tbl_blog_category','tbl_blog_category.tbcid = tbl_blog.tbcid');
        $this->db->where('tbl_blog.tbcid',$category_id);
        $this->db->order_by('tbl_blog.blog_id','desc');

        $data['blogs']      = $this->db->get('tbl_blog')->result_object();
        $data['category']   = $this->db->where(['tbcid'=>$category_id])->order_by('blog_id','desc')->get('tbl_blog')->result_object();
       
        $this->load->view('front/lib/header',$data);
        $this->load->view('front/blog');
        $this->load->view('front/lib/footer');
    }

    /*
    !--------------------------------------------------------
    !       Post View @id
    !--------------------------------------------------------
    */
    public function post_details($slug="", $id="")
    {
        $data['post_categories'] = $this->db->order_by('category_title','asc')->limit(8)->get('tbl_post_category')->result_object();

        $this->db->join('tbl_post_tag','tbl_post_tag.post_id = tbl_post.post_id','left')
        ->join('tbl_tag','tbl_post_tag.tagid = tbl_tag.tagid','left');
        $this->db->where(array(
                'tbl_post.post_id'=>$id,
                'tbl_post.post_status'=>"published"
        ));
        $this->db->or_where('tbl_post.post_slug',$slug);
        $stmt = $this->db->get('tbl_post');
        $post_row = $stmt->result_id->num_rows;

        if ($post_row >0) {
            $data['post'] = $stmt->result_object();
            $data['title'] = $data['post'][0]->post_title;
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

    // post next page helper
    public function post_next($post_category,$post_id)
    {
        $string = '';
        $this->db->where(array(
                'post_id'       =>$post_id,
                'catid'         =>$post_category,
                'post_status'    =>"published"
        ));
        $post = $this->db->get('tbl_post');
        if ($post->result_id->num_rows > 0) {
            
            $post_data = $post->result_object();
            echo '<pre>';
            print_r($post_data);
            if (5) {
                
            }

        }else{
            echo "#";
        }

    }
}