<?php
 //echo "siin on minu esimene PHP!";
 $name = "Aleksandr";
 $surname = "Mogilnõi";
  $todayDate = date("d.m.Y"); 
  $hourNow = date("H");
  $partOfDay = "";
  $weekDayNow = date("N");
  echo $weekDayNow;
  $weekDayNamesET = ["esmaspäev", "teisipäev", "kolmapäev", "neljapäev", "reede", "laupäev", "pühapäev"];
  var_dump ($weekDayNamesET);
  echo $weekDayNamesET [0];
 if ($hourNow < 8){
		$partOfDay = "varajane hommik";
		}
 if ($hourNow >= 8 and $hourNow < 16) {
		$partOfDay = "kooliaeg";
	}
if ($hourNow >= 16) {
		$partOfDay = "vaba aeg";
}

//Loosime juhusliku pildi
$picNum = mt_rand(2, 43);//random
//echo $picNum;
$picURL = "http://www.cs.tlu.ee/~rinde/media/fotod/TLU_600x400/tlu_";
$picEXT = ".jpg";
$picFileName = $picURL .$picNum .$picEXT;
//echo picFileName;
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
echo "<p> Täna on " .$weekDayNamesET[$weekDayNow - 1] .", " .$todayDate . "</p> \n";
echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .", käes on " .$partOfDay .".</p> \n";
?>
<!--<img src="../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra õppehoone">-->
<!--This means that this is a comment and means nothing else-->
<img src="../../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra õppehoone">
<p>Minu pinginaabri <a href="../../../../~braijul/" target="_blank">veeb.</a></p>

<img src="<?php echo $picFileName; ?>" alt="Juhuslik pilt Tallinna Ülikoolist">
</body>
</html>