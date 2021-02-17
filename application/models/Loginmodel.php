<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php

class LoginModel extends CI_Model
{

    /**
     * LoginModel constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database("default", TRUE);
        $this->load->library('Helperlibrary', null, 'help');
    }

    /**
     * Check User Existance In database table
     * @param $username
     * @return bool
     */
    public function checkexistance($username)
    {
        $where['username'] = $username;
        $result = $this->db->get_where("usertable", $where);
        return true;
    }

    /**
     * Admin Login To Dashboard
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function login($username = "", $password = ""): bool
    {
        $where['username'] = $username;
        $where['password'] = $password;

        $this->db->where($where);
        $result = $this->db->get('tbl_user');
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    /**
     * Admin Access Log
     * @param string $username
     * @param string $password
     * @param string $status
     */
    public function accesslog($username = "", $password = "", $status = '')
    {
        $this->db->insert('tbl_accesslog', array(
            'ip' => $_SERVER['REMOTE_ADDR'],
            'user' => $username,
            'pass' => $password,
            'status' => $status,
            'date' => date('Y-m-d H:i:s')
        ));

    }

}

?>