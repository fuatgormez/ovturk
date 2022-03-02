<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_contact');
		$this->load->model('Model_portfolio');
		$this->load->model('Model_service');

		$this->load->library('cart');
		$this->lang->load('file', $this->session->userdata('site_language') ?? $this->session->userdata('store_language'));
		// $this->output->cache(60);
		// $store_lang_data = empty($this->session->userdata('store_language')) ? redirect(base_url()) : $this->session->userdata('store_language');


		$this->load->library('email');
		$this->load->library('facebook_pixel');

		if (base_url() === "https://www.irispicture.com/" || base_url() === "https://www.youririsfoto.nl/" || base_url() === "https://www.youririsfoto.com/" || base_url() === "https://www.youririsfoto.be/iptal") {
            $this->facebook_pixel->Contact(
            // $pixel_id, $token
            $this->Model_common->all_setting()['facebook_init'],
            $this->Model_common->all_setting()['facebook_access_token']
            );
        }

		// $config['protocol']  = 'smtp';
        // $config['smtp_host'] = 'ssl://smtp.strato.de';
        // $config['smtp_user'] = 'info@irispicture.com';
        // $config['smtp_pass'] = 'Baris=2020=1976'; //'z*y5vL20';
        // $config['smtp_port'] =  465;//587;
        // $config['mailtype']  = 'html';

		$config['protocol']  = 'smtp';
        $config['smtp_host'] = 'ssl://firewall.irispicture.com';
        $config['smtp_user'] = 'ip-manager';
        $config['smtp_pass'] = 'FE4Re&CU__8B)7t@xy-:';
        $config['smtp_port'] =  465;//587;
        $config['mailtype']  = 'html';
               
		$this->email->initialize($config);
	}

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_home'] = $this->Model_common->all_page_home();
		$data['page_contact'] = $this->Model_common->all_page_contact();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$data['services'] = $this->Model_service->all_service();
		$data['page_contact'] = $this->Model_common->all_page_contact();


		$data['stores'] = $this->Model_common->get_all_store();
		$data['store_langs'] = $this->Model_common->get_all_store_value();

		$data['theme'] = $data['setting']['layout'];

		$this->load->view('layout/' . $data['setting']['layout'] . '/view_header', $data);
		if($data['setting']['website_status_frontend'] === 'Active' || in_array($this->session->userdata('role'), ['Superadmin','Admin']))
        {
            $this->load->view('layout/'.$data['setting']['layout'].'/view_contact',$data);
        } else {
            $this->load->view('view_maintenance', $data);
        }
		$this->load->view('layout/' . $data['setting']['layout'] . '/view_footer', $data);
	}

	public function send_email()
	{

		$data['setting'] = $this->Model_common->all_setting();

		$error = '';

		if (isset($_POST['form_contact'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
			$this->form_validation->set_rules('message', 'Message', 'trim|required');
			$this->form_validation->set_error_delimiters('', '<br>');

			if ($this->form_validation->run() == FALSE) {
				$valid = 0;
				$error .= validation_errors();
			}

			if ($valid == 1) {
				$msg = '
            		<h3>Sender Information</h3>
					<b>Name: </b> ' . $_POST['name'] . '<br><br>
					<b>Phone: </b> ' . $_POST['phone'] . '<br><br>
					<b>Email: </b> ' . $_POST['email'] . '<br><br>
					<b>GGF. Order Nummer: </b> ' . $_POST['order_number'] . '<br><br>
					<b>Subject: </b> ' . $_POST['subject'] . '<br><br>
					<b>Message: </b> ' . $_POST['message'] . '
				';



				// // $config['protocol']    = 'smtp';
				// // $config['smtp_host']    = 'ssl://smtp.strato.de';
				// // $config['smtp_port']    = '25';
				// // $config['smtp_timeout'] = '7';
				// // $config['smtp_user']    = 'info@irispicture.com';
				// // $config['smtp_pass']    = 'Baris=2020=1976';
				// // $config['charset']    = 'utf-8';
				// // $config['newline']    = "\r\n";
				// // $config['mailtype'] = 'text'; 
				// // $config['validation'] = TRUE; 


				$this->email->from($data['setting']['send_email_from']);
				$this->email->to($data['setting']['receive_email_to']);
				// $this->email->to($_POST['email']);
				$this->email->reply_to($_POST['email'], $_POST['name']);
				$this->email->subject('Contact Form Email');
				$this->email->message($msg);
				$this->email->set_mailtype("html");
				$this->email->send();


				//$success = 'Thank you for sending the email. We will contact you shortly.';
				$this->session->set_flashdata('success', $this->lang->line('contact_form_send_success'));
			} else {
				$this->session->set_flashdata('error', $error);
			}

			redirect(base_url() . 'contact');
		} else {

			redirect(base_url() . 'contact');
		}
	}
}
