<html>
	<body>
	<h1> David Br�ggemann / Aufgabe 1 </h1>
	<hr>
		<form action = 'gb3a.php' method = 'post'>
		<table border = '1'>

			<?php

			$dbserver = "localhost";
			$dbuser = "dbrueggemann";
			$dbpasswort = "Cochones1";
			$dbname = "dbrueggemann";
			$dbh = mysql_connect ($dbserver, $dbuser, $dbpasswort) or die ("Fehler bei CONNECT");
			
			mysql_select_db ($dbname, $dbh) or die ("Fehler bei SELECT_DB");
			
			$sql = "select * from Gast";
			$result = mysql_query ($sql, $dbh) or die ("Fehler bei QUERY");
			
			while ($row=mysql_fetch_row($result))
				{
				echo "<tr>\n";
				echo "<td><input type = 'checkbox' name = 'loeschen[ ]' value = '$row[0]'></td>\n";
				
				foreach ($row as $e)
				{
					echo "<td>$e</td>\n";
				}
				echo "</tr>\n";
				
				}
				
			mysql_close($dbh);
			
			?>
		</table>
	<input type="submit" name="l�schen" value="Datens�tze l�schen"><input type="reset" name="reset" value="Auswahl aufheben">
	</body>
</html>
