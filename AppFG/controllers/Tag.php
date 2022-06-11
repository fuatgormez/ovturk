<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag extends CI_Controller {

	function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_tag');
        $this->load->model('Model_portfolio');
        $this->load->model('Model_service');
        $this->load->model('shop/Model_shopping_cart');

        $this->load->library('slug');
        $this->load->library('cart');
        $this->lang->load('file', $this->session->userdata('site_language') ?? $this->session->userdata('store_language'));
        // $this->output->cache(60);
        // $store_lang_data = empty($this->session->userdata('store_language')) ? redirect(base_url()) : $this->session->userdata('store_language') ;
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
        $data['page_home'] = $this->Model_common->all_page_home();
		$data['page_photo_gallery'] = $this->Model_common->all_page_photo_gallery();
		//$data['comment'] = $this->Model_common->all_comment();
		$data['socials'] = $this->Model_common->all_social();
		//$data['all_news'] = $this->Model_common->all_news();
        $data['services'] = $this->Model_service->all_service();
        $data['page_contact'] = $this->Model_common->all_page_contact();
		$data['tags'] = $this->Model_tag->all_tag();
		//$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

        if(count($data['tags']) < 1) {
            redirect(base_url());
        }

        $data['stores'] = $this->Model_common->get_all_store();
        $data['store_langs'] = $this->Model_common->get_all_store_value();

        $land_id = empty($this->session->userdata('land_id')) ? redirect(base_url('select_land')) : $this->session->userdata('land_id') ;
        $store_id = empty($this->session->userdata('store_id')) ? redirect(base_url('select_land')) : $this->session->userdata('store_id') ;
        $store_lang_data = empty($this->session->userdata('store_language')) ? redirect(base_url('select_land')) : $this->session->userdata('store_language') ;
        
        $data['products'] = $this->Model_shopping_cart->all_product($store_lang_data, $land_id);
        $data['product_categories'] = $this->Model_shopping_cart->all_product_category($store_lang_data);
        $data['product_category_photo'] = $this->Model_shopping_cart->all_product_category_photo();

        $data['theme'] = $data['setting']['layout'];

        $this->load->view('layout/'.$data['setting']['layout'].'/view_header',$data);
		if($data['setting']['website_status_frontend'] === 'Active' || in_array($this->session->userdata('role'), ['Superadmin','Admin']))
        {
			$this->load->view('layout/'.$data['setting']['layout'].'/view_tag',$data);
        } else {
            $this->load->view('view_maintenance', $data);
        }
		$this->load->view('layout/'.$data['setting']['layout'].'/view_footer',$data);
	}

    public function detail ($tag)
    {
        $data['setting'] = $this->Model_common->all_setting();
        $data['page_home'] = $this->Model_common->all_page_home();
		$data['page_photo_gallery'] = $this->Model_common->all_page_photo_gallery();
		//$data['comment'] = $this->Model_common->all_comment();
		$data['socials'] = $this->Model_common->all_social();
		//$data['all_news'] = $this->Model_common->all_news();
        $data['services'] = $this->Model_service->all_service();
        $data['page_contact'] = $this->Model_common->all_page_contact();
		// $data['list'] = $this->Model_tag->list();
		//$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

        $data['tags'] = $this->Model_tag->all_tag();
		//$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

        if(count($data['tags']) < 1) {
            redirect(base_url());
        }

		if(!$this->Model_tag->tag_slug_check($this->slug->url($tag))){
			$this->session->set_flashdata('error','Etiket bulunamadi lütfen tekrar deneyiniz!');
            redirect(base_url());
		}

        // print_r($this->Model_tag->tag_slug_check($this->slug->url($tag)));
        // exit;

        $data['tag'] = $this->Model_tag->tag_slug_check($this->slug->url($tag));

        $data['stores'] = $this->Model_common->get_all_store();
        $data['store_langs'] = $this->Model_common->get_all_store_value();

        $land_id = empty($this->session->userdata('land_id')) ? redirect(base_url('select_land')) : $this->session->userdata('land_id') ;
        $store_id = empty($this->session->userdata('store_id')) ? redirect(base_url('select_land')) : $this->session->userdata('store_id') ;
        $store_lang_data = empty($this->session->userdata('store_language')) ? redirect(base_url('select_land')) : $this->session->userdata('store_language') ;
        
        $data['products'] = $this->Model_shopping_cart->all_product($store_lang_data, $land_id);
        $data['product_categories'] = $this->Model_shopping_cart->all_product_category($store_lang_data);
        $data['product_category_photo'] = $this->Model_shopping_cart->all_product_category_photo();

        $data['portfolios'] = $this->Model_portfolio->get_portfolio_data();

        $data['theme'] = $data['setting']['layout'];

        $this->load->view('layout/'.$data['setting']['layout'].'/view_header',$data);
		if($data['setting']['website_status_frontend'] === 'Active' || in_array($this->session->userdata('role'), ['Superadmin','Admin']))
        {
			$this->load->view('layout/'.$data['setting']['layout'].'/view_tag_detail',$data);
        } else {
            $this->load->view('view_maintenance', $data);
        }
		$this->load->view('layout/'.$data['setting']['layout'].'/view_footer',$data);
    }
}
