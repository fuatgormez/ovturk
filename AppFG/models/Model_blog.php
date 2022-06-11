<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_blog extends CI_Model 
{
    public function get_blog_category()
    {
        $query = $this->db->query("SELECT * FROM tbl_blog_category ORDER BY category_name ASC");
        return $query->result_array();
    }
    public function get_blog_data()
    {
        $query = $this->db->query("SELECT * from tbl_blog ORDER BY id DESC");
        return $query->result_array();
    }
    public function get_blog_data_order_by_name()
    {
        $query = $this->db->query("SELECT * from tbl_blog ORDER BY name ASC");
        return $query->result_array();
    }
    public function get_blog_detail($id) {
    	$sql = 'SELECT * FROM tbl_blog WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    public function get_blog_all_photo()
    {
        $query = $this->db->query("SELECT * from tbl_blog_photo");
        return $query->result_array();
    }
    public function get_blog_photo($id)
    {
        $query = $this->db->query("SELECT * from tbl_blog_photo WHERE blog_id=?",array($id));
        return $query->result_array();
    }
    public function get_blog_photo_number($id)
    {
        $query = $this->db->query("SELECT * from tbl_blog_photo WHERE blog_id=?",array($id));
        return $query->num_rows();
    }
}