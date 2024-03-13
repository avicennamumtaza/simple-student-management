<?php

class HomeController extends Controller { // default
    public function index() { // default
        // echo 'controller:home method:index';
        $data['judul'] = 'home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}

?>