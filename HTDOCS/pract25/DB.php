<?php
namespace Photos;
use mysqli;

class DB {
  static $host = 'localhost';
  static $user = 'root';
  static $password = '';
  static $database = 'photodb';

  public function __construct() {
    $this->link = new mysqli(DB::$host, DB::$user, DB::$password, DB::$database);
    $this->link->set_charset('utf8');
  }

  public function get_all_photos() {
    $sql_result = $this->link->query("SELECT * FROM `photos` ORDER BY `Id` DESC");
    if ($sql_result->num_rows) {
      return $sql_result->fetch_all(MYSQLI_ASSOC);
    }
    return [];
  }

  public function get_user_photos($uid) {
    $sql_result = $this->link->query("SELECT * FROM `photos` WHERE `Uid` = '$uid' ORDER BY `Id` DESC");
    if ($sql_result->num_rows) {
      return $sql_result->fetch_all(MYSQLI_ASSOC);
    }
    return [];
  }

  public function check_user($login, $password) {
    $sql_result = $this->link->query("SELECT * FROM `users` WHERE `Email` = '$login' AND `Password` = '$password'");
    if ($sql_result->num_rows) {
      $user = $sql_result->fetch_assoc();
      return $user["Id"];
    }
    return false;    
  }
  
  public function check_login($login) {
    $sql_result = $this->link->query("SELECT * FROM `users` WHERE `Email` = '$login'");
    if ($sql_result->num_rows) {
      return true;
    }
    return false;
  }

  public function new_user($login, $password) {
    $this->link->query("INSERT INTO `users` (`Name`, `Password`, `Email`) VALUES ('', '$password', '$login')");
  }

  public function new_photo($uid, $image, $text) {
    $this->link->query("INSERT INTO `photos` (`Uid`, `Image`, `Text`, `Tags`) VALUES ('$uid', '$image', '$text', '')");
  }
}
