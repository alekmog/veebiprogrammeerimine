<?php
 $name = "Aleksandr";
 $surname = "Mogilnõi";
 $dirToRead = "../../pics/";
 //$allFiles = scandir($dirToRead);
 $allFiles = array_slice(scandir($dirToRead), 2);
 
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

<img src="../../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra õppehoone">

<?php
for ($i = 0;$i <count($allFiles); $i ++){
echo '<img src="' .$dirToRead .$allFiles[$i] .'" alt="pilt"><br>';
}
?>
 </body>
</html>