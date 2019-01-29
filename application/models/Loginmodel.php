<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class LoginModel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
        }

        public function checkexistance($username)
        {
            $where['username']  = $username;
            $result = $this->db->get_where("usertable",$where);
            return true;
        }


        /*
        !---------------------------------------
        !   Admin Login To Dashboard
        !---------------------------------------
        */ 
        public function login($username="", $password="")
        {
            $where['username'] = $username;
            $where['password'] = $password;

            $this->db->where(array(
              'username' => $username,
              'password' => $password,
              'role' => 'admin',
           ));
            $result = $this->db->get('tbl_admin');
           if($result)
           {
              return $result;
           }else{
               return false;
           }
        }


        /*
        !---------------------------------------
        !  School Login To Dashboard
        !---------------------------------------
        */ 
        public function userlogin($username="", $password="")
        {
            $where['username'] = $username;
            $where['password'] = $password;

            $this->db->where(array(
              'username' => $username,
              'password' => $password,
              'status'   => 'active'
           ));
            $result = $this->db->get('tbl_user');
           if($result)
           {
              return $result;
           }else{
               return false;
           }
        }

    }

?>