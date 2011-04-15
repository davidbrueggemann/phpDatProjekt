<html>
	<body>
		<?php
			$lehrer = $_POST['lehrer_ID'];
			$kompetenz = $_POST['Kompetenz'];
			$stoffdarstellung = $_POST['Stoffdarstellung'];
			$lernklima = $_POST['Lernklima'];
			$notengebung = $_POST['Notengebung'];
			$schuelerfragen = $_POST['Schuelerfragen'];
			$souveraenitaet = $_POST['Souveraenitaet'];
			$kennwort = $_POST['kennwort'];

			$dbserver  = "localhost";
			$dbuser  = "dbrueggemann";
			$dbpasswort  = "Cochones1";
			$dbname  = "dbrueggemann";
			$dbh  = mysql_connect ($dbserver,  $dbuser, $dbpasswort) or die ("Fehler bei CONNECT");

			mysql_select_db ($dbname, $dbh) or die ("Fehler bei SELECT_DB");
			$sql = "INSERT INTO `_UF` (
				`ID_Umfrage` ,
				`Kompetenz` ,
				`Stoffdarstellung` ,
				`Lernklima` ,
				`Notengebung` ,
				`Schülerfragen` ,
				`Souveränität` ,
				`Kennwort` ,
				`ID_Lehrer`
				)
				VALUES (
				'' , '$kompetenz', '$stoffdarstellung', '$lernklima', '$notengebung', '$schuelerfragen', '$souveraenitaet', '$kennwort','$lehrer'
				);";
			
			mysql_query($sql,$dbh);
		
			echo "Eingabe: <br>";
			echo "Lehrer_ID: $lehrer <br>";
			echo "Kompetenz: $kompetenz <br>";
			echo "Stoffdarstellung: $stoffdarstellung <br>";
			echo "Lernklima: $lernklima <br>";
			echo "Notengebung: $notengebung <br>";
			echo "Lernklima: $lernklima <br>";
			echo "Sch&uuml;lerfragen: $schuelerfragen <br>";
			echo "Souver&auml;nit&auml;t: $souveraenitaet <br>";
			echo "Kennwort: $kennwort <br>";
		?>
		<a href = '../index.html'> zurück </a><br>
	</body>
</html>