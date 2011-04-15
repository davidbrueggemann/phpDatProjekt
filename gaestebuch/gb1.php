<html>
	<body>
	<h1> David Brüggemann / Aufgabe 1 </h1>
	<hr>

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
				foreach ($row as $i)
				{
				echo "<td>$i</td>\n";
				}
				echo "</tr>\n";
				}
			mysql_close($dbh);
			
			?>

		</table>
	</body>
</html>
