<?php

class MhsController extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mhs_model')->getAllMhs();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
    
    public function detail($nim) {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mhs_model')->getAllMhsByNim($nim);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }
}

?>