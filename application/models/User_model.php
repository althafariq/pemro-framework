<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
   public function getUserbyEmail() {
		$getUserbyEmail = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		return $getUserbyEmail;
	}
}