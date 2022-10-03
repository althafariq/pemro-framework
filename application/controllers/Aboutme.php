<?php 

class Aboutme extends CI_Controller
{

	public function index(){
		$data['title'] = 'About Me';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/Footer');
		$this->load->view('aboutme/index');
	}
}
?>