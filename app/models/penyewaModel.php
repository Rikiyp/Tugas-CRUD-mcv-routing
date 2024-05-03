<?php
class penyewaModel 
{
  private $table = "tb_penyewa";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllpenyewa()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function getColumnsPenyewa()
  {
    $this->db->query("SHOW COLUMNS FROM ". $this->table);
    return $this->db->resultSet();
  }

  public function countPenyewa()
    {
      $this->db->query("SELECT COUNT(*) as total FROM ". $this->table);
      $result = $this->db->single();

      return $result['total'];
    }


    // public function tambahDataPenyewa($data)
    // {
    //     // Pertama, upload gambar
    //     // $target_dir = BASEURL . "/img/";
    //     $target_dir = "img/";
    //     // $target_dir = "../../public/img/";
    //     // $target_dir = "D:/XAMPP/htdocs/PWEB/Tugas-crud-app-manager/public/img/";
    //     $target_file = $target_dir . basename($_FILES["image"]["name"]);
    //     $uploadOk = 1;
    //     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    //     // Check if image file is a actual image or fake image
    //     if(isset($_POST["submit"])) {
    //         $check = getimagesize($_FILES["image"]["tmp_name"]);
    //         if($check !== false) {
    //             $uploadOk = 1;
    //         } else {
    //             echo "File bukan gambar.";
    //             $uploadOk = 0;
    //         }
    //     }
    
    //     // Check if file already exists
    //     if (file_exists($target_file)) {
    //         echo "Maaf, file sudah ada.";
    //         $uploadOk = 0;
    //     }
    
    //     // Check file size
    //     if ($_FILES["image"]["size"] > 500000) {
    //         echo "Maaf, ukuran file terlalu besar.";
    //         $uploadOk = 0;
    //     }
    
    //     // Allow certain file formats
    //     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    //     && $imageFileType != "gif" ) {
    //         echo "Maaf, hanya format JPG, JPEG, PNG & GIF yang diperbolehkan.";
    //         $uploadOk = 0;
    //     }
    
    //     // Check if $uploadOk is set to 0 by an error
    //     if ($uploadOk == 0) {
    //         echo "Maaf, file tidak diunggah.";
    //     // if everything is ok, try to upload file
    //     } else {
    //         if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    //             // Jika gambar berhasil diunggah, tambahkan data mobil ke database
    //             $query = "INSERT INTO " . $this->table . "(type, deskripsi, stock, price, image_path) 
    //                       VALUES (:type, :deskripsi, :stock, :price, :image_path)";
        
    //             $this->db->query($query);
    //             $this->db->bind(":type", $data["type"]);
    //             $this->db->bind(":deskripsi", $data["deskripsi"]);
    //             $this->db->bind(":stock", $data["stock"]);
    //             $this->db->bind(":price", $data["price"]);
    //             $this->db->bind(":image_path", $target_file);
    
    //             $this->db->execute();
    //             return $this->db->rowCount();
    //         } else {
    //             echo "Maaf, terjadi kesalahan saat mengunggah file.";
    //         }
    //     }
    // }

  public function tambahDataPenyewa($data)
  {
    $query = "INSERT INTO " . $this->table . 
                  " VALUES
            ('',:nama_penyewa, :alamat, :no_identitas, :no_telepon, :no_unit, :kategori, :tanggal_mulai, :tanggal_selesai, :harga, :status)";
    
    $this->db->query($query);
    $this->db->bind(":nama_penyewa", $data["nama_penyewa"]);
    $this->db->bind(":alamat", $data["alamat"]);
    $this->db->bind(":no_identitas", $data["no_identitas"]);
    $this->db->bind(":no_telepon", $data["no_telepon"]);
    $this->db->bind(":no_unit", $data["no_unit"]);
    $this->db->bind(":kategori", $data["kategori"]);
    $this->db->bind(":tanggal_mulai", $data["tanggal_mulai"]);
    $this->db->bind(":tanggal_selesai", $data["tanggal_selesai"]);
    $this->db->bind(":harga", $data["harga"]);
    $this->db->bind(":status", $data["status"]);

    $this->db->execute();
    return $this->db->rowCount();

  }

  public function getPenyewaById($id)
  {
    $this->db->query("SELECT * FROM ". $this->table . " WHERE id_penyewa=:id");
    $this->db->bind("id", $id);
    return $this->db->single();
  }


  // public function ubahDataPenyewa($data)
  // {
      // Jika ada gambar yang diunggah, proses pembaruan gambar
    //   if ($_FILES['image']['name']) {
    //       // Pertama, upload gambar baru
    //       $target_dir = "img/";
    //       $target_file = $target_dir . basename($_FILES["image"]["name"]);
    //       $uploadOk = 1;
    //       $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      
          // Check if image file is a actual image or fake image
        //   if(isset($_POST["submit"])) {
        //       $check = getimagesize($_FILES["image"]["tmp_name"]);
        //       if($check !== false) {
        //           $uploadOk = 1;
        //       } else {
        //           echo "File bukan gambar.";
        //           $uploadOk = 0;
        //       }
        //   }
      
        //   // Check if file already exists
        //   if (file_exists($target_file)) {
        //       echo "Maaf, file sudah ada.";
        //       $uploadOk = 0;
        //   }
      
