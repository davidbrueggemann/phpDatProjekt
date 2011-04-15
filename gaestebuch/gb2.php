<html>
	<body>
		<?php
			$dbserver = "localhost";
			$dbuser = "dbrueggemann";
			$dbpasswort = "Cochones1";
			$dbname = "dbrueggemann";
			$dbh = mysql_connect ($dbserver, $dbuser, $dbpasswort) or die ("Fehler bei CONNECT");
			
			mysql_select_db ($dbname, $dbh) or die ("Fehler bei SELECT_DB");
		
			$name = $_POST['name'];
			$email = $_POST['email'];
			$text = $_POST['text'];
			
			$sql = "insert into Gast (`ID_Gast`, `Name`, `Email`, `Text`)
			values ('', '$name', '$email', '$text');";
			
			$result = mysql_query ($sql, $dbh) or die ("Fehler bei QUERY");
			
			if($result==1)
				$result="erfolgreich";
			if($result=="Fehler bei QUERY")
				$result="nicht";
				
			echo "Sendung $result abgeschickt";
			
			mysql_close($dbh);
		?>
	</body>
</html>