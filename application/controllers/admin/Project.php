<?php

use Intervention\Image\ImageManager as Image;

defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{

    /*
    ||------------------------------------
    || Constructor of Project
    ||------------------------------------
    **/
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

        $this->db->join('tbl_project_category', 'tbl_project_category.tpcid = tbl_project.tpcid');
        $this->db->order_by('tbl_project.project_id', 'desc');
        $data['blogs'] = $this->db->get('tbl_project')->result_object();

        $this->load->view('admin/lib/header', $data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/project/project_list');
        $this->load->view('admin/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !       Page Category Llist
    !--------------------------------------------------------
    */
    public function project_cat_list()
    {
        $this->db->order_by('tbl_project_category.category_title', 'asc');
        $data['project_categories'] = $this->db->get('tbl_project_category')->result_object();
        $this->load->view('admin/lib/header', $data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/project/project_cat_list');
        $this->load->view('admin/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !      Add Project Admin
    !--------------------------------------------------------
    */
    public function add_project()
    {
        $this->db->order_by('category_title', 'asc');
        $data['categories'] = $this->db->get('tbl_project_category')->result_object();

        $this->load->view('admin/lib/header', $data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/project/add_project');
        $this->load->view('admin/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !     Save Project
    !--------------------------------------------------------
    */
    public function save_project()
    {
        $project_slug  = str_replace(" ", '-', strtolower($this->input->post('project_slug')));

        $data = array(
            'project_title'       => $this->input->post('project_title'),
            'tpcid'            => $this->input->post('tpcid'),
            'project_slug'        => strtolower($project_slug),
            'project_status'      => $this->input->post('project_status'),
            'project_description' => $this->input->post('project_description'),
            'create'           => date("Y-m-d H:i:s"),
            'update'           => date("Y-m-d H:i:s")
        );

        $this->db->insert('tbl_project', $data);
        $insert_id = $this->db->insert_id();

        if (!empty($_FILES['project_attachment']['name'])) {

            $config['upload_path']   = './uploads/blog/fullwidth/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|PNG|JPG|JPEG';
            $config['max_size']      = 10000;
            $config['max_width']     = 10000;
            $config['max_height']    = 10000;
            $config['file_name']     =   $insert_id . "-" . time();
            $file_name               = $config['file_name'] . '-235X180' . '.jpg'; //thumb image as .jpg format
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('project_attachment')) {
                $upload_data = array('upload_data' => $this->upload->data());
                $file = $upload_data['upload_data']['file_name'];

                $obj = new Image;
                $img = $obj->make($_FILES['project_attachment']['tmp_name']);
                $img->fit(235, 180);
                $img->save('uploads/blog/235X180/' . $file_name);

                $this->db->set(['project_attachment' => $file, 'thumb' => $file_name]);
                $this->db->where('project_id', $insert_id);
                $this->db->update('tbl_project');
            }
        }

        $this->session->set_flashdata('success', 'Project Added Successfully');
        redirect('admin/project');
    }


    /*
    !--------------------------------------------------------
    !     Edit Page Admin
    !--------------------------------------------------------
    */
    public function edit_project($project_id)
    {

        $this->db->order_by('category_title', 'asc');
        $data['categories'] = $this->db->get('tbl_project_category')->result_object();

        $this->db->where('project_id', $project_id);
        $data['blog'] = $this->db->get('tbl_project')->result_object();
        $this->load->view('admin/lib/header', $data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/project/edit_project');
        $this->load->view('admin/lib/footer');
    }

    /*
    !--------------------------------------------------------
    !     Update Page
    !--------------------------------------------------------
    */
    public function update_project($project_id)
    {

        //$project_slug  = str_replace(" ", '-', $this->input->post('project_slug'));
        $tagid  = $this->input->post('tagid');
        $data = array(
            'project_title'       => $this->input->post('project_title'),
            'tpcid'            => $this->input->post('tpcid'),
            'project_status'      => $this->input->post('project_status'),
            'project_description' => $this->input->post('project_description'),
            'update'           => date("Y-m-d H:i:s")
        );
        $this->db->set($data)->where('project_id', $project_id)->update('tbl_project');

        if (!empty($_FILES['project_attachment']['name'])) {

            $attch_q = $this->db->where('project_id', $project_id)->get('tbl_project')->result_object();
            if (file_exists("./uploads/blog/fullwidth/" . $attch_q[0]->project_attachment)) {
                unlink("./uploads/blog/fullwidth/" . $attch_q[0]->project_attachment);
            }
            if (file_exists("./uploads/blog/235X180/" . $attch_q[0]->thumb)) {
                unlink("./uploads/blog/235X180/" . $attch_q[0]->thumb);
            }

            $config['upload_path']   = './uploads/blog/fullwidth/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|PNG|JPG|JPEG';
            $config['max_size']      = 10000;
            $config['max_width']     = 10000;
            $config['max_height']    = 10000;
            $config['file_name']     =   $project_id . "-" . time();
            $file_name               = $config['file_name'] . '-235X180' . '.jpg'; //thumb image as .jpg format

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('project_attachment')) {
                $upload_data = array('upload_data' => $this->upload->data());
                $file = $upload_data['upload_data']['file_name'];

                $obj = new Image;
                $img = $obj->make($_FILES['project_attachment']['tmp_name']);
                $img->fit(235, 180);
                $img->save('uploads/blog/235X180/' . $file_name);

                $this->db->set(['project_attachment' => $file, 'thumb' => $file_name]);

                $this->db->where('project_id', $project_id);
                $this->db->update('tbl_project');
            }
        }

        $this->session->set_flashdata('success', 'Project Updated Successfully');
        redirect('admin/project');
    }



    /*
    !--------------------------------------------------------
    !     Save Page Category
    !--------------------------------------------------------
    */
    public function save_project_category()
    {
        $data = array(
            'category_title' => $this->input->post('category_title'),
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s'),
        );

        $this->db->insert('tbl_project_category', $data);
        $insert_id = $this->db->insert_id();

        $this->session->set_flashdata('success', 'Project Category <strong>' . $this->input->post("category_title") . '</strong> Added Successfully');
        redirect('admin/project/project_cat_list');
    }



    /*
    !--------------------------------------------------------
    !     Edit Post Category
    !--------------------------------------------------------
    */
    public function update_project_cat($tpcid)
    {
        $this->db->set(array(
            'category_title' => $this->input->post('category_title'),
            'updated_at'     => date('Y-m-d H:i:s')
        ));
        $this->db->where('tpcid', $tpcid)->update('tbl_project_category');

        $this->session->set_flashdata('success', 'Project Category Successfully Updated to <strong>' . $this->input->post("category_title") . '</strong>');
        redirect('admin/project/project_cat_list');
    }

    /*
    !--------------------------------------------------------
    !    Update Post
    !--------------------------------------------------------
    */
    public function update_post($post_id)
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
        $this->db->where('post_id', $post_id)->update('tbl_post');

        if (!empty($_FILES['post_attachment']['name'])) {

            $query_result = $this->db->where('post_id', $post_id)->get('tbl_post')->result_object();
            if (file_exists('uploads/blog/' . $query_result[0]->post_attachment)) {
                unlink('uploads/blog/' . $query_result[0]->post_attachment);
            }

            $config['upload_path']   = './uploads/blog/';
            $config['allowed_types'] = 'gif|jpg|png|GIF|PNG|JPG|JPEG';
            $config['max_size']      = 10000;
            $config['max_width']     = 10000;
            $config['max_height']    = 10000;
            $config['file_name']     = $post_id . "-" . time();
            $this->load->library('upload', $config);

            // if ($this->upload->do_upload('post_attachment')) ``        }


            $this->db->where('post_id', $post_id)->delete('tbl_post_tag');

            for ($i = 0; $i < count($tagid); $i++) {
                $this->db->insert('tbl_post_tag', array(
                    'post_id' => $post_id,
                    'tagid'   => $tagid[$i]
                ));
            }

            $this->session->set_flashdata('success', 'Post Added Successfully');
            redirect('admin/post_list');
        }
    }


    /*
    !--------------------------------------------------------
    !      Delete Project
    !--------------------------------------------------------
    */
    public function delete_project($project_id)
    {
        $attch_q = $this->db->where('project_id', $project_id)->get('tbl_project')->row();
        if (file_exists("./uploads/blog/fullwidth/" . $attch_q->project_attachment)) {
            unlink("./uploads/blog/fullwidth/" . $attch_q->project_attachment);
        }
        if (file_exists("./uploads/blog/235X180/" . $attch_q->thumb)) {
            unlink("./uploads/blog/235X180/" . $attch_q->thumb);
        }

        $this->db->where(array(
            'project_id ' => $project_id
        ));
        $this->db->delete('tbl_project');
        $this->session->set_flashdata('success', 'Project (<strong>' . $project_id . '</strong>) Deleted Successfully');
        redirect('admin/project');
    }

    /*
    !--------------------------------------------------------
    !      Delete User
    !--------------------------------------------------------
    */
    public function delete_project_cat($tpcid)
    {
        $this->db->where(array(
            'tpcid ' => $tpcid
        ));
        $this->db->delete('tbl_project_category');
        $this->session->set_flashdata('success', 'Page Category(<strong>' . $tpcid . '</strong>) Deleted Successfully');
        redirect('admin/project/project_cat_list');
    }
}