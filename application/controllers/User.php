<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
   public function __construct(){
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('User_model');
      $this->load->library('Templates');
  }
   
   public function index() {
      $data['title'] = 'My Profile';
      $data['user'] = $this->User_model->getUserbyEmail();
      echo 'Selamat datang ' . $data['user']['name'];
   }
}