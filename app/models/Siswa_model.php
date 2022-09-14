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
    $query = " INSERT INTO siswa VALUES ('', :nama, :jenis_kelamin, :alamat) ";
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->execute();
    return $this->db->rowCount();
   }
   public function hapusDataSiswa($id)
   {
    $query = "DELETE FROM siswa WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->rowCount();
   }
   public function ubahDataSiswa($data)
   {
        $query = "UPDATE siswa SET
                nama = :nama,
                jenis_kelamin = :jenis_kelamin,
                alamat = :alamat
            WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();

    return $this->db->rowCount();
    }
}

    // private $dbh;
    // private $stmt;
    // public function __construct()
    // {
    //     //data source name
    //     $dsn = "mysql:host=127.0.0.1;dbname=phpmvc";
    //     try{
    //         $this->dbh = new PDO($dsn, 'root', '');
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
        
    //     }
    // }
    // public function getAllBlog()
    // {
    //     $this->stmt = $this->dbh->prepare('SELECT * FROM siswa');
    //     $this->stmt->execute();
    //     return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // }
   // private $siswa = [
       // [
         //   "penulis"=> "Elit",
           // "judul" => "Elly",
            //"tulisan" => "Rifa",
            //"uraian" => "Ela"
        //]
        //];
        //public function getAllSiswa()
        //{
          //  return $this->siswa;
        //}