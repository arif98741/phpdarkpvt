<?php

defined('BASEPATH') or exit('No direct script access allowed');

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
        $data['meta_description'] = '';
        $data['title'] = '';

        $data['blogs'] = $this->blogmodel->home_blogs();
        $data['post_categories'] = $this->postmodel->post_categories(8, 'asc');

        $this->load->view('front/lib/header', $data);
        $this->load->view('front/lib/sidebar');
        $this->load->view('front/index');
        $this->load->view('front/lib/footer');
    }

    /*
    !--------------------------------------------------------
    !       Blog View @id
    !--------------------------------------------------------
    */
    public function view_blog($slug, $id)
    {
        $this->load->library('front/bloghelper');
        $data['blog'] = $this->blogmodel->single_blog($id);
        $data['tags'] = $this->blogmodel->blog_tags($id);

        $data['title'] = $category = '';
        $data['meta_description'] = str_replace('<p>', '', $data['blog']->blog_description);

        if (!empty($data['blog'])) {

            $category = $data['blog']->tbcid;
            $data['title'] = ucfirst($data['blog']->blog_title);
            $this->bloghelper->increase_view($id);

            $data['related_blogs'] = $this->blogmodel->related_blog($data['blog']->tbcid, $id);
            $data['popular_blogs'] = $this->blogmodel->popular_blog(12);

            $this->load->view('front/lib/header', $data);
            $this->load->view('front/blog/blog_details');
            $this->load->view('front/lib/footer');
        } else {
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
        $data['meta_description'] = '';

        $row  = $this->db->get('tbl_blog')->num_rows();
        $perpage = PER_PAGE;
        $offset = ($page_id - 1) * $perpage;
        $previous_page      = $page_id - 1;
        $next_page          = $page_id + 1;
        $total_no_of_pages  = ceil($row / $perpage);
        $this->db->select("*");
        $this->db->join('tbl_blog_category', 'tbl_blog_category.tbcid=tbl_blog.tbcid');
        $this->db->order_by('tbl_blog.blog_id', 'desc');
        $this->db->limit($perpage, $offset);
        $query          = $this->db->get('tbl_blog');
        if ($query->num_rows() > 0) {

            $data['blogs']  = $query->result();
            $data['row']    = $row;
            $data['page']   = $page_id;
            $data['pages']  = (int) $total_no_of_pages;
            $data['previous_page']  = $previous_page;
            $data['next_page']      = $next_page;

            $this->load->view('front/lib/header', $data);
            $this->load->view('front/blog');
            $this->load->view('front/lib/footer');
        } else {
            redirect('/', 'refresh');
        }
    }

    /*
    !--------------------------------------------------------
    !       Show Blogs By Category
    !--------------------------------------------------------
    */
    public function blog_category($category_name = "", $category_id, $page_id = 1)
    {
        $data['title']       = $category_name;
        $data['category_name'] = $category_name;
        $data['category_id'] = $category_id;
        $data['meta_description'] = '';

        $this->db->join('tbl_blog_category', 'tbl_blog_category.tbcid=tbl_blog.tbcid');
        $this->db->where('tbl_blog.tbcid', $category_id);
        $row  = $this->db->get('tbl_blog')->num_rows();
        $perpage = 10;
        $offset = ($page_id - 1) * $perpage;
        $previous_page      = $page_id - 1;
        $next_page          = $page_id + 1;
        $total_no_of_pages  = ceil($row / $perpage);
        $this->db->select("*");
        $this->db->join('tbl_blog_category', 'tbl_blog_category.tbcid=tbl_blog.tbcid');
        $this->db->where('tbl_blog.tbcid', $category_id);
        $this->db->order_by('tbl_blog.blog_id', 'desc');
        $this->db->limit($perpage, $offset);
        $query          = $this->db->get('tbl_blog');
        if ($query->num_rows() > 0) {

            $data['blogs']  = $query->result();
            $data['row']    = $row;
            $data['page']   = $page_id;
            $data['pages']  = (int) $total_no_of_pages;
            $data['previous_page']  = $previous_page;
            $data['next_page']      = $next_page;


            $this->load->view('front/lib/header', $data);
            $this->load->view('front/blog/blog_category');
            $this->load->view('front/lib/footer');
        } else {
            redirect('/', 'refresh');
        }
    }

    /*
    !--------------------------------------------------------
    !       Blog Tag @param
    !--------------------------------------------------------
    */
    public function blog_tag($tag, $page_id = 1)
    {
        $tag =  str_replace('%20', ' ', $tag); 

        $data['title'] = $tag . ' - PHPDark.com ';
        $data['meta_description'] = '';

        $this->db->join('tbl_blog_category', 'tbl_blog_category.tbcid=tbl_blog.tbcid');
        $this->db->join('tbl_blog_tag', 'tbl_blog_tag.blog_id = tbl_blog.blog_id');
        $this->db->join('tbl_tag_blog', 'tbl_tag_blog.tagid = tbl_blog_tag.tagid');
        $this->db->where('tbl_tag_blog.tag_name', $tag);
        $row  = $this->db->get('tbl_blog')->num_rows();
        $perpage = 12;
        $offset = ($page_id - 1) * $perpage;
        $previous_page      = $page_id - 1;
        $next_page          = $page_id + 1;
        $total_no_of_pages  = ceil($row / $perpage);
        $this->db->select("*");
        $this->db->join('tbl_blog_category', 'tbl_blog_category.tbcid=tbl_blog.tbcid');
        $this->db->join('tbl_blog_tag', 'tbl_blog_tag.blog_id = tbl_blog.blog_id');
        $this->db->join('tbl_tag_blog', 'tbl_tag_blog.tagid = tbl_blog_tag.tagid');
        $this->db->where('tbl_tag_blog.tag_name', $tag);
        $this->db->order_by('tbl_blog.blog_id', 'asc');
        $this->db->limit($perpage, $offset);
        $query          = $this->db->get('tbl_blog');


        $data['blogs']  = $query->result();
        $data['row']    = $row;
        $data['page']   = $page_id;
        $data['pages']  = (int) $total_no_of_pages;
        $data['previous_page']  = $previous_page;
        $data['next_page']      = $next_page;
        $data['popular_blogs'] = $this->blogmodel->recent_blog(12);
        $data['tag'] = $tag;

        $this->load->view('front/lib/header', $data);
        $this->load->view('front/blog/tag/blog_list');
        $this->load->view('front/lib/footer');
    }

    /*
    !--------------------------------------------------------
    !       Post View @id
    !--------------------------------------------------------
    */
    public function post_details($slug = "", $id = "")
    {
        $data['post_id']  = $id;
        $data['post_categories'] = $this->db->order_by('category_title', 'asc')->limit(8)->get('tbl_post_category')->result_object();

        $this->db->join('tbl_post_tag', 'tbl_post_tag.post_id = tbl_post.post_id', 'left');
        $this->db->join('tbl_tag', 'tbl_post_tag.tagid = tbl_tag.tagid', 'left');
        $this->db->where(array(
            'tbl_post.post_id'      =>  $id,
            'tbl_post.post_status'  =>  "published"
        ));
        $stmt = $this->db->get('tbl_post');
        $post_row = $stmt->result_id->num_rows;

        if ($post_row > 0) {

            $data['post']     = $stmt->row();
            $data['title']    = $data['post']->post_title;
            $data['meta_description'] = $this->replace_htmlchars( $data['post']->post_description);

            $data['post_slug']  = $id;
            $data['sidebar_posts'] = $this->db->where('catid', $data['post']->catid)->order_by('created', 'asc')->get('tbl_post')->result_object();
            $data['singlecategory'] = $this->db->where('catid', $data['post']->catid)->get('tbl_post_category')->result_object();

            $this->load->view('front/lib/header', $data);
            $this->load->view('front/lib/post_sidebar');
            $this->load->view('front/post/post_details');
            $this->load->view('front/lib/footer');
        } else {
            redirect('/');
        }
    }

    /*
    !============================================
    ! Replace HTML Character
    !============================================
    */
    public  function replace_htmlchars($string)
    {
        $data = [
            '<p>',
            '</p>',
            '<strong>',
            '</strong>',
            '<h3>',
            '</h3>'

        ];
        foreach ($data as $value) {
            $string = str_replace($value, '', $string);
        }

        return $string;
    }
}