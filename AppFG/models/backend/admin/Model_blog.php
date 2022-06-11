<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_blog extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_blog'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_auto_increment_id1()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_blog'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * 
				FROM tbl_blog t1
				JOIN tbl_blog_category t2
				ON t1.category_id = t2.category_id
                ORDER BY t1.id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_all_photos_by_category_id($id)
    {
        $sql = "SELECT * 
    			FROM tbl_blog_photo 
    			WHERE blog_id=?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }

    function get_all_photo_category()
    {
        $sql = "SELECT * 
				FROM tbl_blog_category
				ORDER BY category_name ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_blog',$data);
        return $this->db->insert_id();
    }

    function add_photos($data) {
        $this->db->insert('tbl_blog_photo',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_blog',$data);
    }

    function update_photo($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_blog_photo',$data);
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_blog');
    }

    function delete_photos($id)
    {
        $this->db->where('blog_id',$id);
        $this->db->delete('tbl_blog_photo');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_blog WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function blog_check($id)
    {
        $sql = 'SELECT * FROM tbl_blog WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function blog_photo_by_id($id)
    {
        $sql = 'SELECT * FROM tbl_blog_photo WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    function delete_blog_photo($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_blog_photo');
    }
    
}