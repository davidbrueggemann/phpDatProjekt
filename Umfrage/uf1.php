<html>
	<body>	
		<h1> David Br�ggemann / Aufgabe 2 </h1>
		<hr><br>
		<form action="uf1a.php" name="umfrage" method="post">
			<table border = '0'>
				<tr>
					<td>
						<h3>Lehrer:</h3>
						<br>
						<hr>
					</td>
					<td>
						<h3><select size = 'H�he' name = 'lehrer_ID'>
							<?php
								$dbserver = "localhost";
								$dbuser = "dbrueggemann";
								$dbpasswort = "Cochones1";
								$dbname = "dbrueggemann";
								$dbh = mysql_connect ($dbserver, $dbuser, $dbpasswort) or die ("Fehler bei CONNECT");
				
								mysql_select_db ($dbname, $dbh) or die ("Fehler bei SELECT_DB");
				
								$sql = "select * from Lehrer;";
								$result = mysql_query ($sql, $dbh) or die ("Fehler bei QUERY");
								while ($row=mysql_fetch_row($result))
								{
									echo "<option value=$row[0]> $row[3], $row[1] $row[2] </option>";
								}
								mysql_close();
							
							?>
							<optgroup label = 'Lehrerauswahl'>
							
							</optgroup>
						</select></h3>
						<br>
						<hr>
					</td>
				</tr>
				<tr>
					<td>
						<table border= '1'>
							<tr>		
								<?php
													
									for($i=1;$i<7;$i++)
									{	
										echo"<td>$i</td>\n";				
										
									}
									echo"</tr>";
									echo"<tr>";
									for($i=1;$i<7;$i++)
									{	
										echo"<td> <input type = 'radio' name = 'Kompetenz' value = '$i'> </td>\n";
										
									}

								?>
							</tr>
							
						</table>
						<br>
						
						<td>
							
							<b>Kompetenz:</b><br>
							1 = sehr kompetent / 6 = nicht  kompetent
							
						</td>
						
					</td>
				</tr>
                <tr><td>		
						<table border= '1'>
							
							<tr>		
								<?php
													
									for($i=1;$i<7;$i++)
									{	
										echo"<td>$i</td>\n";				
										
									}
									echo"</tr>";
									echo"<tr>";
									for($i=1;$i<7;$i++)
									{	
										echo"<td> <input type = 'radio' name = 'Stoffdarstellung' value = '$i'> </td>\n";
										
									}

								?>
							</tr>
							<tr>
						</table>
						<br>
					</td>
						
						<td>	
							<b>Stoffdarstellung:</b><br>
							1 = verst�ndlich / 6 = unverst�ndlich
						</td>
				</tr>
				<tr><td>
						<table border= '1'>
							
							<tr>		
								<?php
													
									for($i=1;$i<7;$i++)
									{	
										echo"<td>$i</td>\n";				
										
									}
									echo"</tr>";
									echo"<tr>";
									for($i=1;$i<7;$i++)
									{	
										echo"<td> <input type = 'radio' name = 'Lernklima' value = '$i'> </td>\n";
										
									}

								?>
							</tr>
						
						</table>
					
						<br></td>
						<td>
							
							<b>Lernklima:</b><br>
							1 = angenehm und produktiv / 6 = unangenehm und unproduktiv
							
						</td>
				</tr>
				<tr><td>
						<table border= '1'>
							
							<tr>		
								<?php
													
									for($i=1;$i<7;$i++)
									{	
										echo"<td>$i</td>\n";				
										
									}
									echo"</tr>";
									echo"<tr>";
									for($i=1;$i<7;$i++)
									{	
										echo"<td> <input type = 'radio' name = 'Notengebung' value = '$i'> </td>\n";
										
									}

								?>
							</tr>
						
						</table>
					
						<br></td>
						<td>
							
							<b>Notengebung:</b><br>
							1 = gerecht,nachvollziehbar / 6 = ungerecht,unverst�ndlich
							
						</td>
				</tr>
				<tr>
					<td>
						<table border= '1'>
							
							<tr>		
								<?php
													
									for($i=1;$i<7;$i++)
									{	
										echo"<td>$i</td>\n";				
										
									}
									echo"</tr>";
									echo"<tr>";
									for($i=1;$i<7;$i++)
									{	
										echo"<td> <input type = 'radio' name = 'Schuelerfragen' value = '$i'> </td>\n";
										
									}

								?>
							</tr>
						
						</table>
						<br>
						</td>
						<td>
							
							<b>Sch�lerfragen:</b><br>
							1 = werden ausf�hrlich beantwortet / 6 = werden nicht zugelassen
							
						</td>
				</tr>
				<tr>
					<td>
						<table border= '1'>
							
							<tr>		
								<?php
													
									for($i=1;$i<7;$i++)
									{	
										echo"<td>$i</td>\n";				
										
									}
									echo"</tr>";
									echo"<tr>";
									for($i=1;$i<7;$i++)
									{	
										echo"<td> <input type = 'radio' name = 'Souveraenitaet' value = '$i'> </td>\n";
										
									}

								?>
							</tr>
						
						</table>
						</td>
						<br>
						<td>
							
							<b>Souver�nit�t:</b><br>
							1 = souver�n,selbstsicher / 6 = unsicher
							
						</td>
						<br>
				</tr>
				<tr>
					<td>
						<table border='0'>
							<tr>
								<hr><br>
								<td>Kennwort:</td>
								<td><input name='kennwort' size=10 maxlength=20></td>
							</tr>
						</table>
					</td>
					<br>
				</tr>
				<tr>
					<td>
						<table border='0'>
								<hr><br>	
							<tr>
								<td><input type='reset' value='Zur&uuml;cksetzen'></td>
								<td><input type='submit' value='Abschicken'></td>
							</tr>
						</table>
					</td>
				</tr>
					</table>
				</tr>
			</table>
		</form>
	</body>
</html>
