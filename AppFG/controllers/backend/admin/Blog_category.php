<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_category extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		if(!$this->session->userdata('id')) {
            redirect(base_url().'backend/admin/login');
            exit;
		}
		
		$this->load->model('backend/admin/Model_common');
		$this->load->model('backend/admin/Model_blog_category');

		$data['setting'] = $this->Model_common->get_setting_data();

		if (!in_array($this->session->userdata('role'), ['Superadmin'])) {
			if ($data['setting']['website_status_backend'] === "Passive") {
				$data['message'] = $data['setting']['website_status_backend_message'];
				redirect(base_url('backend/info'));
			}
		}
		
    }

	public function index()
	{
		$data['blog_category'] = $this->Model_blog_category->show();

		$this->load->view('backend/admin/view_header',$data);
		$this->load->view('backend/admin/view_blog_category',$data);
		$this->load->view('backend/admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error = validation_errors();
            }

		    if($valid == 1) 
		    {
				
		        $form_data = array(
					'category_name'=> $_POST['category_name'],
					'status'       => $_POST['status']
	            );
	            $this->Model_blog_category->add($form_data);

		        $success = 'Blog category is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'backend/admin/blog_category');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'backend/admin/blog_category/add');
		    }
            
        } else {
            
            $this->load->view('backend/admin/view_header',$data);
			$this->load->view('backend/admin/view_blog_category_add',$data);
			$this->load->view('backend/admin/view_footer');
        }
		
	}

	public function edit($id)
	{
    	$tot = $this->Model_blog_category->blog_category_check($id);
    	if(!$tot) {
    		redirect(base_url().'backend/admin/blog_category');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error = validation_errors();
            } else {

            	// Duplicate Category Checking
            	$data['blog_category'] = $this->Model_blog_category->getData($id);
            	$total = $this->Model_blog_category->duplicate_check($_POST['category_name'],$data['blog_category']['category_name']);				
		    	if($total) {
		    		$valid = 0;
		        	$error = 'Category name already exists';
		    	}
            }

		    if($valid == 1) 
		    {
	    		$form_data = array(
					'category_name'=> $_POST['category_name'],
					'status'       => $_POST['status']
	            );
	            $this->Model_blog_category->update($id,$form_data);
				
				$success = 'Blog Category is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'backend/admin/blog_category');
		    }
		    else 
		    {
				$this->session->set_flashdata('error',$error);
				redirect(base_url().'backend/admin/blog_category/add');
		    }
           
		} else {
			$data['blog_category'] = $this->Model_blog_category->getData($id);
			$this->load->view('backend/admin/view_header',$data);
			$this->load->view('backend/admin/view_blog_category_edit',$data);
			$this->load->view('backend/admin/view_footer');
		}

	}

	public function delete($id) 
	{
    	$tot = $this->Model_blog_category->blog_category_check($id);
    	if(!$tot) {
    		redirect(base_url().'backend/admin/blog_category');
        	exit;
    	}


    	$result = $this->Model_blog_category->getData1($id);
		foreach ($result as $row) {
			$result1 = $this->Model_blog_category->show_blog_by_id($row['id']);
			foreach ($result1 as $row1) {
				$photo = $row1['photo'];
			}
			if($photo!='') {
				unlink('./public/uploads/'.$photo);
			}
			$result1 = $this->Model_blog_category->show_blog_photo_by_blog_id($row['id']);
			foreach ($result1 as $row1) {
				$photo = $row1['photo'];
				unlink('./public/uploads/blog_photos/'.$photo);
			}

			$this->Model_blog_category->delete1($row['id']);
			$this->Model_blog_category->delete2($row['id']);
		}
        $this->Model_blog_category->delete($id);
        
        $success = 'Blog category is deleted successfully';
        $this->session->set_flashdata('success',$success);
        redirect(base_url().'backend/admin/blog_category');
    }

}