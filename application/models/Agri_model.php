<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agri_model extends CI_Model {
  
	function __construct() {

		parent::__construct();

	}

	function fetch_news() {
		$this->db->select('*');
		$this->db->from('news');
		$this->db->order_by('created_date','DESC');
		$this->db->limit('6');
		$query = $this->db->get();
		return $query->result();
	}

	function fetch_service($office_id) {
		$this->db->select('*');
		$this->db->from('service');
		$this->db->where('office_id',$office_id);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	function fetch_ser($office_id) {
		$this->db->select('*');
		$this->db->from('service');
		$this->db->where('office_id',$office_id);
		$query = $this->db->get();
		return $query->result();
	}

	function fetch_msg($id) {

        $query = "SELECT * FROM `position`, `message`, `user` 
        WHERE `pos_id` = ? 
        AND `position`.`pos_id` = `user`.`position_id`
        AND `user`.`id` = `message`.`user_id`";
        return $result = $this->db->query($query, array($id));
    }

    function fetch_about($id) {
		$this->db->select('*');
		$this->db->from('about');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	function getnews($limit, $start, $st = NULL) {

		if ($st == "NIL") $st = "";
		$sql = "SELECT * FROM `news` WHERE `news_title` LIKE '%$st%' ORDER BY `created_date` DESC LIMIT " . $start . ",  " . $limit;
		$query = $this->db->query($sql);
		return $query->result();
  	
  	}

  	function get_news_count($st = NULL){
      
		if ($st == "NIL") $st = "";
		$this->db->select('*');
		$this->db->from('news');
		$this->db->like('news_title',$st);
		$this->db->order_by('created_date','DESC');
		$query = $this->db->get();
		return $query->num_rows();
  	
  	}

  	function getselnews($news_id) {

  		$query = "SELECT * FROM `news`, `office` WHERE `news_id` = ? AND `news`.`office_id` = `office`.`id`";
    	return $result = $this->db->query($query, array($news_id));

  	}

}