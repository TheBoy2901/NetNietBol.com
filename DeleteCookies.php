<?php
setcookie("Prijs", "", time() - 3600);
setcookie("Bestelling", "", time() - 3600);
header("Location:bestel.php")
?>