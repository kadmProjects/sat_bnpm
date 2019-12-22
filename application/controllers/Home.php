<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->load->model('BranchModel');
		$this->load->model('ProgramModel');
		$this->load->model('NewsModel');
		$this->load->model('EmployeeModel');

		$data = array('content'=>'home');
		$data['branches'] = $this->BranchModel->getActiveBranches();
		$data['branches'] = array_chunk($data['branches'], 3);
		$data['teams'] = $this->EmployeeModel->getActiveEmployees();
		$data['teams'] = array_chunk($data['teams'], 3);
		$data['programs'] = $this->ProgramModel->getActivePrograms();
		$data['news'] = $this->NewsModel->getRecentNews();
		
		$this->load->view('layout', $data);
	}
}
