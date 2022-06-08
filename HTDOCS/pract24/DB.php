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
    $sql_result = $this->link->query('SELECT * FROM photos');
    if ($sql_result->num_rows) {
      return $this->link->query('SELECT * from `photos`')->fetch_all(MYSQLI_ASSOC);
    }
    return [];
  }
}
