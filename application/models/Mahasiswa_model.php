<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {
    public function getAllMahasiswa() {
        $sql = "SELECT * FROM mahasiswa ORDER BY npm ASC";

        return $this->db->query($sql)->result();
        //return $this->db->get('mahasiswa')->result();   
    }

    public function insertDataMahasiswa() {
        $data = [
            "npm" => $this->input->post('npm', true),
            "nama" => $this->input->post('nama', true),
            "jurusan" => $this->input->post('jurusan', true),
            "fakultas" => $this->input->post('fakultas', true),
            "hp" => $this->input->post('hp', true),
            "email" => $this->input->post('npm') . "@student.upnjatim.ac.id"
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function deleteMahasiswa($npm) {
        $this->db->where('npm', $npm);
        $this->db->delete('mahasiswa');
    }

    public function getMahasiswabyNPM($npm) {
        return $this->db->get_where('mahasiswa', ['npm' => $npm])->row();
    }

    public function editDataMahasiswa() {
        $data = [
            "npm" => $this->input->post('npm', true),
            "nama" => $this->input->post('nama', true),
            "jurusan" => $this->input->post('jurusan', true),
            "fakultas" => $this->input->post('fakultas', true),
            "hp" => $this->input->post('hp', true),
            "email" => $this->input->post('npm') . "@student.upnjatim.ac.id"
        ];

        $this->db->where('npm', $this->input->post('npm'));
        $this->db->update('mahasiswa', $data);
    }

    public function findMahasiswa() {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('npm', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('fakultas', $keyword);
        $this->db->or_like('hp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('mahasiswa')->result();
    }
}

?>