<?php
 //echo "siin on minu esimene PHP!";
 $name = "Aleksandr";
 $surname = "Mogilnõi";
 $todayDate = date("d.m.Y");
 $hourNow = date("H");

 echo $hourNow;
 $partOfDay = "surramurra";
 if ($hourNow < 8){
		$partOfDay = "Varajane hommik";
		}
 if ($hourNow >= 8 and $hourNow < 16) {
		$partofday = "kooliaeg";
	}
if ($hourNow >= 16) {
		$partOfDay = "Vaba aeg";
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
<?php
echo "<p> Tänane kuupäev on: " .$todayDate . "</p> \n";
echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .", käes on " .$partOfDay .".</p>";
?>
<!--<img src="../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra õppehoone">-->
<!--This means that this is a comment and means nothing else-->
<img src="../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra õppehoone">
<p>Minu pinginaabri <a href="../../~braijul/" target="_blank">veeb.</a>
</body>
</html>