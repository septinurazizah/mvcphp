<?php
class Siswa_model
{
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }
    public function GetSiswaById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahData($data)
    {
        $query = " INSERT INTO siswa VALUES ('', :nama, :jurusan, :jenis_kelamin, :alamat) ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusData($id)
    {
        $query = " DELETE FROM siswa where id= :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
      
        $this->db->execute();
        
        return $this->db->rowCount();
    }
    public function ubahDatasiswa($data)
    {
        $query = "UPDATE siswa SET
                    nama = :nama,
                    jurusan = :jurusan,
                    jenis_kelamin = :jenis_kelamin,
                    alamat = :alamat
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataSiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM siswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultAll();
    }
}
