<?php

class InsertDataPenyewa extends Controller {
  public function index()
  {
    $data["judul"] = "Tambah Data Penyewa";
    $this->view("templates/header", $data);
    $this->view("InsertDataPenyewa/index");
    $this->view("templates/footer");
  }
}