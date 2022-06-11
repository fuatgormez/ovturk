<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_portfolio');
        $this->load->model('Model_service');
		$this->load->model('shop/Model_shopping_cart');

		$this->load->library('cart');
		$this->lang->load('file', $this->session->userdata('site_language') ?? $this->session->userdata('store_language'));
        // $this->output->cache(60);

        // $store_lang_data = empty($this->session->userdata('store_language')) ? redirect(base_url()) : $this->session->userdata('store_language') ;
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_home'] = $this->Model_common->all_page_home();
		$data['page_portfolio'] = $this->Model_common->all_page_portfolio();
		$data['comment'] = $this->Model_common->all_comment();
		$data['socials'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
        $data['page_contact'] = $this->Model_common->all_page_contact();
		$data['portfolio_category'] = $this->Model_portfolio->get_portfolio_category();
		$data['portfolios'] = $this->Model_portfolio->get_portfolio_data();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

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
			$this->load->view('layout/'.$data['setting']['layout'].'/view_portfolio',$data);
        } else {
            $this->load->view('view_maintenance', $data);
        }
		$this->load->view('layout/'.$data['setting']['layout'].'/view_footer',$data);
	}

	public function view($slug,$id)
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_home'] = $this->Model_common->all_page_home();
		$data['page_portfolio'] = $this->Model_common->all_page_portfolio();
		$data['comment'] = $this->Model_common->all_comment();
		$data['socials'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
        $data['services'] = $this->Model_service->all_service();
		$data['portfolio_order_by_name'] = $this->Model_portfolio->get_portfolio_data_order_by_name();
		$data['portfolio'] = $this->Model_portfolio->get_portfolio_detail($id);
		$data['portfolio_categories'] = $this->Model_portfolio->get_portfolio_category();
		$data['portfolio_all_photos'] = $this->Model_portfolio->get_portfolio_all_photo();
		$data['portfolio_photos'] = $this->Model_portfolio->get_portfolio_photo($id);
		$data['portfolio_photo_total'] = $this->Model_portfolio->get_portfolio_photo_number($id);
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$data['tags'] = $this->Model_common->all_tag();

		$land_id = empty($this->session->userdata('land_id')) ? redirect(base_url('select_land')) : $this->session->userdata('land_id') ;
        $store_id = empty($this->session->userdata('store_id')) ? redirect(base_url('select_land')) : $this->session->userdata('store_id') ;
        $store_lang_data = empty($this->session->userdata('store_language')) ? redirect(base_url('select_land')) : $this->session->userdata('store_language') ;
        
        $data['products'] = $this->Model_shopping_cart->all_product($store_lang_data, $land_id);
        $data['product_categories'] = $this->Model_shopping_cart->all_product_category($store_lang_data);
        $data['product_category_photo'] = $this->Model_shopping_cart->all_product_category_photo();

		foreach($data['portfolio_categories'] as $portfolio_category) {
			if($data['portfolio']['category_id'] == $portfolio_category['category_id']) {
				$data['portfolio_category'] = $portfolio_category;
				break;
			}
		}

		$data['theme'] = $data['setting']['layout'];

		if(count($data['portfolio']) < 1)
			redirect(base_url());


		$this->load->view('layout/'.$data['setting']['layout'].'/view_header',$data);
		if($data['setting']['website_status_frontend'] === 'Active' || in_array($this->session->userdata('role'), ['Superadmin','Admin']))
        {
			$this->load->view('layout/'.$data['setting']['layout'].'/view_portfolio_detail',$data);
        } else {
            $this->load->view('view_maintenance', $data);
        }
		$this->load->view('layout/'.$data['setting']['layout'].'/view_footer',$data);
	}
	
	public function gallery()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_home'] = $this->Model_common->all_page_home();
		$data['page_portfolio'] = $this->Model_common->all_page_portfolio();
		$data['comment'] = $this->Model_common->all_comment();
		$data['socials'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
        $data['services'] = $this->Model_service->all_service();
		$data['portfolio_categories'] = $this->Model_portfolio->get_portfolio_category();
		$data['portfolio_all_photos'] = $this->Model_portfolio->get_portfolio_all_photo();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$data['tags'] = $this->Model_common->all_tag();

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
			$this->load->view('layout/'.$data['setting']['layout'].'/view_portfolio_gallery',$data);
        } else {
            $this->load->view('view_maintenance', $data);
        }
		$this->load->view('layout/'.$data['setting']['layout'].'/view_footer',$data);
	}

	public function send_email() 
	{

		$data['setting'] = $this->Model_common->all_setting();

		$error = '';

		if(isset($_POST['form_portfolio'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
			$this->form_validation->set_rules('message', 'Message', 'trim|required');
			$this->form_validation->set_error_delimiters('', '<br>');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

		    if($valid == 1)
		    {
				$msg = '
            		<h3>Sender Information</h3>
					<b>Name: </b> '.$_POST['name'].'<br><br>
					<b>Phone: </b> '.$_POST['phone'].'<br><br>
					<b>Email: </b> '.$_POST['email'].'<br><br>
					<b>Portfolio Name: </b> '.$_POST['portfolio'].'<br><br>
					<b>Message: </b> '.$_POST['message'].'
				';
            	$this->load->library('email');

				$this->email->from($data['setting']['send_email_from']);
				$this->email->to($data['setting']['receive_email_to']);

				$this->email->subject('Portfolio Page Email');
				$this->email->message($msg);

				$this->email->set_mailtype("html");

				$this->email->send();

		        $success = 'Thank you for sending the email. We will reply you shortly.';
        		$this->session->set_flashdata('success',$success);

		    } 
		    else
		    {
        		$this->session->set_flashdata('error',$error);
		    }

			redirect($this->agent->referrer());
            
        } else {
            
            redirect($this->agent->referrer());
        }
	}
}
