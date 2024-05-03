<?php

class Penyewa extends Controller {
  public function index()
  {
    $data["judul"] = "Data Penyewa";
    $data["Penyewa"] = $this->model("PenyewaModel")->getAllPenyewa();
    $this->view("templates/header", $data);
    $this->view("Penyewa/index", $data);
    $this->view("templates/footer");
  }

  public function tambahPenyewa()
  {
    if ($this->model("penyewaModel")->tambahDataPenyewa($_POST) > 0){
      Flasher::setFlash('Data Penyewa', 'berhasil', 'ditambahkan', 'success');
      header("Location:" . BASEURL . "/Penyewa");
      exit;
    } else{
      Flasher::setFlash('Data Penyewa', 'gagal', 'ditambahkan', 'danger');
      header("Location:" . BASEURL . "/Penyewa");
      exit;
    }
  }

  public function getUbahPenyewa()
  {
    echo json_encode($this->model("penyewaModel")->getPenyewaById($_POST["id"]));
  }

  public function editPenyewa()
  {
    if ($this->model("penyewaModel")->ubahDataPenyewa($_POST) > 0){
      Flasher::setFlash('Data Penyewa', 'berhasil', 'diubah', 'success');
      header("Location:" . BASEURL . "/Penyewa");
      exit;
    } else{
      Flasher::setFlash('Data Penyewa', 'gagal', 'diubah', 'danger');
      header("Location:" . BASEURL . "/Penyewa");
      exit;
    }
  }

  public function hapusPenyewa($id)
  {
    if ($this->model("penyewaModel")->hapusDataPenyewa($id) > 0){
      Flasher::setFlash('Data Penyewa', 'berhasil', 'dihapus', 'success');
      header("Location:" . BASEURL . "/Penyewa");
      exit;
    } else{
      Flasher::setFlash('Data Penyewa', 'gagal', 'dihapus', 'danger');
      header("Location:" . BASEURL . "/Penyewa");
      exit;
    }
  }

}