<a href="index.php">Terug</a>

<h1>Nieuwe Serie</h1>

<form method="post" action="series_insert.php">
<input type="hidden" name="id">
<label for="title">Titel</label>
<input type="text" name="title">
<br></br>
<label for="duur">Rating</label>
<input type="duur" name="rating">
<br></br>
<label for="award">Has Won Award</label>
<input type="text" name="awards">
<br></br>
<label for="land_uitkomst">Seizoenen</label>
<input type="text" name="seasons">
<br></br>
<label for="omschrijving">Land</label>
<input type="text" name="country">
<br></br>
<label for="trailer_id">Taal</label>
<input type="text" name="lang">
<br></br>
<label for="omschrijving">Omschrijving</label>
<textarea name="description" cols="30" rows="10"></textarea>
<br></br>
<input type="submit" name="submit" value="create">
</form>