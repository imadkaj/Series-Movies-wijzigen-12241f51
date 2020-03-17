<?php

$id = $_GET['id'];

$localhost = 'localhost';
$db = 'netland';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$localhost;dbname=$db;charset=$charset";

try 
{
    $pdo = new PDO($dsn, $user, $pass);
} 
catch (\PDOException $e) 
{
    echo 'error connecting to database: ' . $e->getMessage();
}

$stmt = $pdo->prepare('SELECT * FROM series WHERE id = :id');
$stmt->bindParam(':id', $id);
$stmt->execute();

$serie = $stmt->fetch(PDO::FETCH_OBJ);

function getTitle()
{
    global $serie;
    return $serie->title;
}

function getRating()
{
    global $serie;
    return $serie->rating;
}

function getAward()
{
    global $serie;
    return $serie->has_won_awards;
}

function hasWonAward()
{
    if(getAward())
    {
        return 'ja';
    }

    return 'nee';
}

function getSeasons()
{
    global $serie;
    return $serie->seasons;
}

function getCountry()
{
    global $serie;
    return $serie->country;
}

function getLanguage()
{
    global $serie;
    return $serie->language;
}

function getDescription()
{
    global $serie;
    return $serie->description;
}

?>
<a href="index.php">terug</a>

<h2><?php echo getTitle(); echo ' - ' . getRating(); ?></h2>

<table>
    <tr>
        <th>Awards won</th>
        <td><?php echo hasWonAward(); ?></td>
    </tr>
    <tr>
        <th>Seasons</th>
        <td><?php echo getSeasons(); ?></td>
    </tr>
    <tr>
        <th>Country</th>
        <td><?php echo getCountry(); ?></td>
    </tr>
    <tr>
        <th>Language</th>
        <td><?php echo getLanguage(); ?></td>
    </tr>
</table>

<p><?php echo getDescription(); ?></p>

<form action="series_edit.php" method="get">
<input type="submit" name="submit" value="wijzig">
<input type="hidden" name="id" value="<?php echo $id;?>">
</form>

