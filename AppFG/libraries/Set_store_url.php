<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Set_store_url
{
    public $store;
    private $_CI;
    function __construct()
    {
        $this->_CI = &get_instance();
        $this->_CI->load->model('Model_common');

        if (base_url() === 'http://ovturk:8888/' || base_url() === 'https://www.ovturk.com/') {
			$check_lang = $this->_CI->Model_common->store_check($this->_CI->session->userdata('store_id') ?: 1);
			if ($check_lang != NULL) {
				$array = array(
					'store_id' => $check_lang['id'],
					'store_name' => $check_lang['store_name'],
					'land_id' => $check_lang['land_id'],
					'land_name' => $check_lang['land_name'],
					'store_language' => $check_lang['lang_code'],
					'store_flag' => $check_lang['lang_flag'],
					// 'site_language' => $check_lang['lang_code'],
					'currency_code' => $check_lang['currency_code'],
					'currency_icon' => $check_lang['currency_icon'],
					'tax' => $check_lang['tax']
				);
				$this->_CI->session->set_userdata($array);
			}

        } else {
			$check_lang = $this->_CI->Model_common->store_check($this->_CI->session->userdata('store_id') ?: 1);
			if ($check_lang != NULL) {
				$array = array(
					'store_id' => $check_lang['id'],
					'store_name' => $check_lang['store_name'],
					'land_id' => $check_lang['land_id'],
					'land_name' => $check_lang['land_name'],
					'store_language' => $check_lang['lang_code'],
					'store_flag' => $check_lang['lang_flag'],
					// 'site_language' => $check_lang['lang_code'],
					'currency_code' => $check_lang['currency_code'],
					'currency_icon' => $check_lang['currency_icon'],
					'tax' => $check_lang['tax']
				);
				$this->_CI->session->set_userdata($array);
			}
		}
    }
}
