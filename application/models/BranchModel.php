<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BranchModel extends CI_Model {
	public function getActiveBranches(){
		$this->db->select('*');
		$this->db->from('branch');
		$this->db->where('branchstatus',1);
		$query = $this->db->get();
		return $query->result();
	}
}