<?php 
function is_logged_in() {
   $ci = get_instance();
   if (!$ci->session->userdata('email')) {
      redirect('auth');
   }
}

function getUserbyEmail() {
   $ci = get_instance();
   $getUserbyEmail = $ci->db->get_where('user', ['email' => $ci->session->userdata('email')])->row_array();
   return $getUserbyEmail;
}

?>