<?php
 $name = "Tundmatu";
 $surname = "inimene";
 //var_dump($_POST)
 if (isset($_POST["firstName"])){
	 $name = $_POST["firstName"];
 }
 if (isset($_POST["surName"])){
	 $surname = $_POST["surName"];
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
<?php
	echo $name;
	echo $surname;
?>
</title>
</head>
<body>
<h1> 
<?php
echo $name ." " .$surname;
?>
</h1>
<p>September <a href="http://www.tlu.ee" target="_blank"> 10th</a>, 2018.</p>
<hr>
<form method="POST">
<label>Eesnimi: </label>
<input name="firstName" type="text" value="">
<label>perekonnanimi: </label>
<input name="surName" type="text" value="">
<label>Sünniaasta</label>
<input name="birthYear" type="number" min="1914" max="2003" value="1998">
<br>
<input name="submitUserData" type="submit" value="Saada andmed">
</form>
<?php
if (isset($_POST["submitUserData"])){
	echo "<br><p>Olete elanud järgnevatel aastatel:</p>";
	echo "<ul> \n";
	for ($i = $_POST["birthYear"]; $i <=date("Y"); $i++){
		echo "<li>" . $i ."</li> \n";
	}
}
?>
 </body>
</html>