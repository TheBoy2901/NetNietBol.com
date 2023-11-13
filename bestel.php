	<?php

	$PlaatjesToevoegen = $_GET["plaatje"];
	$PrijsToevoegen = $_GET["prijs"];
	$BestellingToevoegen = $_GET["product"];

//Prijs cookie
if (!empty($PrijsToevoegen)){
	if(!isset($_COOKIE[$cookie_naam_Prijzen])) {
		$cookie_naam_Prijzen = "Prijs";
		$prijs = json_decode($_COOKIE["Prijs"]);
		$prijs[] = $PrijsToevoegen;
		$cookie_value_Prijzen = json_encode($prijs);
		setcookie($cookie_naam_Prijzen, $cookie_value_Prijzen, time() + (600 * 30));
		header("Location:Reset.php");
	}

	else {
		$cookie_naam_Prijzen = "Prijs";
		$cookie_value_Prijzen = json_encode($PrijsToevoegen);
		setcookie($cookie_naam_Prijzen, $cookie_value_Prijzen, time() + (600 * 30)); // 86400 = 1 dag //zetten van de cookie
		$prijs = json_decode($_COOKIE["Prijs"]);

	}
	}
	else{
		$prijs = json_decode($_COOKIE["Prijs"]);
	}

//Naam van bestelling cookie
if (!empty($BestellingToevoegen)){
	if(!isset($_COOKIE[$cookie_naam_Bestelling])) {
		$cookie_naam_Bestelling = "Bestelling";
		$bestelling = json_decode($_COOKIE["Bestelling"]);
		$bestelling[] = $BestellingToevoegen;
		$cookie_value_Bestelling = json_encode($bestelling);
		setcookie($cookie_naam_Bestelling, $cookie_value_Bestelling, time() + (600 * 30));
		header("Location:Reset.php");
	}

	else {
		$cookie_naam_Bestelling = "Bestelling";
		$cookie_value_Bestelling = json_encode($BestellingToevoegen);
		setcookie($cookie_naam_Bestelling, $cookie_value_Bestelling, time() + (600 * 30)); // 86400 = 1 dag //zetten van de cookie
		$bestelling = json_decode($_COOKIE["Bestelling"]);

	}
	}
	else{
		$bestelling = json_decode($_COOKIE["Bestelling"]);
	}
	?>

	<html>
	<head>
	<link rel="stylesheet" href="stijl.css">

	<ul>

	<li><a href="index.php" style="padding: 0px" ><img src="scrum.png" width="60" height="45"></a></li>
	<li><a href="index.php">Home</a></li>
	  <li class="dropdown">
	  <a href="javascript:void(0)" class="dropbtn2">Catogoriën</a>
	    <div class="dropdown-content">
	      <a href="AutoEnMotor.php">Auto en Motor</a>
	      <a href="Computers.php">Computers</a>
	      <a href="Elektronica.php">Elektronica</a>
	      <a href="Games.php">Games</a>
	      <a href="Speelgoed.php">Speelgoed</a>
	      <a href="Verzorging.php">Verzorging</a>
	    </div>
	  </li>

	<li><a href="bestel.php" class="active">Winkelwagen</a></li>

	  <li style="float: right" class="dropdown">
	    <a href="javascript:void(0)" class="dropbtn">Klantenservice</a>
	    <div class="dropdown-content">
	      <a href="#">Contact</a>
	      <a href="#">Over ons</a>
	    </div>
	  </li>

	</ul>

	<title>Bol.com</title>
	</head>

	<body>
	<h><b>🛒Winkelwagen:</b></h>

	<?php
	$Totaal = 0;
	for($i = 0; $i < count($prijs); $i++){
		echo "<br>";
		echo $bestelling[$i] ."&nbsp;";
		echo "€";
		echo $prijs[$i];
		$Totaal = $Totaal + $prijs[$i];
	}
	echo "<br>";
	echo "Totaal = ";
	echo $Totaal;
	?>
	</br>
	<button type="button" onclick="location.replace('DeleteCookies.php')">Clear winkelwagen</button>
	<button type="button" onclick="alert('Uw bestelling is geplaatst')">Bestel</button>
	<link rel="icon" type="image/x-icon" href="/plaatjes/scrum.JPG">

	</body>

	</html>