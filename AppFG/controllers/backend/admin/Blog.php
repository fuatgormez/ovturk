<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		if(!$this->session->userdata('id')) {
            redirect(base_url().'backend/admin/login');
            exit;
		}
		$this->load->model('backend/admin/Model_common');
		$this->load->model('backend/admin/Model_blog');
		$this->load->model('backend/admin/Model_tag');

		$this->load->library('slug');

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
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['blog'] = $this->Model_blog->show();

		$this->load->view('backend/admin/view_header',$data);
		$this->load->view('backend/admin/view_blog',$data);
		$this->load->view('backend/admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('short_content', 'Short Content', 'trim|required');
			$this->form_validation->set_rules('content', 'Content', 'trim|required');

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
		    	$valid = 0;
		        $error .= 'You must have to select a photo for featured photo<br>';
		    }

		   
		    if($valid == 1) 
		    {
				$next_id = $this->Model_blog->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'blog-'.$ai_id.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/blog_photos/'.$final_name );

		        $form_data = array(
					'name'             => $_POST['name'],
					'slug'             => $this->slug->url($_POST['name']),
					'short_content'    => $_POST['short_content'],
					'content'          => $_POST['content'],
					'category_id'      => $_POST['category_id'],
					'photo'            => $final_name,
					'meta_title'       => $_POST['meta_title'],
					'meta_keyword'     => $_POST['meta_keyword'],
					'meta_description' => $_POST['meta_description'],
					'tag' => json_encode($this->input->post('tag'))
	            );
	            $this->Model_blog->add($form_data);


	            if( isset($_FILES['photos']["name"]) && isset($_FILES['photos']["tmp_name"]) )
		        {
		            $photos = array();
		            $photos = $_FILES['photos']["name"];
		            $photos = array_values(array_filter($photos));

		            $photos_temp = array();
		            $photos_temp = $_FILES['photos']["tmp_name"];
		            $photos_temp = array_values(array_filter($photos_temp));

		            $next_id1 = $this->Model_blog->get_auto_increment_id1();
					foreach ($next_id1 as $row1) {
			            $ai_id1 = $row1['Auto_increment'];
			        }

		            $z = $ai_id1;

		            $m=0;
		            $final_names = array();
		            for($i=0;$i<count($photos);$i++)
		            {

		            	$ext = pathinfo( $photos[$i], PATHINFO_EXTENSION );
				        $ext_check = $this->Model_common->extension_check_photo($ext);
				        if($ext_check == FALSE) {
				        	// Nothing to do, just skip
				        } else {
				        	$final_names[$m] = $z.'.'.$ext;
		                    move_uploaded_file($photos_temp[$i],"./public/uploads/blog_photos/".$final_names[$m]);
		                    $m++;
		                    $z++;
				        }
		            }
		        }

		        for($i=0;$i<count($final_names);$i++)
		        {
		        	$form_data = array(
						'blog_id' => $ai_id,
						'photo'        => $final_names[$i]
		            );
		            $this->Model_blog->add_photos($form_data);
		        }


		        $success = 'Blog is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'backend/admin/blog');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'backend/admin/blog/add');
		    }            
        } else {
            $data['all_photo_category'] = $this->Model_blog->get_all_photo_category();
			$data['tags'] = $this->Model_tag->show();
            $this->load->view('backend/admin/view_header',$data);
			$this->load->view('backend/admin/view_blog_add',$data);
			$this->load->view('backend/admin/view_footer');
        }
		
	}

	public function edit($id)
	{
		
    	// If there is no service in this id, then redirect
    	$tot = $this->Model_blog->blog_check($id);
    	if(!$tot) {
    		redirect(base_url().'backend/admin/blog');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('short_content', 'Short Content', 'trim|required');
			$this->form_validation->set_rules('content', 'Content', 'trim|required');

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
		    	$data['blog'] = $this->Model_blog->getData($id);

                $form_data = array(
                    'name'             => $_POST['name'],
                    'slug'             => $this->slug->url($_POST['name']),
                    'short_content'    => $_POST['short_content'],
                    'content'          => $_POST['content'],
                    'category_id'      => $_POST['category_id'],
                    'meta_title'       => $_POST['meta_title'],
                    'meta_keyword'     => $_POST['meta_keyword'],
                    'meta_description' => $_POST['meta_description'],
					'tag' => json_encode($this->input->post('tag'))
                );

		    	if($path == '') {
		            $this->Model_blog->update($id,$form_data);
				}
				else {
					unlink('./public/uploads/blog_photos/'.$data['blog']['photo']);

					$final_name = 'blog-'.$id.'.'.$ext;
		        	move_uploaded_file( $path_tmp, './public/uploads/blog_photos/'.$final_name );

		        	$form_data['photo'] = $final_name;

		            $this->Model_blog->update($id,$form_data);
				}

				if( isset($_FILES['photos']["name"]) && isset($_FILES['photos']["tmp_name"]) )
		        {
		            $photos = array();
		            $photos = $_FILES['photos']["name"];
		            $photos = array_values(array_filter($photos));

		            $photos_temp = array();
		            $photos_temp = $_FILES['photos']["tmp_name"];
		            $photos_temp = array_values(array_filter($photos_temp));

		            $next_id1 = $this->Model_blog->get_auto_increment_id1();
					foreach ($next_id1 as $row1) {
			            $ai_id1 = $row1['Auto_increment'];
			        }

		            $z = $ai_id1;

		            $m=0;
		            $final_names = array();
		            for($i=0;$i<count($photos);$i++)
		            {

		            	$ext = pathinfo( $photos[$i], PATHINFO_EXTENSION );
				        $ext_check = $this->Model_common->extension_check_photo($ext);
				        if($ext_check == FALSE) {
				        	// Nothing to do, just skip
				        } else {
				        	$final_names[$m] = $z.'.'.$ext;
		                    move_uploaded_file($photos_temp[$i],"./public/uploads/blog_photos/".$final_names[$m]);
		                    $m++;
		                    $z++;
				        }
		            }
		        }

		        for($i=0;$i<count($final_names);$i++)
		        {
		        	$form_data = array(
						'blog_id' => $id,
						'photo'        => $final_names[$i]
		            );
		            $this->Model_blog->add_photos($form_data);
		        }

				$success = 'Blog is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'backend/admin/blog');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'backend/admin/blog/edit/'.$id);
		    }
           
		} else {
			$data['blog'] = $this->Model_blog->getData($id);
			$data['all_photo_category'] = $this->Model_blog->get_all_photo_category();
			$data['all_photos_by_id'] = $this->Model_blog->get_all_photos_by_category_id($id);
			$data['tags'] = $this->Model_tag->show();
	       	$this->load->view('backend/admin/view_header',$data);
			$this->load->view('backend/admin/view_blog_edit',$data);
			$this->load->view('backend/admin/view_footer');
		}

	}

	public function delete($id) 
	{
    	$tot = $this->Model_blog->blog_check($id);
    	if(!$tot) {
    		redirect(base_url().'backend/admin/blog');
        	exit;
    	}

        $data['blog'] = $this->Model_blog->getData($id);
        if($data['blog']) {
            unlink('./public/uploads/blog_photos/'.$data['blog']['photo']);
        }

        $blog_photos = $this->Model_blog->get_all_photos_by_category_id($id);
        foreach($blog_photos as $row) {
			unlink('./public/uploads/blog_photos/'.$row['photo']);
        }

        $this->Model_blog->delete($id);
        $this->Model_blog->delete_photos($id);

        $success = 'Blog is deleted successfully';
        $this->session->set_flashdata('success',$success);
        redirect(base_url().'backend/admin/blog');
    }

    public function single_photo_delete($photo_id=0,$blog_id=0) {

  		$blog_photo = $this->Model_blog->blog_photo_by_id($photo_id);
  		unlink('./public/uploads/blog_photos/'.$blog_photo['photo']);

  		$this->Model_blog->delete_blog_photo($photo_id);

  		redirect(base_url().'backend/admin/blog/edit/'.$blog_id);

    }
    
	public function single_photo_edit() {
  		exit(json_encode($this->Model_blog->blog_photo_by_id($this->input->post('photo_id'))));
    }
	
	public function single_photo_update() {
  		exit(json_encode($this->Model_blog->update_photo($this->input->post('photo_id'),array('title' => $this->input->post('photo_title')))));
    }

}