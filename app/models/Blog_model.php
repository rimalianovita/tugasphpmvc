<?php
class Blog_Model
{
    private $blog = [
        [
            "penulis" => "Guru RPL",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "Models"

        ],
        [
            "penulis" => "Guru RPL",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "View"
        ],
        [
            "penulis" => "Guru RPL",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "Controllers"
        ]
    ];
    public function getAllBlog()
    {
        return $this->blog;
    }
    public function tambahData($data)
    {
        $query = "INSERT INTO siswa VALUES ('', :nama, :jenis_kelamin, :alamat)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
