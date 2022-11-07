<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('Templates');
		$this->load->model('User_model');
  }

	public function index(){
		$data['title'] = 'Home';
		$data['user'] = $this->User_model->getUserbyEmail();
		$this->templates->display('home/index', $data);
	}

}