<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Office_model extends CI_Model {
  
	function __construct() {

		parent::__construct();

	}

	function get_news($limit, $start) {
		
		$sql = "SELECT * FROM `office`, `news` WHERE `office`.`office_id` = `news`.`office_id` ORDER BY `created_date` DESC LIMIT " . $start . ",  " . $limit;
		$query = $this->db->query($sql);
		return $query->result();
  	
  	}

  	function getnews($id) {

		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('news_id', $id);
		$query = $this->db->get();
		return $query->result();
	
	}

  	function n_update($news) {
	
		$this->db->replace('news',$news);

	}

	function delete_news($id) {

		$this->db->where('news_id',$id);
		$this->db->delete('news');

	}

  	function get_ser($limit, $start) {
		
		$sql = "SELECT * FROM `office`, `service` WHERE `office`.`office_id` = `service`.`office_id` ORDER BY `created_date` DESC LIMIT " . $start . ",  " . $limit;
		$query = $this->db->query($sql);
		return $query->result();
  	
  	}

  	function getser($id) {

		$this->db->select('*');
		$this->db->from('service');
		$this->db->where('ser_id', $id);
		$query = $this->db->get();
		return $query->result();
	
	}

  	function s_update($ser) {
	
		$this->db->replace('service',$ser);

	}

	function delete_ser($id) {

		$this->db->where('ser_id',$id);
		$this->db->delete('service');
		
	}

  	function get_msg() {

  		$sql = "SELECT * FROM `message`, `user`, `office`, `position` WHERE `message`.`user_id` = `user`.`id` AND `user`.`office_id` = `office`.`office_id` AND `user`.`position_id` = `position`.`pos_id` ORDER By `created_date` DESC";
  		$query = $this->db->query($sql);
  		return $query->result();

  	}

  	function getmsg($id) {

		$this->db->select('*');
		$this->db->from('message');
		$this->db->where('msg_id', $id);
		$query = $this->db->get();
		return $query->result();
	
	} 	

	function m_update($msg) {
	
		$this->db->replace('message',$msg);

	}

  	function get_about() {

  		$this->db->select('*');
  		$this->db->from('about');
  		$query = $this->db->get();
  		return $query->result();
  	}

  	function getabo($id) {

		$this->db->select('*');
		$this->db->from('about');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	
	} 	

	function a_update($about) {
	
		$this->db->replace('about',$about);

	}

	function get_office() {

        $result = $this->db->get('office')->result();;
        $id = array('0');
        $name = array('Select Office');
        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->office_id);
            array_push($name, $result[$i]->office_name);
        }
        return array_combine($id, $name);
    
    }

}