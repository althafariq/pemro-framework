<?php 

class Aboutme extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('Templates');
		is_logged_in();
		
  }
	public function index(){
		$data['user'] = getUserbyEmail();
		$data['title'] = $data['user']['name'];
		$this->load->view('templates/header', $data);
		$this->load->view('templates/Footer');
		$this->load->view('aboutme/index', $data);
	}
}
?>