<?php

$host = 'localhost';
$dbname = 'netland';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$id = $_POST['id'];
$title = $_POST['title'];
$rating = $_POST['rating'];
$description = $_POST['description'];
$awards = $_POST['awards'];
$seasons = $_POST['seasons'];
$country = $_POST['country'];
$lang = $_POST['lang'];

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$sql = "UPDATE series SET title = ?, rating = ?, description = ?, has_won_awards = ?, seasons = ?, country = ?, language = ?
WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$title, $rating, $description, $awards, $seasons, $country, $lang, $id]);

header("Location: series.php?id=$id");


?>