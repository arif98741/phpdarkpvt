<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php

class Countermodel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database("default", TRUE);
       
    }


    public function total_category()
    {
        $result_set = $this->db->get('tbl_post_category')->result_id->num_rows;
        if ($result_set > 0) {
            return $result_set;
        }else{
            return 0;
        }
    }


    
    public function total_post()
    {
        $result_set = $this->db->get('tbl_post')->result_id->num_rows;
        if ($result_set > 0) {
            return $result_set;
        }else{
            return 0;
        }
    }

    public function total_tag()
    {
        $result_set = $this->db->get('tbl_tag')->result_id->num_rows;
        if ($result_set > 0) {
            return $result_set;
        }else{
            return 0;
        }
    }


    public function total_page()
    {
        $result_set = $this->db->get('tbl_page')->result_id->num_rows;
        if ($result_set > 0) {
            return $result_set;
        }else{
            return 0;
        }
    }


    public function total_blog()
    {
        $result_set = $this->db->get('tbl_blog')->result_id->num_rows;
        if ($result_set > 0) {
            return $result_set;
        }else{
            return 0;
        }
    }

}

?>