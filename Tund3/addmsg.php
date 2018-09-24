<?php
require("functions.php");
$notice = null;

  if(isset($_POST["submitMessage"])){
	  if($_POST["message"] != "Kirjuta siia oma sõnum ..." and !empty($_POST["message"])) {
		  $notice = "Sõnum olemas!";
		  $notice = saveAMsg($_POST["message"]);
	  } else {
		  $notice = "Palun kirjutage sõnum!";
	  }
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sõnumi lisamine</title>

</head>
<body>
	<h1> Sõnumi lisamine </h1>
<p>September <a href="http://www.tlu.ee" target="_blank"> 10th</a>, 2018.</p>
<hr>

<form method="post" action="<?php echo htmlspecialchars
($_SERVER["PHP_SELF"]);?>">
 <label> Sõnum (max 256 märki):</label>
 <br>
 <textarea rows="4" cols="64" name="message">Kirjuta siia oma sõnum ...</textarea>
 <br>
  <input name="submitMessage" type="submit" value="Salvesta sõnum">
</form>
<br>
<p>
<?php	
	echo $notice;
?>
 </body>
</html>