        //   // Check file size
        //   if ($_FILES["image"]["size"] > 500000) {
        //       echo "Maaf, ukuran file terlalu besar.";
        //       $uploadOk = 0;
        //   }
      
        //   // Allow certain file formats
        //   if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        //   && $imageFileType != "gif" ) {
        //       echo "Maaf, hanya format JPG, JPEG, PNG & GIF yang diperbolehkan.";
        //       $uploadOk = 0;
        //   }
  
          // Jika semua validasi berhasil, lanjutkan dengan pembaruan data mobil
      //     if ($uploadOk == 1) {
      //         // Jika gambar berhasil diunggah, tambahkan data mobil ke database
      //         $query = "UPDATE " . $this->table . " SET 
      //                   nama_penyewa = :nama_penyewa,
      //                   no_identitas = :no_identitas,
      //                   alamat = :alamat,
      //                   no_telepon = :no_telepon,
      //                   no_unit = :no_unit,
      //                   kategori = :kategori,
      //                   tanggal_mulai = :tanggal_mulai,
      //                   tanggal_selesai = :tanggal_selesai,
      //                   harga = :harga,
      //                   status = :status
      //                 WHERE id_penyewa = :id_penyewa";
          
      //         $this->db->query($query);
      //         $this->db->bind(":id_penyewa", $data["id_penyewa"]);
      //         $this->db->bind(":nama_penyewa", $data["nama_penyewa"]);
      //         $this->db->bind(":alamat", $data["alamat"]);
      //         $this->db->bind(":no_telepon", $data["no_telepon"]);
      //         $this->db->bind(":no_unit", $data["no_unit"]);
      //         $this->db->bind(":kategori", $data["kategori"]);
      //         $this->db->bind(":tanggal_mulai", $data["tanggal_mulai"]);
      //         $this->db->bind(":tanggal_selesai", $data["tanggal_selesai"]);
      //         $this->db->bind(":harga", $data["harga"]);
      //         $this->db->bind(":status", $data["status"]);
      //         $this->db->bind(":image_path", $target_file);
      
      //         $this->db->execute();
      //         return $this->db->rowCount();
      //     } else {
      //         echo "Maaf, terjadi kesalahan saat mengunggah file.";
      //     }
      // } else {
          // Jika tidak ada gambar yang diunggah, lakukan pembaruan data mobil tanpa memperbarui gambar
  //         $query = "UPDATE " . $this->table . " SET 
  //                   nama_penyewa = :nama_penyewa,
  //                   no_identitas = :no_identitas,
  //                   alamat = :alamat,
  //                   no_telepon = :no_telepon,
  //                   no_unit = :no_unit,
  //                   kategori = :kategori,
  //                   tanggal_mulai = :tanggal_mulai,
  //                   tanggal_selesai = :tanggal_selesai,
  //                   harga = :harga,
  //                   status = :status
  //                 WHERE id_penyewa = :id_penyewa";
      
  //         $this->db->query($query);
  //         $this->db->bind(":id_penyewa", $data["id_penyewa"]);
  //           $this->db->bind(":nama_penyewa", $data["nama_penyewa"]);
  //           $this->db->bind(":alamat", $data["alamat"]);
  //           $this->db->bind(":no_telepon", $data["no_telepon"]);
  //           $this->db->bind(":no_unit", $data["no_unit"]);
  //           $this->db->bind(":kategori", $data["kategori"]);
  //           $this->db->bind(":tanggal_mulai", $data["tanggal_mulai"]);
  //           $this->db->bind(":tanggal_selesai", $data["tanggal_selesai"]);
  //           $this->db->bind(":harga", $data["harga"]);
  //           $this->db->bind(":status", $data["status"]);
  
  //         $this->db->execute();
  //         return $this->db->rowCount();
      
  // }

  public function ubahDataPenyewa($data)
  {
    $query = "UPDATE " . $this->table . " SET 
                nama_penyewa = :nama_penyewa,
                no_identitas = :no_identitas,
                alamat = :alamat,
                no_telepon = :no_telepon,
                no_unit = :no_unit,
                kategori = :kategori,
                tanggal_mulai = :tanggal_mulai,
                tanggal_selesai = :tanggal_selesai,
                harga = :harga,
                status = :status
            WHERE id_penyewa = :id_penyewa;";
    
    $this->db->query($query);
    $this->db->bind("id_penyewa", $data["id_penyewa"]);
    $this->db->bind(":nama_penyewa", $data["nama_penyewa"]);
    $this->db->bind(":alamat", $data["alamat"]);
    $this->db->bind(":no_telepon", $data["no_telepon"]);
    $this->db->bind(":no_unit", $data["no_unit"]);
    $this->db->bind(":kategori", $data["kategori"]);
    $this->db->bind(":tanggal_mulai", $data["tanggal_mulai"]);
    $this->db->bind(":tanggal_selesai", $data["tanggal_selesai"]);
    $this->db->bind(":harga", $data["harga"]);
    $this->db->bind(":status", $data["status"]);

    $this->db->execute();
    return $this->db->rowCount();

  }

  public function hapusDataPenyewa($id)
  {
    $query = "DELETE FROM " . $this->table . 
              " WHERE id_penyewa = :id_penyewa";
    $this->db->query($query);
    $this->db->bind("id_penyewa", $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

}

