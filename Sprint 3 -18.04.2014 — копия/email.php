<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
 <title>Oriflame</title> 
 <link href="styleemail.css" rel="stylesheet" type="text/css" />
 
</head>

<body>
	<table cellspacing="3px" align="center" >
		<!--THE FIRST ROW-->
		<tr bgcolor="#9933FF">
			<td colspan="3" height="140px" valign="center">
				<a style="text-decoration: none; color: #ffffff" href="http://karvanen.eu.gg">
					<div id="email">
						E-MAIL
					</div>
					
					<div id="logo">
						<img src="smalllogo.png" height="100px" style="border: none;">
					</div>
				</a>
			</td>
		</tr>
		
		<tr>
			<td width="20%" bgcolor="#d5ddde" valign="top">
				<div id="aside">
				</div>
			</td>
		
			<td width="60%" bgcolor="#d5ddde">
				<div id="context">
					Send to
						<select id="dropdown_menu" name="family_name">
							<?php
								require 'connect.php';
								$mysql_select = "SELECT FamilyName FROM customers ORDER BY FamilyName;";
								$result = mysql_query($mysql_select);
								while ($row = mysql_fetch_array($result)) {
									$FamilyName=$row["FamilyName"];
									echo "<option>
											$FamilyName
											</option>";	
											}
									while($row = mysql_fetch_array($result));
							?>
						</select>
					<br><br>
						
					<form  name="letter_form" action="send_email.php" method="post" enctype="text/plain">
						<textarea id="form" name="letter_text" placeholder="Your Message" cols="40" rows="10" ></textarea>
						<br><br>
						<input type="submit" value="Send" id="button">
						<br><br>
						<input type="reset" value="Reset" id="button">
				</div>
			</td>
			
			<td width="20%" bgcolor="#d5ddde" valign="top">
				<div id="aside">
				
				</div>
			</td>
		</tr>
	</table>	
</body>


</html>