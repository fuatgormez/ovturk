<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tag extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_tag'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * FROM tbl_tag ORDER BY tag_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_tag',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('tag_id',$id);
        $this->db->update('tbl_tag',$data);
    }

    function delete($id)
    {
        $this->db->where('tag_id',$id);
        $this->db->delete('tbl_tag');
    }

    function get_tag($id)
    {
        $sql = 'SELECT * FROM tbl_tag WHERE tag_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function tag_check($id)
    {
        $sql = 'SELECT * FROM tbl_tag WHERE tag_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function tag_slug_check($slug)
    {
        $sql = 'SELECT slug FROM tbl_tag WHERE slug=?';
        $query = $this->db->query($sql,array($slug));
        return $query->num_rows();
    }
    
}