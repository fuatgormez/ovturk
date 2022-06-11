<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_photo_gallery extends CI_Model 
{
    public function all_photo()
    {
        $query = $this->db->query("SELECT * FROM tbl_photo ORDER BY photo_id ASC");
        return $query->result_array();
    }
    
    public function photo_tag($tag)
    {
        $query = $this->db->query("SELECT * FROM tbl_photo where tag = ? ORDER BY photo_id ASC",$tag);
        return $query->result_array();
    }
}