<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
  
	function __construct() {

		parent::__construct();

	}

	function getoffice() {

		$this->db->select('*');
		$this->db->from('office');
		$query = $this->db->get();
		return $query->result();

	}

	function check($user_name,$office_id) {

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_name', $user_name);
		$this->db->where('office_id', $office_id);
		$query = $this->db->get();
		return $query->result();

	}

	function news_insert($data) {

		$this->db->insert('news',$data);
		
	}

}