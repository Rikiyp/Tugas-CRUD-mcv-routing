<?php

Class Register_model{
  private $table = "users";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function tambahAkun($data)
  {
    $query = "INSERT INTO users
                VALUES
            (:username, :password)";
    
    $this->db->query($query);
    $this->db->bind("username", $data["username"]);
    $this->db->bind("password", $data["password"]);

    $this->db->execute();
    return $this->db->rowCount();

  }
}