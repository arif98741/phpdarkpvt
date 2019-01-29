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
    !       Default Function Admin for Homepage
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

        /*
        $this->db->join('tbl_payment','tbl_apply.apply_id = tbl_payment.apply_id');
        $this->db->join('tbl_user','tbl_user.user_id = tbl_payment.user_id');
        $this->db->where(array(
            'tbl_payment.trans_id !=' => 'pending',
            'tbl_payment.status ' => 'verified'
        ));  
        $data['total_withfee'] = $this->db->get('tbl_apply')->result_id->num_rows ;
        
        $this->db->join('tbl_payment','tbl_apply.apply_id = tbl_payment.apply_id');
        $this->db->join('tbl_user','tbl_user.user_id = tbl_payment.user_id');
        $this->db->where(array(
            'tbl_payment.trans_id =' => 'pending',
            'tbl_payment.status ='   => 'pending'
        ));  
        $data['total_withoutfee'] = $this->db->get('tbl_apply')->result_id->num_rows ;

        $data['total_apply'] = $data['total_withfee'] + $data['total_withoutfee'];
        
        $this->db->select('sum(tbl_payment.paid_amount) as total_receive');
        $this->db->join('tbl_payment','tbl_apply.apply_id = tbl_payment.apply_id');
        $this->db->join('tbl_user','tbl_user.user_id = tbl_payment.user_id');
        $this->db->where(array(
            'tbl_payment.trans_id !=' => 'pending',
            'tbl_payment.status    =' => 'verified'
        ));  
        $data['total_receive'] = $this->db->get('tbl_apply')->result_object();
        //echo "<pre>";
        //print_r($data['total_receive']); die;*/

        $this->load->view('admin/lib/header');
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
                    'login'       => true,
                    'admin'       => 'admin',
                    'admin_role'  => $data[0]->role,
                    'admin_name'  => $data[0]->admin_name,
                    'admin_role'  => $data[0]->role,
                    'admin_image' => $data[0]->admin_image
            );
           $this->session->set_userdata($session);
           $this->session->set_flashdata('success', 'Successfully Loggedin');
           //redirect('admin/dashboard');
       }else{
            $this->session->set_flashdata('error', 'Login Failed');
            ///redirect("admin");
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

}