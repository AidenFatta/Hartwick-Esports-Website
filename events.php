<!DOCTYPE html>
<html>
	<head>
		<title>Wicked Esports: Events</title>
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
			
			print $div;
				print "$h3 EVENTS $h3End";
				print "$p As a club at Hartwick we hold at least one event per semester. $lineBreak These can be tournaments for any multiplayer games, holiday themed parties, 
				and the semester-end party, the LAN-Party, with other Hartwick clubs. $lineBreak You can see upcoming events here, on Hartlink, through our social media, or on campus flyers. We hope you can attend! $pEnd";
			print $divEnd;
			
			#Events Info section
			print $div;
				$servername = 'database-1.cb6mgqukms11.us-east-2.rds.amazonaws.com';
				$username = 'admin';
				$password = 'WICKEDpassword';
				$myDB = "wickedesports";
				
				$conn = new mysqli($servername, $username, $password, $myDB);
				if ($conn->connect_error){
					die("Connection failed: " . $conn->connect_error);
				}
				
				print "$h3 UPCOMING EVENTS $h3End";
				print $ul;
					$query = "SELECT * FROM events";
					$result = $conn->query($query);
					
					if ($result->num_rows>0) {
						while($row = $result->fetch_assoc()) {
							print $div;
								echo $row["event_name"] . $lineBreak . "Date: " . $row["date"];
							print $divEnd;
						}
					} else {
						echo "No announced events";
					}
				print $ulEnd;
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