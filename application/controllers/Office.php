<?php

if(!defined('BASEPATH'))
	exit('No direct script access allowed');

class Office extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->library('Ckeditor');
		$this->load->library('Ckfinder');
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->helper('file');
		$this->load->helper('form');
		$this->load->model('Office_model');
		$this->load->library('pagination');
		$this->load->helper('html');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div>', '</div>');

		$config['upload_path']          = './img/news/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $config['overwrite']			= TRUE;
        $config['file_name']			= $this->input->post('title');
		
		$this->load->library('upload', $config);

		$this->ckeditor->basePath = base_url().'/assets/ckeditor/';
		$this->ckeditor->config['toolbar'] = array(
		                array( 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList', '-', 'Blockquote','-', 'Subscript', '-', 'Superscript', '-', 'Table','-', 'Maximize','-','Indent','-','Styles','-','Format','-','Font' ));
		$this->ckeditor->config['language'] = 'en';
		$this->ckeditor->config['height'] = '300px';            

		//Add Ckfinder to Ckeditor
		$this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/'); 

	}

	public function index() {
		
		if ($this->session->userdata('o_logged_in') == TRUE) {
			
			$this->load->view('common/header');
			$this->load->view('topnav/nav_office');
			$this->load->view('agri/office/office_view');
			$this->load->view('common/footer');

		}else {

			redirect('User');

		}

	}

	public function two() {

		if($this->session->userdata('t_logged_in') == TRUE or $this->session->userdata('s_logged_in') == TRUE) {

			$office = $this->session->userdata('office');
			$this->form_validation->set_rules('title','News Headline','required');
			$this->form_validation->set_rules('dsc','News Discription','required');
			$this->form_validation->set_rules('office','Office','required');
			if($this->form_validation->run() == FALSE) {
				$this->load->view('common/header');
				if($office == '6') {
					$this->load->view('topnav/nav_office');
				}else {
					$this->load->view('topnav/nav_office2');
				}
				$this->load->view('agri/office/two_news');
				$this->load->view('common/footer');
			}else {
				if (!$this->upload->do_upload('userfile')) {
		            $error['error'] = $this->upload->display_errors();
		            $news = array(
		            			'news_title' => $this->input->post('title'),
		            			'news_dsc' => $this->input->post('dsc'),
		            			'office_id' => $office
		            		);
		            $this->Office_model->news_insert($news);
		            redirect('Office/all_news');
		        }else {
		            $data = array('upload_data' => $this->upload->data());
					$news = array(
								'news_title' => $this->input->post('title'),
								'news_dsc' => $this->input->post('dsc'),
								'office_id' => $office,
								'img' => $data['upload_data']['file_name']
							);
					$this->Office_model->news_insert($news);
					redirect('Office/all_news');
				}
			}

		}else {

			redirect('User');

		}
	}

	public function twos() {

		if($this->session->userdata('t_logged_in') == TRUE or $this->session->userdata('s_logged_in') == TRUE) {

			$office = $this->session->userdata('office');
			$this->form_validation->set_rules('ser_dsc','Service Discription','required');
			$this->form_validation->set_rules('office','Office','required');
			if($this->form_validation->run() == FALSE) {
				$this->load->view('common/header');
				if($office == '6') {
					$this->load->view('topnav/nav_office');
				}else {
					$this->load->view('topnav/nav_office2');
				}
				$this->load->view('agri/office/two_ser');
				$this->load->view('common/footer');
			}else {
				$service = array (
								'ser_dsc' => $this->input->post('ser_dsc'),
								'office_id' => $office
							);
				$this->Office_model->ser_insert($service);
				redirect('Office/all_service');
			}

		}else {

			redirect('User');

		}
	}

	public function three() {

		if($this->session->userdata('th_logged_in') == TRUE or $this->session->userdata('s_logged_in') == TRUE) {

			$office = $this->session->userdata('office');
			$this->form_validation->set_rules('title','News Headline','required');
			$this->form_validation->set_rules('dsc','News Discription','required');
			$this->form_validation->set_rules('office','Office','required');
			if($this->form_validation->run() == FALSE) {
				$this->load->view('common/header');
				if($office == '6') {
					$this->load->view('topnav/nav_office');
				}else {
					$this->load->view('topnav/nav_office3');
				}
				$this->load->view('agri/office/three_news');
				$this->load->view('common/footer');
			}else {
				if (!$this->upload->do_upload('userfile')) {
		            $error['error'] = $this->upload->display_errors();
		            $news = array(
		            			'news_title' => $this->input->post('title'),
		            			'news_dsc' => $this->input->post('dsc'),
		            			'office_id' => $office
		            		);
		            $this->Office_model->news_insert($news);
		            redirect('Office/all_news');
		        }else {
		            $data = array('upload_data' => $this->upload->data());
					$news = array(
								'news_title' => $this->input->post('title'),
								'news_dsc' => $this->input->post('dsc'),
								'office_id' => $office,
								'img' => $data['upload_data']['file_name']
							);
					$this->Office_model->news_insert($news);
					redirect('Office/all_news');
				}
			}

		}else {

			redirect('User');

		}
	}

	public function threes() {

		if($this->session->userdata('th_logged_in') == TRUE or $this->session->userdata('s_logged_in') == TRUE) {

			$office = $this->session->userdata('office');
			$this->form_validation->set_rules('ser_dsc','Service Discription','required');
			$this->form_validation->set_rules('office','Office','required');
			if($this->form_validation->run() == FALSE) {
				$this->load->view('common/header');
				if($office == '6') {
					$this->load->view('topnav/nav_office');
				}else {
					$this->load->view('topnav/nav_office3');
				}
				$this->load->view('agri/office/three_ser');
				$this->load->view('common/footer');
			}else {
				$service = array (
								'ser_dsc' => $this->input->post('ser_dsc'),
								'office_id' => $office
							);
				$this->Office_model->ser_insert($service);
				redirect('Office/all_service');
			}

		}else {

			redirect('User');

		}
	}

	public function four() {
		
		if ($this->session->userdata('f_logged_in') == TRUE) {
			
			$this->load->view('');
			$this->load->view('');
			$this->load->view('');
			$this->load->view('');

		}else {

			redirect('User');

		}	

	}

	public function five() {
		
		if ($this->session->userdata('fi_logged_in') == TRUE) {
			
			$this->load->view('');
			$this->load->view('');
			$this->load->view('');
			$this->load->view('');

		}else {

			redirect('User');

		}		

	}

	public function sixn() {
		
		if ($this->session->userdata('s_logged_in') == TRUE) {

			$data['office'] = $this->Office_model->get_office();
			$this->form_validation->set_rules('title','News Headline','required');
			$this->form_validation->set_rules('dsc','News Discription','required');
			$this->form_validation->set_rules('office','Office','required');
			if($this->form_validation->run() == FALSE) {
				$this->load->view('common/header');
				$this->load->view('topnav/nav_office');
				$this->load->view('agri/office/sixn_view',$data);
				$this->load->view('common/footer');
			}else {
				if (!$this->upload->do_upload('userfile')) {
		            $error['error'] = $this->upload->display_errors();
		            $news = array(
		            			'news_title' => $this->input->post('title'),
		            			'news_dsc' => $this->input->post('dsc'),
		            			'office_id' => $this->input->post('office')
		            		);
		            $this->Office_model->news_insert($news);
		            redirect('Office/all_news');
		        }else {
		            $data = array('upload_data' => $this->upload->data());
					$news = array(
								'news_title' => $this->input->post('title'),
								'news_dsc' => $this->input->post('dsc'),
								'office_id' => $this->input->post('office'),
								'img' => $data['upload_data']['file_name']
							);
					$this->Office_model->news_insert($news);
					redirect('Office/all_news');
				}
			}
				
		}else {

			redirect('User');

		}

	}

		public function sixs() {

			if ($this->session->userdata('s_logged_in') == TRUE) {

				$data['office'] = $this->Office_model->get_office();
				$this->form_validation->set_rules('ser_dsc','Service Discription','required');
				$this->form_validation->set_rules('office','Office','required');
				if($this->form_validation->run() == FALSE) {
					$this->load->view('common/header');
					$this->load->view('topnav/nav_office');
					$this->load->view('agri/office/sixs_view',$data);
					$this->load->view('common/footer');
				}else {
					$service = array (
									'ser_dsc' => $this->input->post('ser_dsc'),
									'office_id' => $this->input->post('office')
								);
					$this->Office_model->ser_insert($service);
					redirect('Office/all_service');
				}

			}else {

				redirect('User');
			}

		}

		public function sixm() {

			if ($this->session->userdata('s_logged_in') == TRUE) {

				$data['msg'] = $this->Office_model->get_msg();
				$this->load->view('common/header');
				$this->load->view('topnav/nav_office');
				$this->load->view('agri/office/sixm_view',$data);
				$this->load->view('common/footer');

			}else {

				redirect('User');

			}

		}

		public function sixa() {

			if ($this->session->userdata('s_logged_in') == TRUE) {

				$data['abo'] = $this->Office_model->get_about();
				$this->load->view('common/header');
				$this->load->view('topnav/nav_office');
				$this->load->view('agri/office/sixa_view',$data);
				$this->load->view('common/footer');

			}else {

				redirect('User');

			}

		}

		public function all_news() {

			//pagination settings
			$config['base_url'] = site_url('Office/all_news');
			$config['total_rows'] = $this->db->count_all('news');
			$config['per_page'] = "5";
			$config["uri_segment"] = 3;
			$choice = $config["total_rows"]/$config["per_page"];
			$config["num_links"] = floor($choice);

			// integrate bootstrap pagination
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '«';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = '»';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);

			$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			
			$data['office'] = $this->Office_model->get_office();
			$data['news'] = $this->Office_model->get_news($config["per_page"], $data['page']);
			$data['pagination'] = $this->pagination->create_links(); 

			$office = $this->session->userdata('office');

			$this->load->view('common/header');
			if($office == '1') {
				$this->load->view('topnav/nav_office1');
			}elseif(($office == '2' || $office == '12') || ($office == '22' || $office == '32')) {
				$this->load->view('topnav/nav_office2');
			}elseif(($office == '3' || $office == '13') || ($office == '23' || $office == '33')) {
				$this->load->view('topnav/nav_office3');
			}elseif(($office == '4' || $office == '14') || ($office == '24' || $office == '34')) {
				$this->load->view('topnav/nav_office4');
			}elseif($office == '5') {
				$this->load->view('topnav/nav_office5');
			}elseif($office == '6') {
				$this->load->view('topnav/nav_office');
			}
			$this->load->view('agri/office/all_news',$data);
			$this->load->view('common/footer');
		}

		public function all_service() {

			//pagination settings
			$config['base_url'] = site_url('Office/all_service');
			$config['total_rows'] = $this->db->count_all('service');
			$config['per_page'] = "15";
			$config["uri_segment"] = 3;
			$choice = $config["total_rows"]/$config["per_page"];
			$config["num_links"] = floor($choice);

			// integrate bootstrap pagination
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '«';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = '»';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);

			$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

			$data['office'] = $this->Office_model->get_office();
			$data['ser'] = $this->Office_model->get_ser($config["per_page"], $data['page']);
			$data['pagination'] = $this->pagination->create_links(); 

			$office = $this->session->userdata('office');

			$this->load->view('common/header');
			if($office == '1') {
				$this->load->view('topnav/nav_office1');
			}elseif(($office == '2' || $office == '12') || ($office == '22' || $office == '32')) {
				$this->load->view('topnav/nav_office2');
			}elseif(($office == '3' || $office == '13') || ($office == '23' || $office == '33')) {
				$this->load->view('topnav/nav_office3');
			}elseif(($office == '4' || $office == '14') || ($office == '24' || $office == '34')) {
				$this->load->view('topnav/nav_office4');
			}elseif($office == '5') {
				$this->load->view('topnav/nav_office5');
			}elseif($office == '6') {
				$this->load->view('topnav/nav_office');
			}
			$this->load->view('agri/office/all_service',$data);
			$this->load->view('common/footer');
		}

		public function editn() {
			
			$this->form_validation->set_rules('id', 'News_id', 'required|min_length[1]|max_length[11]|integer|is_natural');
			$this->form_validation->set_rules('title','News_title','required');
			$this->form_validation->set_rules('dsc','News_description','required');
			if ($this->input->post()) {

				$id = $this->input->post('id');
			
			}else {
			
				$id = $this->uri->segment(3);
			
			}

			if($this->form_validation->run() == FALSE) {

				$data['query'] = $this->Office_model->getnews($id);
				
				$office = $this->session->userdata('office');

				$this->load->view('common/header');
				if($office == '1') {
					$this->load->view('topnav/nav_office1');
				}elseif(($office == '2' || $office == '12') || ($office == '22' || $office == '32')) {
					$this->load->view('topnav/nav_office2');
				}elseif(($office == '3' || $office == '13') || ($office == '23' || $office == '33')) {
					$this->load->view('topnav/nav_office3');
				}elseif(($office == '4' || $office == '14') || ($office == '24' || $office == '34')) {
					$this->load->view('topnav/nav_office4');
				}elseif($office == '5') {
					$this->load->view('topnav/nav_office5');
				}elseif($office == '6') {
					$this->load->view('topnav/nav_office');
				}
	            $this->load->view('agri/office/editn',$data);
	        	$this->load->view('common/footer');

			}else {

				if (!$this->upload->do_upload('userfile')) {

					$news = array(
								'news_id' => $id,
		            			'news_title' => $this->input->post('title'),
		            			'news_dsc' => $this->input->post('dsc'),
		            			'office_id' => $this->input->post('office_id'),
		            			'img' => 'img'
		            		);
		            $this->Office_model->n_update($news);
					redirect('Office/all_news','refresh');

		        }else {

		            $data = array('upload_data' => $this->upload->data());
					$news = array(
								'news_id' => $id,
								'news_title' => $this->input->post('title'),
								'news_dsc' => $this->input->post('dsc'),
								'office_id' => $this->input->post('office_id'),
								'img' => $data['upload_data']['file_name']
							);
					$this->Office_model->n_update($news);
					redirect('Office/all_news','refresh');

				}

			}
		}

		public function edits() {
				
			$this->form_validation->set_rules('id', 'Service_id', 'required|min_length[1]|max_length[11]|integer|is_natural');
			$this->form_validation->set_rules('ser_dsc','Service_description','required');
			if ($this->input->post()) {

				$id = $this->input->post('id');
			
			}else {
			
				$id = $this->uri->segment(3);
			
			}

			if($this->form_validation->run() == FALSE) {

				$data['query'] = $this->Office_model->getser($id);
				
				$office = $this->session->userdata('office');

				$this->load->view('common/header');
				if($office == '1') {
					$this->load->view('topnav/nav_office1');
				}elseif(($office == '2' || $office == '12') || ($office == '22' || $office == '32')) {
					$this->load->view('topnav/nav_office2');
				}elseif(($office == '3' || $office == '13') || ($office == '23' || $office == '33')) {
					$this->load->view('topnav/nav_office3');
				}elseif(($office == '4' || $office == '14') || ($office == '24' || $office == '34')) {
					$this->load->view('topnav/nav_office4');
				}elseif($office == '5') {
					$this->load->view('topnav/nav_office5');
				}elseif($office == '6') {
					$this->load->view('topnav/nav_office');
				}
	            $this->load->view('agri/office/edits',$data);
	        	$this->load->view('common/footer');

			}else {

				$ser = array(
							'ser_id' => $id,
							'ser_dsc' => $this->input->post('ser_dsc'),
							'office_id' => $this->input->post('office_id')
						);
				$this->Office_model->s_update($ser);
				redirect('Office/all_service');
			}

		}

		public function editm() {
			if($this->session->userdata('s_logged_in') == TRUE) {

				$this->form_validation->set_rules('id', 'Message_id', 'required|min_length[1]|max_length[11]|integer|is_natural');
				$this->form_validation->set_rules('msg_dsc','Message_description','required');
				if ($this->input->post()) {

					$id = $this->input->post('id');
				
				}else {
				
					$id = $this->uri->segment(3);
				
				}

				if($this->form_validation->run() == FALSE) {

					$data['query'] = $this->Office_model->getmsg($id);
					$this->load->view('common/header');
		            $this->load->view('topnav/nav_office');
		            $this->load->view('agri/office/editm',$data);
		        	$this->load->view('common/footer');

				}else {

					$msg = array(
								'msg_id' => $id,
								'msg_dsc' => $this->input->post('msg_dsc'),
								'user_id' => $this->input->post('user_id')
							);
					$this->Office_model->m_update($msg);
					redirect('Office/sixm');
				}

			}else {

				redirect('User');

			}
		}

		public function edita() {
			if($this->session->userdata('s_logged_in') == TRUE) {

				$this->form_validation->set_rules('id', 'About_id', 'required|min_length[1]|max_length[11]|integer|is_natural');
				$this->form_validation->set_rules('timeline','Timeline','required');
				$this->form_validation->set_rules('about_title','About title','required');
				$this->form_validation->set_rules('about_dsc','Service_description','required');
				if ($this->input->post()) {

					$id = $this->input->post('id');
				
				}else {
				
					$id = $this->uri->segment(3);
				
				}

				if($this->form_validation->run() == FALSE) {

					$data['query'] = $this->Office_model->getabo($id);
					$this->load->view('common/header');
		            $this->load->view('topnav/nav_office');
		            $this->load->view('agri/office/edita',$data);
		        	$this->load->view('common/footer');

				}else {

					$about = array(
								'id' => $id,
								'timeline' => $this->input->post('timeline'),
								'about_title' => $this->input->post('about_title'),
								'about_dsc' => $this->input->post('about_dsc')
							);
					$this->Office_model->a_update($about);
					redirect('Office/sixa');
				}

			}else {

				redirect('User');
				
			}	
		}

		public function deleten() {
			if($this->session->userdata('s_logged_in') == TRUE) {

				$this->form_validation->set_rules('id', 'News_id', 'required|min_length[1]|max_length[11]|integer|is_natural');

				if ($this->input->post()) {

					$id = $this->input->post('id');
				
				}else {
				
					$id = $this->uri->segment(3);
				
				}
				if($this->form_validation->run() == FALSE) {
				
					$data['query'] = $this->Office_model->getnews($id);
					$this->load->view('common/header');
					$this->load->view('topnav/nav_office');
					$this->load->view('agri/office/deleten', $data);
					$this->load->view('common/footer');
				
				}else {
				
					if ($this->Office_model->delete_news($id)) {
				
						redirect('Office/all_news');
				
					}
				
				}

			}else {

				redirect('User');
			}

		}

		public function deletes() {
			if($this->session->userdata('s_logged_in') == TRUE) {

				$this->form_validation->set_rules('id', 'Service_id', 'required|min_length[1]|max_length[11]|integer|is_natural');

				if ($this->input->post()) {

					$id = $this->input->post('id');
				
				}else {
				
					$id = $this->uri->segment(3);
				
				}
				if($this->form_validation->run() == FALSE) {
				
					$data['query'] = $this->Office_model->getser($id);
					$this->load->view('common/header');
					$this->load->view('topnav/nav_office');
					$this->load->view('agri/office/deletes', $data);
					$this->load->view('common/footer');
				
				}else {
				
					if ($this->Office_model->delete_ser($id)) {
				
						redirect('Office/all_service');
				
					}
				
				}

			}else {

				redirect('User');
			}

		}

	public function logout() {

		$this->session->sess_destroy();
		redirect('User', 'refresh');

	}

}