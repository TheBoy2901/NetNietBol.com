<!doctype html>
<html>
<head>
<link rel="stylesheet" href="stijl.css">

<ul>

<li><a href="index.php" style="padding: 0px" ><img src="scrum.png" width="60" height="45"></a></li>

<li><a class="active" href="index.php">Home</a></li>

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
 
      
  <li style="float: right" class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Klantenservice</a>
    <div class="dropdown-content">
      <a href="#">Contact</a>
      <a href="#">Over ons</a>
    </div>
  </li>

</ul>

</head>
<style>
h1 {
  color:red;
}

#productContainer{
display: flex;
justify-content: space-between;
}

.product{
display: flex;
flex-direction: column;
align-items: center;
}
</style>
<body>

<center><h1>Bekijk onze topdeals</h1></center>
<br>
<br>
<div id="productContainer">
    <div class="product">
        <a href="bestel.php?product=parkeerschijf&prijs=100&plaatje=parkeerschijf.jpg">
          <img src="ExamplePlaatjes/fc24.png" width="300" height="350">
        </a>
      <h2>EAFC 24 PS5</h2>
        <h1>64,99</h1>
    </div>
    <div class="product">
        <a href="bestel.php?product=parkeerschijf&prijs=100&plaatje=parkeerschijf.jpg">
          <img src="ExamplePlaatjes/motorfest.png" width="300" height="350">
        </a>
        <h2>The Crew Motorfest PS5</h2>
        <h1>64,99</h1>
    </div>
    <div class="product">
        <a href="bestel.php?product=parkeerschijf&prijs=100&plaatje=parkeerschijf.jpg">
          <img src="ExamplePlaatjes/goatsim3.png" width="300" height="350">
        </a>
        <h2>Goat Simulator PS5</h2>
        <h1>19,99</h1>
    </div>
  <div class="product">
        <a href="bestel.php?product=parkeerschijf&prijs=100&plaatje=parkeerschijf.jpg">
          <img src="ExamplePlaatjes/iphone15.png" width="300" height="350">
        </a>
        <h2>Iphone 15</h2>
        <h1>997,05</h1>
    </div>

</div>

<a href="bestel.php?product=parkeerschijf&prijs=100&plaatje=parkeerschijf.jpg"><img src="ExamplePlaatjes/iphone15.png" width="300" height="350"></a>
&nbsp;
&nbsp;
<a href="bestel.php?product=parkeerschijf&prijs=100&plaatje=parkeerschijf.jpg"><img src="ExamplePlaatjes/jblparty.png" width="350" height="350"></a>
   
<title>Bol.com</title>
<link rel="icon" type="image/x-icon" href="/plaatjes/scrum.JPG">
</body>
</html>