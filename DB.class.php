<?php
class DB{
  private $dbh;
  function __construct(){
    require_once("../db_connection.php");
    try{
      //open connection_
      $this->dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
      //change error reporting
      $this->dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      echo $e->getMessage();
      die();
    }
  }//contructor
}//class
 ?>
