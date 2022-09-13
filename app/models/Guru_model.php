<?php
class Guru_model
{
    private $table = 'guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllGuru()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }
    public function GetGuruById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahData($data)
    {
        $query = " INSERT INTO " . $this->table . " VALUES ('', :namaguru, :matapelajaran) ";
        $this->db->query($query);
        $this->db->bind('namaguru', $data['namaguru']);
        $this->db->bind('matapelajaran', $data['matapelajaran']);
       
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusData($id)
    {
        $query = " DELETE FROM guru where id= :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
      
        $this->db->execute();
        
        return $this->db->rowCount();
    }
    public function ubahDataGuru($data)
    {
        $query = "UPDATE guru SET
                    namaguru = :namaguru,
                    matapelajaran = :matapelajaran,
                   
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['namaguru']);
        $this->db->bind('matapelajaran', $data['matapelajaran']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function cariDataGuru()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM guru WHERE namaguru LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        
        return $this->db->resultSet();
    }
}
