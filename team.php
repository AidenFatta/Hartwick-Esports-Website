<!DOCTYPE html>
<html>
	<head>
		<title>Wicked Esports: Teams</title>
		<link href="css/myStyle.css" rel="stylesheet">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		
		
		<?php
			$h1 = '<h1>';
			$h1End = '</h1>';
			
			$h3 = '<h3>';
			$h3End = '</h3>';
			
			print "$h1 Hartwick College WICKed Esports $h1End";
			
			$divClass = 'section'; # one of the classes defined in CSS file, myStyle.css inside css folder.
			$divFooter = "<div class='footer'>";
			
			$tr = '<tr>'; # store <tr> tag inside $tr variable. <tr> indicates start of row in a table.
			$trEnd = '</tr>'; # store </tr> tag inside $trEnd variable. </tr> indicates end of a row in a table.
			
			$td = "<td>"; # store <td> tag inside $td variable. <td> indicates start of a cell in a table.
			$tdEnd = "</td>"; # store </td> tag inside $tdEnd variable. </td> indicates end of a cell in a table.
			
			$table = "<table>"; # store <table> tag inside $table variable. <table> indicates start of a table in an HTML page.
			$tableEnd = "</table>"; # store </table> tag inside $tableEnd variable. </table> indicates end of a table in an HTML page.
			
			$div = "<div class=$divClass>"; # <div class='exercise'> indicates start of a new section that falls under 'exercise' class (CSS).
			$divEnd = "</div>"; # </div> indicates end of the section.
			
			$p = "<p>"; # <p> indicates start of a paragraph in an HTML page.
			$pEnd = "</p>"; # </p> indicates end of a paragraph in an HTML page.
			
			$lineBreak = '<br>'; # line break in HTML page.
			$lessThan = '&lt;'; # '<' symbol
			$greaterThan = '&gt;'; # '>' symbol
			
			$hr = "<hr>";
			
			$navClass = "navbar";
			$nav = "<nav class=$navClass>";
			$navEnd = "</nav>";
			
			$ul = "<ul>";
			$ulEnd = "</ul>";
			
			$li = "<li>";
			$liEnd = "</li>";
			
			$homePage = "<a href='index.php'>";
			$teamPage = "<a href='team.php'>";
			$eventPage = "<a href='event.php'>";
			$contactPage = "<a href='contact.php'>";
			$aEnd = "</a>";
			
		?>
			<nav class="navbar">
				<ul>
					<li> <a href="index.php">Home</a> </li>
					<li> <a href="team.php">Teams</a> </li>
					<li> <a href="events.php">Events</a> </li>
					<li> <a href="contact.php">Contacts</a> </li>
				</ul>
			</nav>
		
		<?php
			
			#Team info section - interact with database?
			print $div;
				print "$h3 MEET OUR TEAMS! $h3End";
				print $ul;
					print "$li $liEnd";
				print $ulEnd;
			print $divEnd;
			
			print $div;
				# Connect to our database
				$servername = 'database-1.cb6mgqukms11.us-east-2.rds.amazonaws.com';
				$username = 'admin';
				$password = 'WICKEDpassword';
				$myDB = "wickedesports";
				
				$conn = new mysqli($servername, $username, $password, $myDB);
				if ($conn->connect_error){
					die("Connection failed: " . $conn->connect_error);
				}
				# echo "Connected successfully" . $lineBreak;
				
				#Receive result from SQL query
				#Rocket League
				print $div;
					print "$p ROCKET LEAGUE $pEnd";
					$query = "SELECT * FROM players WHERE player_team1 = 'Rocket League' OR player_team2 = 'Rocket League' OR player_team3 = 'Rocket League'";
					$result = $conn->query($query);
						
					if ($result->num_rows>0) {
						while($row = $result->fetch_assoc()) {
							print $li;
								echo "First Name: " . $row["player_first_name"] . " Gamertag: " . $row["player_gamertag"] . $lineBreak;
							print $liEnd;
						}
					} else {
						echo "No current players";
					}
				print $divEnd;
				
				#Overwatch
				print $div;
					print "$p OVERWATCH $pEnd";
					$query = "SELECT * FROM players WHERE player_team1 = 'Overwatch' OR player_team2 = 'Overwatch' OR player_team3 = 'Overwatch'";
					$result = $conn->query($query);
						
					if ($result->num_rows>0) {
						while($row = $result->fetch_assoc()) {
							print $li;
								echo "First Name: " . $row["player_first_name"] . " Gamertag: " . $row["player_gamertag"] . $lineBreak;
							print $liEnd;	
						}
					} else {
						echo "No current players";
					}
				print $divEnd;
					
				#Valorant
				print $div;
					print "$p VALORANT $pEnd";
					$query = "SELECT * FROM players WHERE player_team1 = 'Valorant' OR player_team2 = 'Valorant' OR player_team3 = 'Valorant'";
					$result = $conn->query($query);
						
					if ($result->num_rows>0) {
						while($row = $result->fetch_assoc()) {
							print $li;
								echo "First Name: " . $row["player_first_name"] . " Gamertag: " . $row["player_gamertag"] . $lineBreak;
							print $liEnd;
						}
					} else {
						echo "No current players";
					}
				print $divEnd;
				
				#League of Legends
				print $div;
					print "$p LEAGUE OF LEGENDS $pEnd";
					$query = "SELECT * FROM players WHERE player_team1 = 'League of Legends' OR player_team2 = 'League of Legends' OR player_team3 = 'League of Legends'";
					$result = $conn->query($query);
						
					if ($result->num_rows>0) {
						while($row = $result->fetch_assoc()) {
							print $li;
								echo "First Name: " . $row["player_first_name"] . " Gamertag: " . $row["player_gamertag"] . $lineBreak;
							print $liEnd;
						}
					} else {
						echo "No current players";
					}
				print $divEnd;
				
				#Rainbow Six Siege
				print $div;
					print "$p RAINBOW SIX SIEGE $pEnd";
					$query = "SELECT * FROM players WHERE player_team1 = 'R6' OR player_team2 = 'R6' OR player_team3 = 'R6'";
					$result = $conn->query($query);
						
					if ($result->num_rows>0) {
						while($row = $result->fetch_assoc()) {
							print $li;
								echo "First Name: " . $row["player_first_name"] . " Gamertag: " . $row["player_gamertag"] . $lineBreak;
							print $liEnd;	
						}
					} else {
						echo "No current players";
					}
				print $divEnd;
				
				$conn->close();
				
			print $divEnd;
			
			function displayCopyrightInfo(){
				global $divFooter, $divEnd, $p, $pEnd, $hr;
				print $divFooter;
					print "$hr $p Copyright &copy; 2020 - 2024 Hartwick College WICKed Esports. All Rights Reserved. $pEnd $hr";
				print $divEnd;
			}	
			
		?>
	</body>
</html>