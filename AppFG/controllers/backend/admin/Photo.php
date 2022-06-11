<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Photo extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		if(!$this->session->userdata('id')) {
            redirect(base_url().'backend/admin/login');
            exit;
		}

		$this->load->model('backend/admin/Model_common');
		$this->load->model('backend/admin/Model_photo');
		
		$data['setting'] = $this->Model_common->get_setting_data();

		if (!in_array($this->session->userdata('role'), ['Superadmin'])) {
			if ($data['setting']['website_status_backend'] === "Passive") {
				$data['message'] = $data['setting']['website_status_backend_message'];
				redirect(base_url('backend/info'));
			}
		}
		
    }

	public function index($tag='')
	{
		if($tag){
			$data['photo'] = $this->Model_photo->show_by_tag($tag);
		} else {
			$data['photo'] = $this->Model_photo->show();
		}

		$this->load->view('backend/admin/view_header',$data);
		$this->load->view('backend/admin/view_photo',$data);
		$this->load->view('backend/admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

	if(isset($_POST['form1'])) {
		if (isset($_FILES['photos']["name"]) && isset($_FILES['photos']["tmp_name"])) {
			$photos = array();
			$photos = $_FILES['photos']["name"];
			$photos = array_values(array_filter($photos));

			$photos_temp = array();
			$photos_temp = $_FILES['photos']["tmp_name"];
			$photos_temp = array_values(array_filter($photos_temp));

			$next_id1 = $this->Model_photo->get_auto_increment_id();
			foreach ($next_id1 as $row1) {
				$ai_id = $row1['Auto_increment'];
			}

			$z = $ai_id;
			
			$m = 0;
			$final_names = array();
			for ($i = 0; $i < count($photos); $i++) {

				$ext = pathinfo($photos[$i], PATHINFO_EXTENSION);
				$ext_check = $this->Model_common->extension_check_photo($ext);
				if ($ext_check == FALSE) {
					// Nothing to do, just skip
				} else {
					$final_names[$m] = $z . '.' . $ext;
					move_uploaded_file($photos_temp[$i], "./public/uploads/gallery/" . $final_names[$m]);
					$m++;
					$z++;
				}
			}
		}

		for ($i = 0; $i < count($final_names); $i++) {
			$form_data = array(
				'photo_name' => $final_names[$i],
				'tag' => $this->input->post('tag'),
				'favorite' => $this->input->post('favorite')
			);
			$this->Model_photo->add($form_data);
		}

		$success = 'Photo(s) is added successfully!';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'backend/admin/photo');

	} else {            
		$this->load->view('backend/admin/view_header',$data);
		$this->load->view('backend/admin/view_photo_add',$data);
		$this->load->view('backend/admin/view_footer');
	}

		
	}

	public function add_orijinal()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

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
		    	$valid = 0;
		        $error .= 'You must have to select a photo for featured photo<br>';
		    }

		    if($valid == 1) 
		    {
				$next_id = $this->Model_photo->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'photo-'.$ai_id.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/gallery/'.$final_name );

		        $form_data = array(
					'photo_name' => $final_name
	            );
	            $this->Model_photo->add($form_data);

		        $success = 'Photo is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'backend/admin/photo');

		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'backend/admin/photo/add');
		    }
            
        } else {            
            $this->load->view('backend/admin/view_header',$data);
			$this->load->view('backend/admin/view_photo_add',$data);
			$this->load->view('backend/admin/view_footer');
        }
		
	}

	public function edit($id)
	{
		
    	// If there is no photo in this id, then redirect
    	$tot = $this->Model_photo->photo_check($id);
    	if(!$tot) {
    		redirect(base_url().'backend/admin/photo');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

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
		    	$valid = 0;
		        $error .= 'You must have to select a photo<br>';
		    }

		    if($valid == 1)
		    {
		    	$data['photo'] = $this->Model_photo->getData($id);

				unlink('./public/uploads/'.$data['photo']['photo_name']);

				$final_name = 'photo-'.$id.'.'.$ext;
	        	move_uploaded_file( $path_tmp, './public/uploads/gallery/'.$final_name );

	        	$form_data = array(
					'photo_name' => $final_name,
					'tag' => $this->input->post('tag'),
					'favorite' => $this->input->post('favorite')
	            );
	            $this->Model_photo->update($id,$form_data);

				$success = 'Photo is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'backend/admin/photo');
		    }
		    else
		    {
				$form_data = array(
					'tag' => $this->input->post('tag'),
					'favorite' => $this->input->post('favorite')
	            );
	            $this->Model_photo->update($id,$form_data);
				
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'backend/admin/photo/edit/'.$id);
		    }
           
		} else {
			$data['photo'] = $this->Model_photo->getData($id);
	       	$this->load->view('backend/admin/view_header',$data);
			$this->load->view('backend/admin/view_photo_edit',$data);
			$this->load->view('backend/admin/view_footer');
		}

	}

	public function delete($id) 
	{
		// If there is no photo in this id, then redirect
    	$tot = $this->Model_photo->photo_check($id);
    	if(!$tot) {
    		redirect(base_url().'backend/admin/photo');
        	exit;
    	}

        $data['photo'] = $this->Model_photo->getData($id);
        if($data['photo']) {
            unlink('./public/uploads/gallery/'.$data['photo']['photo_name']);
        }

        $this->Model_photo->delete($id);
        $success = 'Photo is deleted successfully';
		$this->session->set_flashdata('success',$success);
        redirect(base_url().'backend/admin/photo');
    }

	public function favorite($id=0)
	{
		try {
			$form_data = array(
				'favorite' => intval($this->input->post('fav')) == 1 ? 0 : 1
			);
			$this->Model_photo->update($id,$form_data);

			exit(json_encode(array('status' => true,'success' => 'Favorite is updated successfully.')));
		} catch (Exception $e) {
			exit(json_encode(array('status' => false, 'Message' => $e->getMessage())));
		}
	}

}