<!DOCTYPE html>
<html>
	<head>
		<title>Wicked Esports: Home</title>
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
			
			#Info Section
			print $div;
				print "$h3 WHAT ARE ESPORTS? $h3End";
				print "$p Esports are organized video game competitions, often tournament style, where players and teams from all over the world compete for prize money and recognition. 
				There are many Esports competitions around the world and across all gaming platforms.$pEnd";
				print $lineBreak;
				print "$p Tournaments such as The International, the League of Legends World Championship, 
				the Evolution Championship Series and the Intel Extreme Masters provide live broadcasts of the competition, and prize money to competitors.$pEnd";
				print $lineBreak;
				print "$p Esports are extremely popular with college-aged participants. An estimated 22% of American male millennials watch Esports,
				virtually equal with baseball and hockey in terms of viewership among that demographic, according to industry analyst NewZoo.$pEnd";
			print $divEnd;
			
			#3 Cs Section
			print $div;
				print "$h3 3 CS OF WICKED ESPORTS $h3End";
				print $tr;
				print "$td $p Connect - Club Life $lineBreak Not looking for hardcore competition? Looking for an accepting enviroment to enjoy video games with other students? 
				Join our gaming club and feel free to play games in our lounge with other members! $pEnd $tdEnd";
				print "$td $p Collab - Events $lineBreak Being apart of Wicked Esports gets you first dibs on entry into our tournaments and other events we host throughout the semester!$pEnd $tdEnd";
				print "$p Connect - Competition $lineBreak Playing on the Wicked Esports competitive teams lets you go head-to-head with schools across the country while learning more about strategy, teamwork, amd sportsmenship!$pEnd $tdEnd";
				print $trEnd;
			print $divEnd;
			
			#Offered Game Section - Alternatively replace text with images of game offered instead
			print $div;
				print "$h3 OFFERED GAMES $h3End";
				print "$p Through our partnership with PlayFly we currently offer these games: $lineBreak $pEnd";
					print $ul;
						print "$li ROCKET LEAGUE $liEnd";
						print "$li SUPER SMASH BROS ULTIMATE $liEnd";
						print "$li LEAGUE OF LEGENDS $liEnd";
						print "$li VALORANT $liEnd";
						print "$li OVERWATCH 2 $liEnd";
						print "$li RAINBOW SIX SIEGE $liEnd";
						print "$li CALL OF DUTY MODERN WARFARE III $liEnd";
						print "$li COUNTER-STRIKE 2 $liEnd";
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