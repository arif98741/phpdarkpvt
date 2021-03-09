<?php

use config\helpers\Help;

defined('BASEPATH') or exit('No direct script access allowed');

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
     !       Page View
     !       @param slug
     !--------------------------------------------------------
     */
    public function view_page($slug)
    {

        $data['title'] = ucfirst(str_replace('-', ' ', $slug));

        $this->db->where('page_slug', $slug);
        $statement = $this->db->get('tbl_page');
        if ($statement->result_id->num_rows > 0) {
            $data['page'] = $statement->row();
            $data['meta_description'] = $this->replace_htmlchars($data['page']->page_description);

            $this->load->view('front/lib/header', $data);
            $this->load->view('front/frontpage/frontpage');
            $this->load->view('front/lib/footer');
        } else {
            $data['meta_description'] = '';
            $data['post_categories'] = $this->db->order_by('category_order', 'asc')->limit(8)->get('tbl_post_category')->result_object();
            $data['title'] = 'Error404! Page Not Found - PHPDark.com';
            $data['requested_url'] = Help::current_url();
            $this->load->view('front/lib/header.php', $data);
            $this->load->view('front/lib/sidebar.php', $data);
            $this->load->view('errors/cli/publicerror_404');
            $this->load->view('front/lib/footer.php');
        }
    }

    /*
    !--------------------------------------------------------
    !       Page View
    !       @param slug
    !--------------------------------------------------------
    */
    public function search_hit($key)
    {
        // $data['title'] = ucfirst(str_replace('-', ' ', $slug));
        // $this->db->where('page_slug',$slug);
        // $statement = $this->db->get('tbl_page');
        // if ($statement->result_id->num_rows > 0) {
        //     $data['page'] = $statement->result_object();
        //     $this->load->view('front/lib/header',$data);
        //     $this->load->view('front/frontpage/frontpage');
        //     $this->load->view('front/lib/footer');
        // }else{
        //     $data['post_categories'] = $this->db->order_by('category_order','asc')->limit(8)->get('tbl_post_category')->result_object();
        //     $data['title'] = 'Error404! Page Not Found - PHPDark.com';
        //     $data['requested_url'] = Help::current_url();
        //     $this->load->view('front/lib/header.php',$data);
        //     $this->load->view('front/lib/sidebar.php',$data);
        //     $this->load->view('errors/cli/publicerror_404');
        //     $this->load->view('front/lib/footer.php');
        //}
    }

    public function search_result($keyword)
    {
    }

    public function sitemap()
    {
        $this->db->where('post_status', 'published');
        $this->db->order_by('tbl_post.post_id', 'desc');
        $posts = $this->db->get('tbl_post')->result();


        $data = [
            'items' => [1, 2, 4],
            'blogs' => $this->blogmodel->all_blogs(),
            'posts' => $posts,
        ];
        $this->curlRequest();
        $this->load->view('front/sitemap/sitemap', $data);
    }

    /*
    !============================================
    ! Replace HTML Character
    !============================================
    */
    public function replace_htmlchars($string)
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


    private function curlRequest()
    {
        $url = 'http://www.google.com/ping?sitemap=' . base_url() . 'sitemap';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch); // Close the connection
    }
}