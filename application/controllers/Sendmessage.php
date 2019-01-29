<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmessage extends CI_Controller
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

        if (!$this->session->has_userdata('user')) {
            redirect('login');
        }
        
    }


    /*
    !---------------------------------
    !      Send Single SMS View
    !---------------------------------
    */
    public function send_sms_single()
    {
        $this->db->join('tbl_group','tbl_group.groupid = tbl_contact.groupid ');
		$this->db->where(array(
            'tbl_contact.user_id' => $this->session->user_id
        ));
		
        $data['contacts'] = $this->db->get('tbl_contact')->result_object();
        
        $this->load->view('user/lib/header',$data);
        $this->load->view('user/lib/sidebar');
        $this->load->view('user/send_sms_single');
        $this->load->view('user/lib/footer');

    }

    /*
    !---------------------------------
    !       Send Single SMS Action
    !---------------------------------
    */
    public function send_single_sms_action()
    {
        
       $contact_number = $this->input->post('contact_number');
       $message        = $this->input->post('message');
	   $response = $this->smsmodel->sendMessage($contact_number,$message);
	   $this->session->set_flashdata('success', $response);
       redirect('dashboard');
    }


    /*
    !---------------------------------
    !       Send Group SMS Action
    !---------------------------------
    */
    public function send_sms_group()
    {
        
        $this->db->join('tbl_group','tbl_group.groupid = tbl_contact.groupid ');
        $this->db->where(array(
            'tbl_contact.user_id' => $this->session->user_id
        ));
        
        $data['contacts'] = $this->db->get('tbl_contact')->result_object();
		
        $this->db->where(array(
            'user_id' => $this->session->user_id
        ));
		$this->db->order_by('group_name','asc');
        $data['groups'] = $this->db->get('tbl_group')->result_object();

        $this->load->view('user/lib/header',$data);
        $this->load->view('user/lib/sidebar');
        $this->load->view('user/send_sms_group');
        $this->load->view('user/lib/footer');
    }

    /*
    !---------------------------------
    !       Send Group SMS Action
    !---------------------------------
    */
    public function send_sms_group_action()
    {

       $group   = $this->input->post('group');
       $message = $this->input->post('message');
       $withcontactname = $this->input->post('withcontactname');
	   $this->db->where(array(
            'tbl_contact.user_id' => $this->session->user_id,
            'tbl_contact.groupid' =>  $group
            
        ));
        $data['contacts'] = $this->db->get('tbl_contact')->result_object();
        $i = 0;
        foreach ($data['contacts'] as $value) {
            if ($withcontactname == 'yes') {
                $message = 'Dear '.$value->contact_name.', '.$message;
            }
			
            $response = $this->smsmodel->sendMessage($value->contact_number,$message);
            $i++;
     
        }
        $this->session->set_flashdata('success', 'Message Sent Successfully to '. $i." Contacts");
	    redirect('dashboard');
      
    }

    /*
    !---------------------------------
    !       Send Selected SMS 
    !---------------------------------
    */
    public function send_sms_selected()
    {
       
        $this->db->where(array(
            'user_id' => $this->session->user_id
        ));
        $this->db->order_by('group_name','asc');
        $data['groups'] = $this->db->get('tbl_group')->result_object();

        $this->load->view('user/lib/header',$data);
        $this->load->view('user/lib/sidebar');
        $this->load->view('user/send_sms_selected');
        $this->load->view('user/lib/footer');
    }

    /*
    !---------------------------------
    !       Send Selected SMS Handler 
    !---------------------------------
    */
    public function send_sms_selected_handler()
    {
       $group   = $this->input->post('group');
       redirect('send_sms_selected_contacts/'.$group);
    }

    /*
    !---------------------------------
    !       Send Selected SMS 
    !---------------------------------
    */
    public function send_sms_selected_contacts($group)
    {
        $this->db->where(array(
            'groupid' =>  $group,
            'user_id' => $this->session->user_id
            
        ));
        $data['group'] = $this->db->get('tbl_group')->result_object();
		
		$this->db->join('tbl_group','tbl_group.groupid = tbl_contact.groupid ');
        $this->db->where(array(
            'tbl_contact.user_id' => $this->session->user_id,
            'tbl_contact.groupid' =>  $group
            
        ));
        $data['contacts'] = $this->db->get('tbl_contact')->result_object();
        
        $this->load->view('user/lib/header',$data);
        $this->load->view('user/lib/sidebar');
        $this->load->view('user/send_sms_selected_contacts');
        $this->load->view('user/lib/footer');
    }

    /*
    !---------------------------------
    !       Send Sms Selected Action
    !---------------------------------
    */
    public function send_sms_selected_message()
    {
       
        echo '<pre>';
        print_r($_POST); die;
        
        $group   = $this->input->post('group');

        $this->load->view('user/lib/header',$data);
        $this->load->view('user/lib/sidebar');
        $this->load->view('user/send_sms_selected_message');
        $this->load->view('user/lib/footer');
    }



}