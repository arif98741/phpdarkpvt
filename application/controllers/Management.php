<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller
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
             redirect('dashboard');
        }
    }

    /*
    !--------------------------------------------------------
    !      Applciation with Fee
    !--------------------------------------------------------
    */
    public function application_withfee()
    {
        $this->db->select('tbl_apply.admission_roll,tbl_apply.stu_name,tbl_apply.father,tbl_apply.mother,tbl_apply.image,tbl_apply.date,tbl_transaction.TRANSACTION_ID,tbl_apply.apply_id');
        $this->db->join('tbl_transaction','tbl_apply.application_number = tbl_transaction.application_number');
        $this->db->join('tbl_user','tbl_user.user_id = tbl_apply.user_id');
        $this->db->where(array(
			// 'tbl_payment.trans_id !=' => 'pending',
   //          'tbl_payment.status '     => 'verified',
			'tbl_apply.user_id '      => $this->session->user_id

		));
        $this->db->order_by('tbl_apply.admission_roll','asc');
        $status = $this->db->get('tbl_apply');
        $data['applications'] = $status->result_object();
        //echo "<pre>";
        //print_r($data); die;
    
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/application_withfee');
        $this->load->view('back/lib/footer');
        
    }

    /*
    !--------------------------------------------------------
    !      Applciation without Fee
    !--------------------------------------------------------
    */
    public function application_withoutfee()
    {
       // $this->db->join('tbl_payment','tbl_apply.apply_id = tbl_payment.apply_id');
        $this->db->join('tbl_user','tbl_user.user_id = tbl_apply.user_id');
		$this->db->where(array(
            //'tbl_payment.trans_id =' => 'pending',
            //'tbl_payment.status ='   => 'pending',
			'tbl_apply.user_id '     => $this->session->user_id
		));
        
        $status = $this->db->get('tbl_apply');
        $data['applications'] = $status->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/application_withoutfee');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !--------------------------------------------------------
    !    Application Delete
    !--------------------------------------------------------
    */
    public function delete_apply($apply_id)
    {
		$this->db->where(array(
			'tbl_apply.apply_id ' => $apply_id,
			'tbl_apply.user_id ' => $this->session->user_id
		));
        $status = $this->db->delete('tbl_apply');
		
		$this->db->where(array(
			'tbl_payment.apply_id ' => $apply_id,
			'tbl_payment.user_id ' => $this->session->user_id
			
		));
		$status = $this->db->delete('tbl_payment');
		
        $this->session->set_flashdata('success', 'সফলভাবে ডিলিট হয়েছে');
        redirect('applcation_withoutfee');
    }

    /*
    !-----------------------------------------
    ! Fees Receive
    !-----------------------------------------
    */
    public function fees_receive()
    {
		
        $this->db->join('tbl_payment','tbl_apply.apply_id = tbl_payment.apply_id');
        $this->db->join('tbl_user','tbl_user.user_id = tbl_payment.user_id');
        $this->db->where(array(
            'tbl_payment.trans_id !=' => 'pending',
            'tbl_payment.status' 	  => 'pending',
            'tbl_apply.user_id ' 	  => $this->session->user_id
        ));
        
        $status = $this->db->get('tbl_apply');
        $data['applications'] = $status->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/fees_receive');
        $this->load->view('back/lib/footer'); 
    }


    /*
    !-----------------------------------------
    ! Verify Payment
    !-----------------------------------------
    */
    public function verify_payment($apply_id)
    {
        $data['status'] = 'verified';
        $this->db->where(array(
            'tbl_payment.apply_id' => $apply_id,
            'tbl_payment.user_id'  => $this->session->user_id
        ));
		$status = $this->db->set($data);
		$this->db->update('tbl_payment');
		

        $this->db->select('stu_name,mobile_father,application_number');
        $this->db->where('apply_id',$apply_id);
        $sms = $this->db->get('tbl_apply')->result_object();

        $message = "প্রিয় ".$sms[0]->stu_name.", আপনার পেমেন্ট গ্রহণ করা হল। আবেদন নম্বর ".$sms[0]->application_number." ব্যবহার করে প্রবেশপত্র গ্রহণ করুন । ".$this->session->organization_name;
        
        $this->smsmodel->sendmessage($sms[0]->mobile_father,$message);
    
        $this->session->set_flashdata('success', 'ফিস সফলভাবে গৃহীত হয়েছে');
		redirect('fees_receive');
        
    }

    /*
    !-----------------------------------------
    ! Applcation REport View
    !-----------------------------------------
    */
    public function application_report()
    {
        $this->load->view('back/lib/header');
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/application_report');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !-----------------------------------------
    ! Application Report Action
    !-----------------------------------------
    */
    public function application_report_action()
    {
      $data['class'] = $this->input->post("class");
      redirect('preview_application_report/'.$this->session->user_id.'/'.$data['class']);

    }

    /*
    !-----------------------------------------
    ! Preview Applcation REport
    !-----------------------------------------
    */
    public function preview_application_report($institute_id,$class)
    {
        $this->db->select('tbl_user.organization_name,tbl_user.address,tbl_user.image as logo,tbl_user.website,tbl_payment.apply_date,tbl_user.admit_rule,tbl_apply.*,');

        $this->db->join('tbl_payment','tbl_apply.apply_id = tbl_payment.apply_id');
        $this->db->join('tbl_user','tbl_user.user_id = tbl_payment.user_id');
        $this->db->where(array(
            'tbl_payment.trans_id !=' => '',
            'tbl_payment.status'      => 'verified',
            'tbl_apply.user_id '      => $this->session->user_id
        ));
        
        $status = $this->db->get('tbl_apply');
        $data['applications'] = $status->result_object();
        $data['class'] = $class;
    
        $this->load->view('back/report/application_report',$data);
    }

     /*
    !-----------------------------------------
    ! Fees Report
    !-----------------------------------------
    */
    public function fees_report()
    {
        $this->load->view('back/lib/header');
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/fees_report');
        $this->load->view('back/lib/footer'); 
    }



    /*
    !-----------------------------------------
    ! Fees Report Action
    !-----------------------------------------
    */
    public function fees_report_action()
    {
      $data['class'] = $this->input->post("class");
      redirect('preview_fees_report/'.$this->session->user_id.'/'.$data['class']);

    }


     /*
    !-----------------------------------------
    ! Preview Fees REport
    !-----------------------------------------
    */
    public function preview_fees_report($institute_id,$class)
    {
        $this->db->select('tbl_user.organization_name,tbl_user.address,tbl_user.image as logo,tbl_user.website,tbl_payment.apply_date,tbl_payment.pay_date,tbl_payment.paid_amount,tbl_user.admit_rule,tbl_apply.*,');

        $this->db->join('tbl_payment','tbl_apply.apply_id = tbl_payment.apply_id');
        $this->db->join('tbl_user','tbl_user.user_id = tbl_payment.user_id');
        $this->db->where(array(
            'tbl_payment.trans_id !=' => '',
            'tbl_payment.status'      => 'verified',
            'tbl_apply.user_id '      => $this->session->user_id
        ));
        
        $status = $this->db->get('tbl_apply');
        $data['applications'] = $status->result_object();
        $data['class'] = $class;
    
        $this->load->view('back/report/fees_report',$data);
    }


}