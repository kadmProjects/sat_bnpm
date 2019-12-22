<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgramModel extends CI_Model {
	public function getActivePrograms(){
		$this->db->select('*');
		$this->db->from('program');
		$this->db->where('programstatus',1);
		$query = $this->db->get();
		return $query->result();
	}
}