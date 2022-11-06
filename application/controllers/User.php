<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
   public function __construct(){
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->library('Templates');
  }

   public function index() {
      $data['title'] = 'My Profile';
      $getUserbyEmail = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['user'] = $getUserbyEmail;
      echo 'Selamat datang ' . $data['user']['name'];
   }
}