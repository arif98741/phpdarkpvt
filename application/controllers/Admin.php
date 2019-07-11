<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
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
    !       Admin Login View
    !--------------------------------------------------------
    */
    public function index()
    {
        if ($this->session->has_userdata('login')) {
            redirect('admin/dashboard');
        }
        $this->load->view('admin/login');
        
    }

    /*
    !--------------------------------------------------------
    !       Default Function for Dashboard
    !--------------------------------------------------------
    */
    public function dashboard()
    {
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }

        $this->db->join('tbl_post_category','tbl_post_category.catid = tbl_post.catid');
        $this->db->order_by('tbl_post.post_id','desc');
        $data['posts'] = $this->db->get('tbl_post')->result_object();

        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !       Login Handeller
    !--------------------------------------------------------
    */
    public function login()
    {
        if ($this->session->has_userdata('login') && $this->session->role == 'admin')
        {
            redirect('admin/dashboard');
        } 
        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));

        $this->load->model('loginmodel');


        $status   = $this->loginmodel->login($username,$password);
        if ($status->result_id->num_rows > 0) {

           $data     = $status->result_object();
           $session  = array(
                    'login'             => true,
                    'admin'             => 'admin',
                    'admin_email'       => $data[0]->email,
                    'organization_name' => $data[0]->organization_name,
                    'admin_address'     => $data[0]->address,
                    'admin_role'        => $data[0]->role,
                    'admin_logo'        => $data[0]->logo,
                    'admin_status'      => $data[0]->status,
                    'admin_id'          => $data[0]->user_id,
            );
           $this->session->set_userdata($session);
           $this->session->set_flashdata('success', 'Successfully Loggedin');
           redirect('admin/dashboard');
       }else{
            $this->session->set_flashdata('error', 'Login Failed');
            redirect("admin");
       }

    }

    /*
    !--------------------------------------------------------
    !       Login Handeller
    !--------------------------------------------------------
    */
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }

    /*
    !--------------------------------------------------------
    !      User List for Institutions
    !--------------------------------------------------------
    */
    public function user_list()
    {
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }

        $data['users'] = $this->db->get('tbl_user')->result_object();
        //echo "<pre>";
        //print_r($data); die;
        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/user_list');
        $this->load->view('admin/lib/footer');
    }

    /*
    !--------------------------------------------------------
    !      User List for Institutions
    !--------------------------------------------------------
    */
    public function update_status($user_id,$status)
    {
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }

        $this->db->set(array(
			'status' =>$status
		));
		$this->db->where('user_id',$user_id);
		$this->db->update('tbl_user');
		
		$this->session->set_flashdata('success', 'User Successfully Updated');
		redirect('admin/user_list');
    }



    /*
    !--------------------------------------------------------
    !      User API TOKEN
    !--------------------------------------------------------
    */
    public function user_api($user_id="")
    {
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }
        $this->db->where(array(
            'user_id ' => $user_id
        )); 
        $data['user'] = $this->db->get('tbl_user')->result_object();
        //echo "<pre>";
        //print_r($data); die;
        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/user_api');
        $this->load->view('admin/lib/footer');
    }



    /*
    !--------------------------------------------------------
    !      Update User API TOKEN
    !--------------------------------------------------------
    */
    public function user_api_update($user_id="")
    {
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }
        $data['api'] = $this->input->post('api');
        $this ->db->set($data);
        $this->db->where(array(
            'user_id ' => $user_id
        )); 
        $this->db->update('tbl_user');
        $this->session->set_flashdata('success', 'API Updated Successfully');
        redirect('admin/dashboard');
    }

    /*
    !--------------------------------------------------------
    !      Delete User
    !--------------------------------------------------------
    */
    public function delete_user($user_id="")
    {
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }
        
      
        $this->db->where(array(
            'user_id ' => $user_id
        )); 
        $this->db->delete('tbl_user');
        $this->session->set_flashdata('success', 'User Deleted Successfully');
        redirect('admin/dashboard');
    }


    /*
    !--------------------------------------------------------
    !      Delete User
    !--------------------------------------------------------
    */
    public function settings()
    {
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }

        $this->load->helper('directory');
        $data['highlights'] = directory_map('./assets/front/plugins/hightlight/styles/', FALSE, TRUE);
        //echo '<pre>';
        //print_r($data['highlights']); exit;
        $data['website'] = $this->db->get('website')->result_object();
        
        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/settings');
        $this->load->view('admin/lib/footer');
        
    }

}