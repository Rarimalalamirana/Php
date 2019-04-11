<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="bonjour.php" method="post" enctype="multipart/form-data">
	<input type="file" name="monfichier"><br>
<label>name</label>
	<input type="text" name="name"><br>
	<p>Etant en colere vous :</p>
	<select name="select">
    <option>Manger</option>
    <option >Danser</option>
    <option>Pleure</option>		
	</select><br>
	<br>
	<input type="radio" name="case" value="femme"><label for="case">Femme</label>
	<input type="radio" name="case" value="homme"><label for="case">homme</label><br>
		<input type="submit" name="valider"><br>
</form>
</body>
</html>