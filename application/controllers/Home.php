<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('Templates');
		$this->load->model('User_model');
		is_logged_in();
  }

	public function index(){
		$data['title'] = 'Home';
		$data['user'] = getUserbyEmail();
		$this->templates->display('home/index', $data);
	}

}