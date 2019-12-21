<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blogtag extends CI_Controller
{

    /*
    !--------------------------------------------------------
    !       Constructor Load During Creation of Object
    !       Its mainly for blog tag
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
    !       Default Tag List Page
    !--------------------------------------------------------
    */
    public function tag_list()
    {

        $this->db->order_by('tag_name', 'asc');
        $data['tags'] = $this->db->get('tbl_tag_blog')->result_object();
        $this->load->view('admin/lib/header', $data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/tag/blog_tag_list');
        $this->load->view('admin/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !     Save Blog Tag
    !--------------------------------------------------------
    */
    public function save_tag()
    {
        $tag_name = $this->input->post('tag_name');

        $this->db->where('tag_name', $tag_name);
        $stmt =  $this->db->get('tbl_tag_blog');
        if ($stmt->result_id->num_rows > 0) {
            $this->session->set_flashdata('error', 'Blog Tag <strong>' . $tag_name . '</strong> Already Exist');
            redirect('admin/blogtag/tag_list');
        } else {
            $data = array(
                'tag_name' => $tag_name
            );
            $this->db->insert('tbl_tag_blog', $data);
            $this->session->set_flashdata('success', 'Blog Tag <strong>' . $tag_name . '</strong> Added Successfully');
            redirect('admin/blogtag/tag_list');
        }
    }


    /*
    !--------------------------------------------------------
    !     Update Blog Tag
    !--------------------------------------------------------
    */
    public function update($tagid)
    {
        $this->db->set(array(
            'tag_name' =>  $this->input->post('tag_name')
        ));
        $this->db->where('tagid', $tagid);
        $stmt =  $this->db->update('tbl_tag_blog');

        $this->session->set_flashdata('success', 'Blog Tag Updated Successfully to <strong>' . $this->input->post("tag_name") . '</strong>');
        redirect('admin/blogtag/tag_list');
    }



    /*
    !--------------------------------------------------------
    !      Delete Tag
    !--------------------------------------------------------
    */
    public function delete($tagid)
    {
        $this->db->where(array(
            'tagid ' => $tagid
        ));
        $this->db->delete('tbl_tag_blog');
        $this->session->set_flashdata('success', 'Blog Tag (<strong>' . $tagid . '</strong>) Deleted Successfully');
        redirect('admin/blogtag/tag_list');
    }
}