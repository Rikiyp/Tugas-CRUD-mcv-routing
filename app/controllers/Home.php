<?php

class Home extends Controller{
  public function index()
  {
    $data["judul"] = "Dashboard ";
    $data["jumlahPenyewa"] = $this->model("PenyewaModel")->countPenyewa();
    $this->view("templates/header", $data);
    $this->view("home/index", $data);
    $this->view("templates/footer");
  }
}