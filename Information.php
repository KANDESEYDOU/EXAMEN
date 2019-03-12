<!DOCTYPE html>
<html>
<head>
	<title>FICHE D'INFORMATIONS</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	form{
		background-color: white;
        width: 50%;
	}
    label{
    	text-align: center;
    	text-align: none;
    }
    legend{
    	background-color: aqua;
    }
    footer{
    	text-align: center;
    	background-color: aqua;
    }
    body{
    	background-color: gray;
    	background-image: url(hacking.jpg);
    	background-repeat: no-repeat;
		background-size: 105%;
    }

    img{
    	font-size: 100%;
     }

</style>
<body>

	<div align="center">
	<form method="POST" action="recueil.php">
		<legend><br> VOS COORDONEES PERSONNELLES <br><br></legend>
		<fieldset>
		<table>
		<img src="téléchargé.png" width="15%" height="10%"><br><br><br>

		<label for="Prénom"><small>PRENOM </small></label>
		<input type="text" name="Prénom" placeholder="Votre Prénom"><br><br><br>

		<label for="Nom"><small> NOM </small></label>
		<input type="text" name="Nom" placeholder="Votre Nom"><br><br><br>

		<label for="ids"> <small>ADRESSE  </small></label>
		<input type="text" name="ids" placeholder=" DAKAR-SENEGAL "><br><br><br>

		<label for="Profession"> <small>PROFESSION </small></label>
		<input type="text" name="Profession" placeholder="ETUDIANT"><br><br><br>

		<input type="submit" name="Valider" align="rigth">
        </table><br><br><br><br><br><br><br>
	</form></fieldset></div>
	<footer width: 100% ><hr> 
	<p>Pour plus d'informations contactez-nous sur</p>
	<p>saidouyoussouphk@gmail.com    ou  le 77 667 49 07 </p><br><hr>
	</footer>
</body>
</html>