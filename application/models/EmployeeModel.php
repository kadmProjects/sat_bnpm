<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeModel extends CI_Model {
	public function getActiveEmployees(){
		$this->db->select('*');
		$this->db->from('employee');
		$this->db->join('branch', 'employee.branch = branch.id', 'inner');
		// $this->db->join('designation', 'designation.id = employee.designation', 'inner');
		$this->db->where('employeestatus',1);
		$query = $this->db->get();
		var_dump($query->result());die;
		return $query->result();
	}
}
