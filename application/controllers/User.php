<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
   public function __construct(){
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->library('Templates');
      is_logged_in();
  }
   
   public function index() {
      $data['title'] = 'My Profile';
      $data['user'] = getUserbyEmail();
      echo 'Selamat datang ' . $data['user']['name'];
   }
}