<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Agri extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->helper('text');
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Agri_model');
		$this->load->helper('form');
		$this->load->library('pagination');
	
	}

	public function index() {

		$data['news'] = $this->Agri_model->fetch_news();
		$data['service2'] = $this->Agri_model->fetch_service(2);
		$data['service3'] = $this->Agri_model->fetch_service(3);
		$data['service4'] = $this->Agri_model->fetch_service(4);
		$data['service5'] = $this->Agri_model->fetch_service(5);
		$data['msg1'] = $this->Agri_model->fetch_msg(1);
		$data['msg2'] = $this->Agri_model->fetch_msg(2);
		$data['about1'] = $this->Agri_model->fetch_about(1);
		$data['about2'] = $this->Agri_model->fetch_about(2);
		$data['about3'] = $this->Agri_model->fetch_about(3);
		$data['about4'] = $this->Agri_model->fetch_about(4);
		$this->load->view('common/header');
		$this->load->view('topnav/nav');
		$this->load->view('agri/view',$data);
		$this->load->view('common/footer');

	}

	public function service() {

		$data['ser1'] = $this->Agri_model->fetch_ser(1);
		$data['ser2'] = $this->Agri_model->fetch_ser(2);
		$data['ser12'] = $this->Agri_model->fetch_ser(12);
		$data['ser22'] = $this->Agri_model->fetch_ser(22);
		$data['ser32'] = $this->Agri_model->fetch_ser(32);
		$data['ser3'] = $this->Agri_model->fetch_ser(3);
		$data['ser13'] = $this->Agri_model->fetch_ser(13);
		$data['ser23'] = $this->Agri_model->fetch_ser(23);
		$data['ser33'] = $this->Agri_model->fetch_ser(33);
		$data['ser4'] = $this->Agri_model->fetch_ser(4);
		$data['ser14'] = $this->Agri_model->fetch_ser(14);
		$data['ser24'] = $this->Agri_model->fetch_ser(24);
		$data['ser34'] = $this->Agri_model->fetch_ser(34);
		$data['ser5'] = $this->Agri_model->fetch_ser(5);
		$this->load->view('common/header');
		$this->load->view('topnav/nav');
		$this->load->view('agri/service',$data);
		$this->load->view('common/footer');

	}

	public function news() {

		//pagination settings
		$config['base_url'] = site_url('Agri/news');
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
		$config['prev_link'] = '« Prev';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next »';
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

		// get news list
		$data['newslist'] = $this->Agri_model->getnews($config["per_page"], $data['page'], NULL);
		$data['pagination'] = $this->pagination->create_links();

		// load view
		$this->load->view('common/header');
		$this->load->view('topnav/nav');
		$this->load->view('agri/news',$data);
		$this->load->view('common/footer');

	}

	public function search() {

		// get search string
		$search = ($this->input->post("news_title"))? $this->input->post("news_title") : "NIL";

		$search = ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;

		// pagination settings
		$config = array();
		$config['base_url'] = site_url("Agri/search/$search");
		$config['total_rows'] = $this->Agri_model->get_news_count($search);
		$config['per_page'] = "5";
		$config["uri_segment"] = 4;
		$choice = $config["total_rows"]/$config["per_page"];
		$config["num_links"] = floor($choice);

		// integrate bootstrap pagination
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '« Prev';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next »';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);

		$data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		// get news list
		$data['newslist'] = $this->Agri_model->getnews($config['per_page'], $data['page'], $search);
		$data['pagination'] = $this->pagination->create_links();

		//load view
		$this->load->view('common/header');
		$this->load->view('topnav/nav');
		$this->load->view('agri/news',$data);
		$this->load->view('common/footer');

	}

	public function selected_news($news_id) {

		$data['news'] = $this->Agri_model->getselnews($news_id);
		$this->load->view('common/header');
		$this->load->view('topnav/nav');
		$this->load->view('agri/sel_news',$data);
		$this->load->view('common/footer');

	}

}