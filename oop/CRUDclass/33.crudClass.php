<?php 

class Database {

  private $db_host = "localhost";
  private $db_user = "root";
  private $db_pass= "";
  private $db_name = "phptesting";
  private $mysqli = "";
  private $result = array();
  private $conn = false;
  public function __construct() {
    if(!$this->conn) {
      $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
      $this->conn = true;
      
      if($this->mysqli->connect_error) {
        array_push($this->result, $this->mysqli->connect_error);
        die("There was a problem connecting to the databasse!!");
      }
    }else {
      die("There was an problem!");
    }
  }

  public function __destruct() {
    if($this->conn) {
      echo "worked";
      if($this->mysqli->close()) {
        $this->conn = false;
        die();
      }
    }else {
      die();
    }
  }

}
$db = new Database();
echo "Hello, I am here!!";