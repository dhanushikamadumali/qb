<?php 

abstract class database{

  public $host     = HOST;
  public $user     = USER;
  public $database = DATABASE;
  public $password = PASSWORD;
  public $conn;
  public $result;

  public function __construct(){

    try{
      return  $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->database,$this->user,$this->password);

    }catch(PDOException $e){
      echo "database connection error".$e->getMessage();

    }

  }

  public function query($qry, $param=[]){
    if(empty($param)){
      $this->result = $this->conn->prepare($qry);
      return $this->result->execute();
    }else{
      $this->result = $this->conn->prepare($qry);
      return $this->result->execute($param);
    }
  }

  public function rowCount(){
    return $this->result->rowCount();
  }

  public function fetchall(){
    return $this->result->fetchAll(PDO::FETCH_OBJ);
  }
  



    // public function __construct()
    // {
    //     $host = "localhost";
    //     $user = "root";
    //     $pass = "";
    //     $db   = "cee_db";
    //     $conn = null;

    //     try {
    //       $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
    //     } catch (Exception $e) {
  
    //     }
        
    // }
   

}


 ?>