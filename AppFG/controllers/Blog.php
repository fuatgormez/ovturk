<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_blog');
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
		$data['page_blog'] = $this->Model_common->all_page_blog();
		$data['comment'] = $this->Model_common->all_comment();
		$data['socials'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
        $data['page_contact'] = $this->Model_common->all_page_contact();

		$data['blog_category'] = $this->Model_blog->get_blog_category();
		$data['blogs'] = $this->Model_blog->get_blog_data();
		$data['blog_footer'] = $this->Model_blog->get_blog_data();

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
			$this->load->view('layout/'.$data['setting']['layout'].'/view_blog',$data);
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
		$data['page_blog'] = $this->Model_common->all_page_blog();
		$data['comment'] = $this->Model_common->all_comment();
		$data['socials'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
        $data['services'] = $this->Model_service->all_service();
		$data['blog'] = $this->Model_blog->get_blog_detail($id);
		$data['blog_categories'] = $this->Model_blog->get_blog_category();
		$data['blog_all_photos'] = $this->Model_blog->get_blog_all_photo();
		$data['blog_photos'] = $this->Model_blog->get_blog_photo($id);
		$data['blog_photo_total'] = $this->Model_blog->get_blog_photo_number($id);
		$data['blog_footer'] = $this->Model_blog->get_blog_data();

		$data['tags'] = $this->Model_common->all_tag();

		$land_id = empty($this->session->userdata('land_id')) ? redirect(base_url('select_land')) : $this->session->userdata('land_id') ;
        $store_id = empty($this->session->userdata('store_id')) ? redirect(base_url('select_land')) : $this->session->userdata('store_id') ;
        $store_lang_data = empty($this->session->userdata('store_language')) ? redirect(base_url('select_land')) : $this->session->userdata('store_language') ;
        
        $data['products'] = $this->Model_shopping_cart->all_product($store_lang_data, $land_id);
        $data['product_categories'] = $this->Model_shopping_cart->all_product_category($store_lang_data);
        $data['product_category_photo'] = $this->Model_shopping_cart->all_product_category_photo();

		foreach($data['blog_categories'] as $blog_category) {
			if($data['blog']['category_id'] == $blog_category['category_id']) {
				$data['blog_category'] = $blog_category;
				break;
			}
		}

		$data['theme'] = $data['setting']['layout'];

		if(count($data['blog']) < 1)
			redirect(base_url());


		$this->load->view('layout/'.$data['setting']['layout'].'/view_header',$data);
		if($data['setting']['website_status_frontend'] === 'Active' || in_array($this->session->userdata('role'), ['Superadmin','Admin']))
        {
			$this->load->view('layout/'.$data['setting']['layout'].'/view_blog_detail',$data);
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
		$data['page_blog'] = $this->Model_common->all_page_blog();
		$data['comment'] = $this->Model_common->all_comment();
		$data['socials'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
        $data['services'] = $this->Model_service->all_service();
		$data['blog_categories'] = $this->Model_blog->get_blog_category();
		$data['blog_all_photos'] = $this->Model_blog->get_blog_all_photo();
		$data['blog_footer'] = $this->Model_blog->get_blog_data();

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
			$this->load->view('layout/'.$data['setting']['layout'].'/view_blog_gallery',$data);
        } else {
            $this->load->view('view_maintenance', $data);
        }
		$this->load->view('layout/'.$data['setting']['layout'].'/view_footer',$data);
	}

	public function send_email() 
	{

		$data['setting'] = $this->Model_common->all_setting();

		$error = '';

		if(isset($_POST['form_blog'])) {

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
