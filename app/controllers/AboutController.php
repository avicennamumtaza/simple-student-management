<?php

class AboutController extends Controller {
    public function index() { // default
        // echo 'controller:about method:page';
        $data['judul'] = 'index';
        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }
    public function page($nama = 'Avicenna', $job = 'Student') { // params default
        // echo "controller:about method:page params:$nama$job";
        $data['nama'] = $nama;
        $data['job'] = $job;
        $data['judul'] = 'page';
        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }
}

?>