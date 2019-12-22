<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsModel extends CI_Model {
	public function getRecentNews(){
		$this->db->select('*');
		$this->db->from('news');
		$this->db->order_by('updated_at', 'DESC');
		$this->db->limit(5, 0);
		$query = $this->db->get();
		return $query->result();
	}
}