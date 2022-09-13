<?php
class Siswa extends Controller
{
    public function index()
    {
        $data['judul'] = "Siswa";
        $data['siswa'] = $this->model("Siswa_model")->getAllsiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = "Detail Siswa";
        $data['siswa'] = $this->model("Siswa_model")->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        // $data['nama'] = $_POST['nama'];
        // $data['jenis_kelamin'] = $_POST['jenis_kelamin'];
        // $data['alamat'] = $_POST['alamat'];

        // var_dump($data);

        if ($this->model('Siswa_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil ', 'ditambahkan', 'success');
            header('Location:' . BASE_URL . '/siswa');
            exit;
        }
        header('Location: ' . BASE_URL . '/siswa');
    }

    public function hapus($id)
    {
        if ($this->model('Siswa_model')->hapusData($id) > 0) {
            Flasher::setFlash('berhasil ', 'dihapus', 'success');
            header('Location:' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal ', 'dihapus', 'danger');
            header('Location:' . BASE_URL . '/siswa');
            exit;
        }
    }
    public function getubah()
    {
        echo json_encode($this->model('siswa_model')->getsiswaById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('siswa_model')->ubahDatasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil ', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal ', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'siswa';
        $data['siswa'] = $this->model('Siswa_model')->cariDataSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }
}
