<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {
    public function getAllMahasiswa() {
        return $this->db->get('mahasiswa')->result_array();   
    }

    public function insertDataMahasiswa() {
        $data = [
            "npm" => $this->input->post('npm', true),
            "nama" => $this->input->post('nama', true),
            "jurusan" => $this->input->post('jurusan', true),
            "fakultas" => $this->input->post('fakultas', true),
            "email" => $this->input->post('email', true)
        ];

        $this->db->insert('mahasiswa', $data);
    }

}

?>