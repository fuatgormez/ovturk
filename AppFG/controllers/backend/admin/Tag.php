<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		if(!$this->session->userdata('id')) {
            redirect(base_url().'backend/admin/login');
            exit;
		}

		$this->load->library('slug');

		$this->load->model('backend/admin/Model_common');
		$this->load->model('backend/admin/Model_tag');
		
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
		$data['tags'] = $this->Model_tag->show();

		$this->load->view('backend/admin/view_header',$data);
		$this->load->view('backend/admin/view_tag',$data);
		$this->load->view('backend/admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');

			$this->session->set_flashdata('_name',$this->input->post('name'));
			$this->session->set_flashdata('_description',$this->input->post('description'));

			if($this->Model_tag->tag_slug_check($this->slug->url($this->input->post('name')))){
				$valid = 0;
				$error .= 'Bu etiket daha önceden acilmis lütfen kontrol ediniz!';
				$this->session->set_flashdata('error',$error);
				redirect(base_url().'backend/admin/tag/add');
			}	

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            $path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
		        }
		    } else {
		    	$valid = 1;
		        $error .= 'You must have to select a photo for featured photo<br>';
		    }

		    if($valid == 1) 
		    {
				$next_id = $this->Model_tag->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'tag-'.$ai_id.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/tag/'.$final_name );

		        $form_data = array(
					'name'  => $this->input->post('name'),
					'slug'  => $this->slug->url($this->input->post('name')),
					'description'   => $this->input->post('description'),
					'photo' => $final_name
	            );
	            $this->Model_tag->add($form_data);

		        $success = 'Tag is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'backend/admin/tag');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'backend/admin/tag/add');
		    }
            
        } else {
            
            $this->load->view('backend/admin/view_header',$data);
			$this->load->view('backend/admin/view_tag_add',$data);
			$this->load->view('backend/admin/view_footer');
        }
		
	}

	public function edit($id)
	{
		
    	// If there is no tag in this id, then redirect
    	$tot = $this->Model_tag->tag_check($id);
    	if(!$tot) {
    		redirect(base_url().'backend/admin/tag');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            $path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
		        }
		    }

		    if($valid == 1) 
		    {
		    	$data['tag'] = $this->Model_tag->get_tag($id);

		    	if($path == '') {
		    		$form_data = array(
						'name' => $this->input->post('name'),
						'slug'  => $this->slug->url($this->input->post('name')),
						'description'   => $this->input->post('description')
		            );
		            $this->Model_tag->update($id,$form_data);
				} else {
					unlink('./public/uploads/tag/'.$data['tag']['photo']);

					$final_name = 'tag-'.$id.'.'.$ext;
		        	move_uploaded_file( $path_tmp, './public/uploads/tag/'.$final_name );

		        	$form_data = array(
						'name'  => $this->input->post('name'),
						'slug'  => $this->slug->url($this->input->post('name')),
						'description'   => $this->input->post('description'),
						'photo' => $final_name
		            );
		            $this->Model_tag->update($id,$form_data);
				}
				
				$success = 'Tag is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'backend/admin/tag');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'backend/admin/tag/edit'.$id);
		    }
           
		} else {
			$data['tag'] = $this->Model_tag->get_tag($id);
	       	$this->load->view('backend/admin/view_header',$data);
			$this->load->view('backend/admin/view_tag_edit',$data);
			$this->load->view('backend/admin/view_footer');
		}

	}

	public function delete($id) 
	{
		// If there is no tag in this id, then redirect
    	$tot = $this->Model_tag->tag_check($id);
    	if(!$tot) {
    		redirect(base_url().'backend/admin/tag');
        	exit;
    	}

        $data['tag'] = $this->Model_tag->get_tag($id);
        if($data['tag']) {
            unlink('./public/uploads/tag/'.$data['tag']['photo']);
        }

        $this->Model_tag->delete($id);
        $success = 'Tag is deleted successfully';
		$this->session->set_flashdata('success',$success);
        redirect(base_url().'backend/admin/tag');
    }

}