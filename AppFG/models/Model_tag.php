<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tag extends CI_Model 
{
    public function all_tag()
    {
        $query = $this->db->query("SELECT * FROM tbl_tag WHERE status = ? ORDER BY tag_id ASC",['Show']);
        return $query->result_array();
    }
    function get_single_product($product_id, $lang = "tr")
    {
        $sql = "SELECT * 
                FROM tbl_shop_product t1
                JOIN tbl_shop_product_lang t2
                ON t1.id = t2.product_id
                JOIN tbl_shop_product_category t3
                ON t3.category_id = t1.category_id
                JOIN tbl_shop_product_category_lang t4
                ON t4.product_category_id = t3.category_id
                WHERE t1.id = ? AND t2.lang_code = ? AND t4.lang_code = ?";

        $query = $this->db->query($sql, array($product_id, $lang, $lang));
        return $query->first_row('array');
    }

    function tag_slug_check($slug)
    {
        $sql = 'SELECT * FROM tbl_tag WHERE slug=?';
        $query = $this->db->query($sql,array($slug));
        return $query->first_row('array');
    }
}