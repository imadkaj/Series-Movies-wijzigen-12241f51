<a href="index.php">Terug</a>
<br></br>
<h1>Nieuwe film</h1>
<br></br>
<form method="post" action="films_insert.php">
<label for="title">Titel</label>
<input type="text" name="title">
<br></br>
<label for="duur">Duur</label>
<input type="duur" name="duur">
<br></br>
<label for="datum_uitkomst">Datum van uitkomst</label>
<input type="text" name="datum">
<br></br>
<label for="land_uitkomst">Land van uitkomst</label>
<input type="text" name="land">
<br></br>
<label for="omschrijving">Omschrijving</label>
<textarea name="omschrijving" cols="30" rows="10"></textarea>
<br></br>
<label for="trailer_id">Trailer id</label>
<input type="text" name="trailer_id">
<br></br>
<input type="submit" value="Create">
</form>