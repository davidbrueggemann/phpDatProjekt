<html>
	<body>	
		<?php
		
			function db_connect ($dbname)
			{
				$dbserver = "localhost";
				$dbuser = "dbrueggemann";
				$dbpasswort = "Cochones1";
				//$dbname = "dbrueggemann";
				$dbh = mysql_connect ($dbserver, $dbuser, $dbpasswort) or die ("Fehler bei CONNECT");
				mysql_select_db ($dbname, $dbh) or die ("Fehler bei SELECT_DB");
				
				return($dbh);
			}
			function db_query ($sql, $dbh)
			{
				$query = mysql_query($sql,$dbh) or die ("Fehler bei QUERY");
				
				return($query);
			}
			function db_show_query ($sql, $dbh)
			{
				$result = db_query($sql, $dbh);
				
				while ($row=mysql_fetch_row($result))
				{
				echo "<tr>\n";
				foreach ($row as $i)
				{
				echo "<td>$i</td>\n";
				}
				echo "</tr>\n";
				}
			}
			function db_create_checkbox ($sql, $dbh, $name)
			{
				$result = db_query($sql, $dbh);
				
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
				
			}
			function db_exist ($sql, $dbh)
			{
				$result = db_query ($sql, $dbh);
				
				if($result)
					return(true);
				elseif($result=="Fehler bei QUERY")
					return(false);
				else
					return(false);
			}
			function db_close($dbh)
			{
				mysql_close($dbh);
			}
			function zeigeParameter()
			{
				
			}
		?>
	</body>
</html>
