<?php
class Komli extends Controller
{
    public function index()
    {
        $data["judul"] = "Komli";
        $this->view("templates/header", $data);
        $this->view("komli/index");
        $this->view("templates/footer");
    }
}
?>