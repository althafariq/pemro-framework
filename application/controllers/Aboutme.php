<?php 

class Aboutme extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('Templates');
		
  }
	public function index(){
		$data['title'] = 'About Me';
		$getUserbyEmail = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['user'] = $getUserbyEmail;
		$this->load->view('templates/header', $data);
		$this->load->view('templates/Footer');
		$this->load->view('aboutme/index');
	}
}
?>