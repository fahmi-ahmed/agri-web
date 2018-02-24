<?php

if(!defined('BASEPATH'))
	exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('User_model');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div>', '</div>');

	}

	public function index() {

		$this->form_validation->set_rules('user_name','User_name','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('office','Office','required');

		$data['office'] = $this->User_model->getoffice();
		
		if($this->form_validation->run() == FALSE) {

			$this->load->view('common/header_login');
			$this->load->view('agri/user/login',$data);
			$this->load->view('common/footer');
		
		}else {

			$user_name = $this->input->post('user_name');
			$pass = $this->input->post('password');
			$office = $this->input->post('office');

			if($office == '1') {

				$data['result'] = $this->User_model->check($user_name,$office);
				if($data['result']) {
					foreach ($data['result'] as $row) {
						if(password_verify($pass, $row->password)) {
							$user = array(
										'id' => $row->user_id,
										'name' => $row->user_name,
										'office' => $row->office_id,
										'pos' => $row->position_id,
										'o_logged_in' =>TRUE
									);
							$this->session->set_userdata($user);
							redirect('Office');
						}else {
							redirect('User');
						}
					}
				}else {
					redirect('User');
				}

			}elseif(($office == '2' || $office == '12') || ($office == '22' || $office == '32')) {

				$data['result'] = $this->User_model->check($user_name,$office);
				if($data['result']) {
					foreach ($data['result'] as $row) {
						if(password_verify($pass, $row->password)) {
							$user = array(
										'id' => $row->user_id,
										'name' => $row->user_name,
										'office' => $row->office_id,
										'pos' => $row->position_id,
										't_logged_in' =>TRUE
									);
							$this->session->set_userdata($user);
							redirect('Office/two');
						}else {
							redirect('User');
						}
					}
				}else {
					redirect('User');
				}

			}elseif(($office == '3' || $office == '13') || ($office == '23' || $office == '33')) {

				$data['result'] = $this->User_model->check($user_name,$office);
				if($data['result']) {
					foreach ($data['result'] as $row) {
						if(password_verify($pass, $row->password)) {
							$user = array(
										'id' => $row->user_id,
										'name' => $row->user_name,
										'office' => $row->office_id,
										'pos' => $row->position_id,
										'th_logged_in' =>TRUE
									);
							$this->session->set_userdata($user);
							redirect('Office/three');
						}else {
							redirect('User');
						}
					}
				}else {
					redirect('User');
				}

			}elseif(($office == '4' || $office == '14') || ($office == '24' || $office == '34')) {

				$data['result'] = $this->User_model->check($user_name,$office);
				if($data['result']) {
					foreach ($data['result'] as $row) {
						if(password_verify($pass, $row->password)) {
							$user = array(
										'id' => $row->user_id,
										'name' => $row->user_name,
										'office' => $row->office_id,
										'pos' => $row->position_id,
										'f_logged_in' =>TRUE
									);
							$this->session->set_userdata($user);
							redirect('Office/four');
						}else {
							redirect('User');
						}
					}
				}else {
					redirect('User');
				}

			}elseif($office == '5') {

				$data['result'] = $this->User_model->check($user_name,$office);
				if($data['result']) {
					foreach ($data['result'] as $row) {
						if(password_verify($pass, $row->password)) {
							$user = array(
										'id' => $row->user_id,
										'name' => $row->user_name,
										'office' => $row->office_id,
										'pos' => $row->position_id,
										'fi_logged_in' =>TRUE
									);
							$this->session->set_userdata($user);
							redirect('Office/five');
						}else {
							redirect('User');
						}
					}
				}else {
					redirect('User');
				}
				
			}elseif($office == '6') {

				$data['result'] = $this->User_model->check($user_name,$office);
				if($data['result']) {
					foreach ($data['result'] as $row) {
						if(password_verify($pass, $row->password)) {
							$user = array(
										'id' => $row->user_id,
										'name' => $row->user_name,
										'office' => $row->office_id,
										'pos' => $row->position_id,
										's_logged_in' =>TRUE
									);
							$this->session->set_userdata($user);
							redirect('Office/sixn');
						}else {
							redirect('User');
						}
					}
				}else {
					redirect('User');
				}

			}

		}

	}

}