<?php 
class Mahasiswa extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('Templates');
        $data['user'] = $this->User_model->getUserbyEmail();
    }

    public function getUserbyEmail() {
        $getUserbyEmail = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        return $getUserbyEmail;
     }

    public function index(){
        $data['title'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->Mahasiswa_model->findMahasiswa();
        }
        $data['user'] = $this->User_model->getUserbyEmail();
        $this->templates->display('mahasiswa/index', $data);

        // $this->load->view('templates/header', $data);
        // $this->load->view('mahasiswa/index', $data);
		// $this->load->view('templates/footer');
        // $this->load->view('templates/sidebar', $data);
    }

    public function getMahasiswabyNPM($npm = '') {
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswabyNPM($npm);
        $this->templates->display('mahasiswa/index', $data);
    }

    public function getMahasiswabyNama($nama = '') {
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswabyNama(rawurldecode($nama));
        $this->templates->display('mahasiswa/index', $data);
    }

    public function getMahasiswa($npm = '', $nama = '') {
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswabyNPM($npm);
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswabyNama(rawurldecode($nama));

        $this->templates->display('mahasiswa/index', $data);
    }

    public function getMahasiswabyJurusan($jurusan = '') {
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswabyJurusan(rawurldecode($jurusan));
        $this->templates->display('mahasiswa/index', $data);
    }


    public function add(){
        $data['title'] = 'Insert New Mahasiswa';
        $data['user'] = $this->User_model->getUserbyEmail();
        
        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('npm', 'NPM', 'required|numeric');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
        $this->form_validation->set_rules('hp', 'No HP', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            
            $this->templates->display('mahasiswa/add', $data);
            
        } else {
            $this->Mahasiswa_model->insertDataMahasiswa();
            $this->session->set_flashdata('flash', "added");
            redirect('mahasiswa');
        }
    }

    public function delete($npm) {
        $this->Mahasiswa_model->deleteMahasiswa($npm);
        $this->session->set_flashdata('flash', "deleted");
        redirect('mahasiswa');
    }

    public function edit($npm){
        $data['title'] = 'Edit Data Mahasiswa';
        $data['user'] = $this->User_model->getUserbyEmail();
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswabyNPMtoEdit($npm);

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('npm', 'NPM', 'required|numeric');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
        $this->form_validation->set_rules('hp', 'No HP', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            
            $this->templates->display('mahasiswa/edit', $data);
            
        } else {
            $this->Mahasiswa_model->editDataMahasiswa();
            $this->session->set_flashdata('flash', "edited");
            redirect('mahasiswa');
        }
    }
}

?>