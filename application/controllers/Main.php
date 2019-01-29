<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
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
    !       Default Function for result user
    !--------------------------------------------------------
    */
    public function index()
    {
        if ($this->session->has_userdata('user')) {
             redirect('dashboard');
        }
        $this->load->view('back/login');
        
        
    }


    /*
    !--------------------------------------------------------
    !       Default Function for Homepage
    !--------------------------------------------------------
    */
    public function registration()
    {
        $this->load->view('back/registration');

    }


    /*
    !--------------------------------------------------------
    !       Default Function for Dashboard
    !--------------------------------------------------------
    */
    public function dashboard()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('login');
        }
        $this->db->join('tbl_transaction','tbl_apply.application_number = tbl_transaction.application_number');
        $this->db->join('tbl_user','tbl_user.user_id = tbl_apply.user_id');
        $this->db->where(array(
            //'tbl_transaction.trans_id !=' => 'pending',
           // 'tbl_transaction.status ' => 'verified',
            'tbl_apply.user_id '  => $this->session->user_id
        ));  
        $data['total_withfee'] = $this->db->get('tbl_apply')->result_id->num_rows ;

        $data['total_apply'] = $this->db->get('tbl_apply')->result_id->num_rows ;
        //$data['total_withoutfee'] = $this->db->get('tbl_apply')->result_id->num_rows ;
        $data['total_withoutfee'] = $data['total_apply'] - $data['total_withfee'];

		$this->db->select('sum(tbl_transaction.fee_amt) as total_receive');
        $this->db->join('tbl_transaction','tbl_apply.application_number = tbl_transaction.application_number');
        $this->db->join('tbl_user','tbl_user.user_id = tbl_apply.user_id');
        $this->db->where(array(
            'tbl_apply.user_id '      => $this->session->user_id
        ));  
        $data['total_receive'] = $this->db->get('tbl_apply')->result_object();
		
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/dashboard');
        $this->load->view('back/lib/footer');
    }

    /*
    !--------------------------------------------------------
    !       Login Handeller
    !--------------------------------------------------------
    */
    public function login()
    {
        if ($this->session->has_userdata('user')) {
            redirect('dashboard');
        }

        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));
        $this->load->model('loginmodel');

        $status  = $this->loginmodel->userlogin($username,$password);
        
        if ($status->result_id->num_rows > 0) {

           $data     = $status->result_object();
           $session  = array(
                    'user'           => 'user',
                    'user_id'        => $data[0]->user_id,
                    'user_organization'   => $data[0]->organization_name,
                    'user_organization_head'   => $data[0]->organization_head,
                    'user_token'      => $data[0]->api,
                    'user_name'      => $data[0]->username,
                    'user_email'     => $data[0]->email,
                    'user_image'     => $data[0]->image,
                    'user_signature' => $data[0]->signature,
                    'user_website'   => $data[0]->website
            );

           $this->session->set_userdata($session);
           $this->session->set_flashdata('success', 'সফলভাবে লগিন হয়েছে');
           redirect('dashboard');
       }else{
            
            $this->session->set_flashdata('error', 'ইউজারনেইম অথবা পাসওয়ার্ড সঠিক নয়');
            redirect("main");
       }

    }

    /*
    !---------------------------------
    !       Logout School User
    !---------------------------------
    */
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    /*
    !--------------------------------------------------------
    !      Save
    !--------------------------------------------------------
    */
    public function save_user($id = '')
    {
       //echo "<pre>";
       //print_r($_POST); die;
    
        $organization_name = $this->input->post('organization_name');
        $organization_head = $this->input->post('organization_head');
        $upozila = $this->input->post('upozila');
        $dist = $this->input->post('dist');
        $mobile = $this->input->post('mobile');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $website = $this->input->post('website');

        if($this->db->where('username',$username)->get('tbl_user')->result_id->num_rows >0){

            $this->session->set_flashdata('error','ইউজারনেইম ইতোমধ্যে ব্যবহৃত হয়েছে। '); 
            redirect('registration');
            
            
        }else if($this->db->where('email',$email)->get('tbl_user')->result_id->num_rows >0){

            $this->session->set_flashdata('error','ইমেইল পূর্বে ব্যবহৃত হয়েছে। ভিন্ন ইমেইল বাছাই করুন'); 
              redirect('registration');
            
            
        }else if($this->db->where('mobile',$mobile)->get('tbl_user')->result_id->num_rows >0){

            $this->session->set_flashdata('error','মোবাইল পূর্বে ব্যবহৃত হয়েছে। ভিন্ন ইমেইল বাছাই করুন'); 
            redirect('registration');
            
        }else
        {
            
            $data = array(
                
                'organization_name' => $this->input->post('organization_name'),
                'organization_head' => $this->input->post('organization_head'),
                'upozila'           => $this->input->post('upozila'),
                'dist'              => $this->input->post('dist'),
                'mobile'            => $this->input->post('mobile'),
                'email'             => $this->input->post('email'),
                'username'          => $this->input->post('username'),
                'password'          => md5($password),
                'website'           => $this->input->post('website')
            );

            if (!empty($_FILES['image']['name'])) {

                $config['upload_path'] = './uploads/user/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = 10000;
                $config['max_width']    = 10000;
                $config['max_height']   = 10000;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    
                } else {
                    $upload_data = array('upload_data' => $this->upload->data());
                    $data['image'] = $upload_data['upload_data']['file_name'];
                }
            }

        
            $this->db->insert('tbl_user',$data); //insert data
            $this->session->set_flashdata('success', 'রেজিট্রেশন সফল হয়েছে। ');
            redirect('login');
        
        }

    }

    /*
    !---------------------------------
    !      Profile
    !---------------------------------
    */
    public function profile()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['user'] = $this->db->where('user_id',$this->session->user_id)->get('tbl_user')->result_object();
	  
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/profile');
        $this->load->view('back/lib/footer');

    }

    /*!--------------------------------------------------------
    !      Update Profile
    !--------------------------------------------------------
    */
    public function updateprofile()
    {

        if (!$this->session->has_userdata('user')) {
            redirect('main');
        }

		$data['organization_head'] = $this->input->post("organization_head");
		$data['email'] 			   = $this->input->post("email");
		
		$this->db->set($data);
		$this->db->where(array('user_id' => $this->session->user_id));
		$this->db->update('tbl_user');
		
	
       
        // logo(image ) upload
        if (!empty($_FILES['image']['name'])) {

                $userdata = $this->db->where('user_id',$this->session->user_id)->get('tbl_user')->result_object();
                //echo $userdata[0]->image;

                if (file_exists('uploads/user/'.$userdata[0]->image)) {
                    unlink('uploads/user/'.$userdata[0]->image);
                }

                $config['upload_path']   = './uploads/user/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = 500;
                $config['max_width']     = 10000;
                $config['max_height']    = 10000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                     $upload_data = array('upload_data' => $this->upload->data());

                     $data['image'] = $upload_data['upload_data']['file_name'];

                     $this->db->set('image',$data['image']);
                     $this->db->where('user_id',$this->session->user_id);
                     $this->db->update('tbl_user');
                     $this->session->set_userdata( array(
                         'user_image'  => $data['image']

                     ));                      
                } 
        }
        $this->session->set_userdata( array(
             'user_organization_head'  => $data['organization_head']
         ));  
		
        $this->session->set_flashdata('success', 'প্রোফাইল সফলভাবে আপডেট হয়েছে');
        redirect('dashboard');
    }


    /*
    !-------------------------------------------
    ! Update Signature
    !-------------------------------------------
    */
    public function updatesignature()
    {
        
        // logo(signature ) upload
        if (!empty($_FILES['signature']['name'])) {

                $userdata = $this->db->where('user_id',$this->session->user_id)->get('tbl_user')->result_object();
                //echo $userdata[0]->image;

                if (file_exists('uploads/user/signature/'.$userdata[0]->signature)) {
                    unlink('uploads/user/signature/'.$userdata[0]->signature);
                }

                $config['upload_path']   = './uploads/user/signature/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = 500;
                $config['max_width']     = 10000;
                $config['max_height']    = 10000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('signature')) {
                     $upload_data = array('upload_data' => $this->upload->data());

                     $data['signature'] = $upload_data['upload_data']['file_name'];

                     $this->db->set('signature',$data['signature']);
                     $this->db->where('user_id',$this->session->user_id);
                     $this->db->update('tbl_user');
                     $this->session->set_userdata( array(
                         'user_signature'  => $data['signature']
                     ));                      
                } 
        }

        $this->session->set_flashdata('success', 'প্রোফাইল সফলভাবে আপডেট হয়েছে');
        redirect('dashboard');
    }


    /*
    !---------------------------------
    !     Switch System
    !---------------------------------
    */
    public function switch_system()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['user'] = $this->db->where('user_id',$this->session->user_id)->get('tbl_user')->result_object();
      
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/switch_system');
        $this->load->view('back/lib/footer');
    }


    /*
    !---------------------------------
    !     Switch System Action
    !---------------------------------
    */
    public function switch_system_action()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['switch_system']     = $this->input->post("switch_system");
        
        $this->db->set($data);
        $this->db->where(array('user_id' => $this->session->user_id));
        $this->db->update('tbl_user');

        $this->session->set_flashdata('success', 'সিস্টেম সফলভাবে আপডেট হয়েছে');
        redirect('dashboard');
    }


    /*
    !---------------------------------
    !     Switch Admit
    !---------------------------------
    */
    public function switch_admit()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['user'] = $this->db->where('user_id',$this->session->user_id)->get('tbl_user')->result_object();
      
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/switch_admit');
        $this->load->view('back/lib/footer');
    }



    /*
    !---------------------------------
    !     Switch Admit Action
    !---------------------------------
    */
    public function switch_admit_action()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['switch_admit']     = $this->input->post("switch_admit"); 
        
        $this->db->set($data);
        $this->db->where(array('user_id' => $this->session->user_id));
        $this->db->update('tbl_user');

        $this->session->set_flashdata('success', 'প্রবেশপত্র বিতরণ সেটিংস সফলভাবে আপডেট হয়েছে');
        redirect('dashboard');
    }

     /*
    !---------------------------------
    !     APply Rule
    !---------------------------------
    */
    public function apply_rule()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['user'] = $this->db->where('user_id',$this->session->user_id)->get('tbl_user')->result_object();
      
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/apply_rule');
        $this->load->view('back/lib/footer');
    }


    /*
    !---------------------------------
    !     Apply Rule Action
    !---------------------------------
    */
    public function apply_rule_action()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['apply_rule']     = $this->input->post("apply_rule"); 
        
        $this->db->set($data);
        $this->db->where(array('user_id' => $this->session->user_id));
        $this->db->update('tbl_user');

        $this->session->set_flashdata('success', 'সফলভাবে আপডেট হয়েছে');
        redirect('dashboard');
    }


    /*
    !---------------------------------
    !     APply Rule
    !---------------------------------
    */
    public function pay_rule()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['user'] = $this->db->where('user_id',$this->session->user_id)->get('tbl_user')->result_object();
      
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/pay_rule');
        $this->load->view('back/lib/footer');
    }



    /*
    !---------------------------------
    !     Pay Rule Action
    !---------------------------------
    */
    public function pay_rule_action()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['pay_rule']     = $this->input->post("pay_rule"); 
        
        $this->db->set($data);
        $this->db->where(array('user_id' => $this->session->user_id));
        $this->db->update('tbl_user');

        $this->session->set_flashdata('success', 'সফলভাবে আপডেট হয়েছে');
        redirect('dashboard');
    }

    /*
    !---------------------------------
    !     APply Rule
    !---------------------------------
    */
    public function apply_fee()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['user'] = $this->db->where('user_id',$this->session->user_id)->get('tbl_user')->result_object();
      
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/apply_fee');
        $this->load->view('back/lib/footer');
    }

     /*
    !---------------------------------
    !     Pay Rule Action
    !---------------------------------
    */
    public function apply_fee_action()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['fee_amount']     = $this->input->post("apply_fee"); 
        
        $this->db->set($data);
        $this->db->where(array('user_id' => $this->session->user_id));
        $this->db->update('tbl_user');

        $this->session->set_flashdata('success', 'সফলভাবে আপডেট হয়েছে');
        redirect('dashboard');
    }



    /*
    !---------------------------------
    !     Admit Rule
    !---------------------------------
    */
    public function admit_rule()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['user'] = $this->db->where('user_id',$this->session->user_id)->get('tbl_user')->result_object();
      
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/admit_rule');
        $this->load->view('back/lib/footer');
    }



    /*
    !---------------------------------
    !     Admit Rule Action
    !---------------------------------
    */
    public function admit_rule_action()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['admit_rule']     = $this->input->post("admit_rule"); 
        
        $this->db->set($data);
        $this->db->where(array('user_id' => $this->session->user_id));
        $this->db->update('tbl_user');

        $this->session->set_flashdata('success', 'সফলভাবে আপডেট হয়েছে');
        redirect('dashboard');
    }


     /*
    !---------------------------------
    !     Buy SMS
    !---------------------------------
    */
    public function buy_sms()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $this->load->view('back/lib/header');
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/buy_sms');
        $this->load->view('back/lib/footer');
    }


    /*
    !---------------------------------
    !     Admit Rule Action
    !---------------------------------
    */
    public function buy_sms_action()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $sms_amount   = $this->input->post("sms_amount"); 
        $sms_payment  = $this->input->post("sms_payment"); 
        $trans_id     = $this->input->post("trans_id");

        $message = 'Dear, '.$this->session->user_name.' has ordered '.$sms_amount.' sms paid amount '.$sms_payment.'tk using bkash. Trx id '.$trans_id;
        $response = $this->smsmodel->sendMessage('01733499574',$message);
        $this->session->set_flashdata('success', 'মেসেজ ক্রয়ের রিকোয়েস্ট সলভাবে প্রেরণ করা হয়েছে');
        redirect('dashboard');
    }


    /*
    !---------------------------------
    !     Public Notice
    !---------------------------------
    */
    public function public_notice()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['notice'] = $this->db->get('public_notice')->result_object();

        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/public_notice');
        $this->load->view('back/lib/footer');
    }


    /*
    !---------------------------------
    !     Public Notice Action
    !---------------------------------
    */
    public function public_notice_action()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }

        $data['notice_end']      = $this->input->post("notice_end"); 
        $data['notice_color']    = $this->input->post("notice_color"); 
        $data['notice_details']  = trim($this->input->post("notice_details"));

        $this->db->set($data);
        $this->db->where(array('notice_id' => 1));
        $this->db->update('public_notice');
        $this->session->set_flashdata('success', 'সফলভাবে আপডেট হয়েছে');
        redirect('dashboard');
        
    }

    /*
    !---------------------------------
    !   Edit Student(Photo)
    !---------------------------------
    */
    public function edit_student()
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }
        $data['notice'] = $this->db->get('public_notice')->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/edit_student');
        $this->load->view('back/lib/footer');
    }

    
    /*
    !---------------------------------
    !   Edit Student(Photo)
    !---------------------------------
    */
    public function edit_student_action($apply_id)
    {
        if (!$this->session->has_userdata('user')) {
            redirect('/');
        }
        if (!empty($_FILES['image']['name'])) {
                
                $config['upload_path']   = './uploads/student/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = 200;
                $config['max_width']     = 10000;
                $config['max_height']    = 10000;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $upload_data = array('upload_data' => $this->upload->data());
                    $data['image'] = $upload_data['upload_data']['file_name'];     
                            
                    $this->db->set($data);  
                    $this ->db->where('apply_id',$apply_id);
                    $this ->db->update('tbl_apply');
                } 
        }
        $this->session->set_flashdata('success', 'সফলভাবে আপডেট হয়েছে');
        redirect('dashboard');
    }


}