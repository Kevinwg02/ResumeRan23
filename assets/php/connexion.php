<?php
$host = 'localhost';
$dbname = 'resume';
$username = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$dbname";
$sql = "SELECT * FROM hobbies";

try {
  $pdo = new PDO($dsn, $username, $password);
  $stmt = $pdo->query($sql);

  if ($stmt === false) {
    die("Erreur");
  }
} catch (PDOException $e) {
  echo $e->getMessage();
}
?>