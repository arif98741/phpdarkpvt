<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bloghelper extends CI_Model
{
    /*front blog helper*/
    public function increase_view($blog_id)
    {
        $update_data = $this->db->select('view')->where('blog_id',$blog_id)->get('tbl_blog')->result_object()[0];
        $this->db->set('view',$update_data->view+1)->where('blog_id',$blog_id)->update('tbl_blog');
    }
}
