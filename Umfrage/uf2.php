<html>
<body>
  	<h1>David Br&uuml;ggemann / Aufgabe 2 / Umfrage auswerten</h1>
  	<hr>
	<?php
		$kennwort = $_POST['kennwort'];
		if($kennwort == "")
		{
			echo "<b>kein Kennwort angegeben</b><br>";
		}
		else
		{
			echo "Kennwort:<b> $kennwort</b><br>";
		}


		$dbserver  = "localhost";
  		$dbuser  = "dbrueggemann";
  		$dbpasswort  = "Cochones1";
	  	$dbname  = "dbrueggemann";
  		$dbh  = mysql_connect ($dbserver,  $dbuser, $dbpasswort) or die ("Fehler bei CONNECT");


  		mysql_select_db ($dbname, $dbh) or die ("Fehler bei SELECT_DB");

		$sql = "SELECT Kürzel,Vorname,Nachname, AVG(Kompetenz),AVG(Stoffdarstellung),AVG(Lernklima),AVG(Notengebung),AVG(Schülerfragen),AVG(Souveränität) 
			 FROM Lehrer,_UF 
			 WHERE Lehrer.ID_Lehrer = _UF.ID_Lehrer AND Kennwort='$kennwort' GROUP BY Lehrer.ID_Lehrer";

		$query = mysql_query($sql,$dbh);
		
		while($row = mysql_fetch_row($query))
		{	
			echo "<br>";
			echo "<table border='0'>";
			echo"<tr>";
			echo "<td><b>Lehrer:</b></td>";
			echo "<td><b>$row[0], $row[1] $row[2]</b></td></tr>";
			echo "<tr><td>Kompetenz:</td><td>$row[3]</td></tr>";				
			echo "<tr><td>Stoffdarstellung:</td><td>$row[4]</td></tr>";
			echo "<tr><td>Lernklima:</td><td>$row[5]</td></tr>";
			echo "<tr><td>Notengebung:</td><td>$row[6]</td></tr>";
			echo "<tr><td>Schülerfragen:</td><td>$row[7]</td></tr>";
			echo "<tr><td>Souveränität:</td><td>$row[8]</td></tr>";
			echo "</table><br>";
		}
		
		mysql_close($dbh);
	?>
	<a href = '../index.html'> zurück </a><br>
</body>
</html>
