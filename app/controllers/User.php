<?php
class User
{
    public function index()
    {
        $data["judul"] = "User";
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
    public function profile($nama = "Linux", $pekerjaan = "Devs")
    {
        $data["judul"] = "User";
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}