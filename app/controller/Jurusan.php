<?php
class Jurusan extends Controller
{
    public function index()
    {
        $data['judul'] = "Rekayasa Perangkat Lunak";
        $this->view('templates/header', $data);
        $this->view('jurusan/rpl');
        $this->view('templates/footer');
    }
    public function dpib()
    {
        $data['judul'] = "Desain Pemodelan Dan Informasi Bangunan";
        $this->view('templates/header', $data);
        $this->view('jurusan/dpib');
        $this->view('templates/footer');
    }
    public function ak()
    {
        $data['judul'] = "Akuntansi Dan Keuangan Lembaga";
        $this->view('templates/header', $data);
        $this->view('jurusan/ak');
        $this->view('templates/footer');
    }
    public function tptup()
    {
        $data['judul'] = "Teknik Pemanasan,Tata Udara dan Pendinginan";
        $this->view('templates/header', $data);
        $this->view('jurusan/tptup');
        $this->view('templates/footer');
    }
    public function tp()
    {
        $data['judul'] = "Teknik Pengelasan";
        $this->view('templates/header', $data);
        $this->view('jurusan/tp');
        $this->view('templates/footer');
    }
    public function tkp()
    {
        $data['judul'] = "Teknik Kontruksi Dan Pembangunan";
        $this->view('templates/header', $data);
        $this->view('jurusan/tkp');
        $this->view('templates/footer');
    }
    public function kuliner()
    {
        $data['judul'] = "Kuliner";
        $this->view('templates/header', $data);
        $this->view('jurusan/kuliner');
        $this->view('templates/footer');
    }
}
