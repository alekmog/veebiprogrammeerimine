<?php
require ("../../../config.php");
//echo $GLOBALS["serverHost"];
//echo $GLOBALS["serverUsername"];
//echo $GLOBALS["serverPassword"];
$database = "if18_aleks_mo_1";
function saveAMsg($msg) {
	//echo "Töötab!";
	$notice = ""; //see on teade, mis antakse salvestamise kohta
	//loome ühenduse andmebaasiserveriga
	$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
	//Valmistame ette SQL päringu. stmt käsk on õpetaja miatse järgi.
	$stmt = $mysqli->prepare("INSERT INTO VPamsg (message) VALUES (?)");
	echo $mysqli->error;
	$stmt->bind_param("s",$msg); //s - string/tekst, i - integer/täisarv, d - decimal
	if( $stmt->execute()){
		$notice = 'Sõnum: "' . $msg .'" on salvestatud!';
		} else {
			$notice = "Sõnumi salvestamisel tekkis tõrge: " .$stmt-> error;
		}
	$stmt->close();
	$mysqli->close();
	return $notice;
	}
?>