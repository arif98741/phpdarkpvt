<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    /*
     !========================================
     ! Constructor and initialization
     !========================================
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('security'); 
        $this->load->model('photomodel'); 
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }
    }

    /*
    !--------------------------------------------------------
    !       Default Function Admin for Homepage
    !--------------------------------------------------------
    */
    public function album()
    {

        $this->db->order_by('album_name','asc');
        $data['albums'] = $this->db->get('album')->result_object();
        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/gallery/album/index');
        $this->load->view('admin/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !     Save Post Categories
    !--------------------------------------------------------
    */
    public function save_album()
    {
        $album_name = $this->input->post('album_name');
        
        $this->db->where('album_name',$post_category);
        $stmt =  $this->db->get('album');
        if ($stmt->result_id->num_rows >0) {
            $this->session->set_flashdata('error', 'Abbum <strong>'.$album_name.'</strong> Already Exist');
            redirect('admin/gallery/album');
        }else{
            $data = array(
                'album_name' => $album_name
            );
            $this->db->insert('album',$data);
            $this->session->set_flashdata('success', 'Category <strong>'.$album_name.'</strong> Added Successfully');
            redirect('admin/gallery/album');
        }
    }


    /*
    !--------------------------------------------------------
    !     Update ALbum
    !--------------------------------------------------------
    */
    public function update_album($id)
    {
        $this->db->set(array(
            'album_name' =>  $this->input->post('album_name')
        ));
        $this->db->where('id',$id);
        $stmt =  $this->db->update('album');
        
        $this->session->set_flashdata('success', 'Album Updated Successfully to <strong>'.$this->input->post("album_name").'</strong>');
        redirect('admin/gallery/album');
        
    }

  
    /*
    !--------------------------------------------------------
    !      Delete Album
    !--------------------------------------------------------
    */
    public function delete_album($id)
    {
        $this->db->where(array(
            'id ' => $id
        )); 
        $this->db->delete('album');
        $this->session->set_flashdata('success', 'Album (<strong>'.$id.'</strong>) Deleted Successfully');
        redirect('admin/gallery/album');
    }

    /*
    !========================================
    ! Photos
    !========================================
    */
    public function photo()
    {

        // $this->db->order_by('album_name','asc');
        // $data['albums'] = $this->db->get('album')->result_object();
        // $this->load->view('admin/lib/header',$data);
        // $this->load->view('admin/lib/sidebar');
        // $this->load->view('admin/gallery/album/index');
        // $this->load->view('admin/lib/footer');
    }

    /*
    !========================================
    ! Add Photo
    !========================================
    */
    public function add_photo()
    {
        $data['albums'] = $this->photomodel->albums();
        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/gallery/photo/add_photo');
        $this->load->view('admin/lib/footer');
    }

}