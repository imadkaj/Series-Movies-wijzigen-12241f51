<?php

$title = $_POST['title'];
$duur = $_POST['duur'];
$datum = $_POST['datum'];
$land = $_POST['land'];
$omschr = $_POST['omschrijving'];
$trailer_id = $_POST['trailer_id'];

$host = 'localhost';
$dbname = 'netland';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$sql = "INSERT INTO movies (title, duur, datum, land, omschrijving, trailer_id)
VALUES (?, ?, ?, ?, ?, ?);";

$stmt = $pdo->prepare($sql);

$stmt->execute([$title, $duur, $datum, $land, $omschr, $trailer_id]);

header('Location: index.php');
?>