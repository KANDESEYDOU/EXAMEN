<!DOCTYPE html>
<html>

<style type="text/css">
	body{
		background-color: white;
	}
	div, h2 {
		text-align: center;
	}
	table{
		 width: 50%;
		 border-color: blue;
	}
	fieldset{
		background-image: url(im.jpg);
		background-repeat: no-repeat;
		background-size: 120%;
	}
</style>
<head>
	<title>COORDONEES PERSONNELLES</title><br><br>
	<h2>LES INFORMATIONS DONNEES PAR L'UTILISATEUR</h2><br><br>
</head>

<body>
<fieldset>
<table>
<div><br>
<?php
	if(isset($_POST['Prénom'])){
	 echo "PRENOM ";
	 echo "  ";
     echo $_POST['Prénom'] ; 
} ?>  <br><br><br>
<?php
if(isset($_POST['Nom'])){
	 echo "NOM  ";
	 echo "  ";
     echo $_POST['Nom'] ; 
} ?>  <br><br><br>
<?php
if(isset($_POST['ids'])){
	echo "ADRESSE  ";
	echo "  ";
    echo $_POST['ids'] ;
} ?><br><br><br>
<?php
if(isset($_POST['Profession'])){
	echo "PROFESSION  ";
	echo "  ";
    echo $_POST['Profession'] ;
} ?> <br><br><br>
<h2>INFORMATION TRANSMISE AVEC SUCCES<br><br></h2><br>
</div>
</table>
</body>
</fieldset>
</html>