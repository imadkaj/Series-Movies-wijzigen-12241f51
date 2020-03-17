<?php

$serie_id = $_GET['id'];

$host = 'localhost';
$dbname = 'netland';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$sql = "SELECT * FROM series WHERE id = ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([$serie_id]);

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
<h2><?php echo getTitle(); echo ' - ' . getRating(); ?></h2>

<form method="post" action="series_update.php">
<input type="hidden" name="id" value=<?php echo $serie_id;?>>
<label for="title">Titel</label>
<input type="text" name="title" value=<?php echo "'" . getTitle() . "'"; ?>>
<br></br>
<label for="duur">Rating</label>
<input type="duur" name="rating" value=<?php echo getRating(); ?>>
<br></br>
<label for="award">Has Won Award</label>
<input type="text" name="awards" value=<?php echo getAward();?>>
<br></br>
<label for="land_uitkomst">Seizoenen</label>
<input type="text" name="seasons" value=<?php echo getSeasons();?>>
<br></br>
<label for="omschrijving">Land</label>
<input type="text" name="country" value=<?php echo getCountry();?>>
<br></br>
<label for="trailer_id">Taal</label>
<input type="text" name="lang" value=<?php echo getLanguage();?>>
<br></br>
<label for="omschrijving">Omschrijving</label>
<textarea name="description" cols="30" rows="10"><?php echo getDescription(); ?></textarea>
<br></br>
<input type="submit" value="save">
</form>