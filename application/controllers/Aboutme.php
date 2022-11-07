<?php 

class Aboutme extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('Templates');
		$this->load->model('User_model');
		
  }
	public function index(){
		$data['user'] = $this->User_model->getUserbyEmail();
		$data['title'] = $data['user']['name'];
		$this->load->view('templates/header', $data);
		$this->load->view('templates/Footer');
		$this->load->view('aboutme/index', $data);
	}
}
?>