<html>
	<body>
		<?php
			$dbserver = "localhost";
			$dbuser = "dbrueggemann";
			$dbpasswort = "Cochones1";
			$dbname = "dbrueggemann";
			$dbh = mysql_connect ($dbserver, $dbuser, $dbpasswort) or die ("Fehler bei CONNECT");
			
			mysql_select_db ($dbname, $dbh) or die ("Fehler bei SELECT_DB");

			$a = $_POST['loeschen'];
			
			foreach($a as $i)
			{
				$sql="delete from Gast where ID_gast=$i";
				echo "$sql";
				$result = mysql_query ($sql, $dbh) or die ("Fehler bei QUERY");
			}
			
			mysql_close($dbh);
			
		?>
	</body>
</html>
			
			