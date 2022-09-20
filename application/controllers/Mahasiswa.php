<?php 
class Mahasiswa extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
        
    }

    public function index(){
        $data['title'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index');
		$this->load->view('templates/footer');
    }

    public function add(){
        $data['title'] = 'Insert New Mahasiswa';

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('npm', 'NPM', 'required|numeric');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/add');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->insertDataMahasiswa();
            $this->session->set_flashdata('flash');
            redirect('mahasiswa');
        }
    }
}

?>