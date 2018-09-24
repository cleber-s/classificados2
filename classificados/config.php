<?php
session_start();
require 'access.php';
global $pdo;
try {
  // origin: "mysql:dbname=classificados;host=localhost", "root", ""
  $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
  echo "FALHOU: ". $e->getMessage();
  exit;
}
?>
