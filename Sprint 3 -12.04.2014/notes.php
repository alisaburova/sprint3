<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
 <title>Oriflame</title> 
 <link href="stylenotes.css" rel="stylesheet" type="text/css" />
 
</head>

<body>
	<table cellspacing="3px" align="center" >
		<!--THE FIRST ROW-->
		<tr bgcolor="#9900FF">
			<td colspan="3" height="140px" valign="center">
				<a style="text-decoration: none; color: #ffffff" href="http://karvanen.eu.gg">
					<div id="notes">
						NOTES
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
				Delete note
					<div id="contact-form">
						<form method="get" action="delete_note.php">
							<fieldset>								
								<label for="Id">Choose the ID</label><br>
									<select id="dropdown_menu" name="Id" value="Id">
										<?php
											require 'connect.php';
											$mysql_select = "SELECT Id FROM notes;";
											$result = mysql_query($mysql_select);
											while ($row = mysql_fetch_array($result)) {
												$Id=$row["Id"];
													echo "<option>
														$Id
														</option>";				
											}
											while($row = mysql_fetch_array($result));
										?>
								</select>
								<br><br>
								<input type="submit" name="submit" id="button" value="Delete" />
							</fieldset>
						</form>
					</div>
				</div>
			</td>
		
			<td width="60%" bgcolor="#d5ddde">
				<div id="context">
					<table id="contactsTable">
						<th style="background: #9933FF; color: white; padding-left: 10px; width: 10%;">
							Id
						</th>
						<th style="background: #9933FF; color: white; padding-left: 10px; width: 60%;">
							Note
						</th>
						<th style="background: #9933FF; color: white; padding-left: 10px; width: 30%;">
							DeadLine
						</th>
						<?php require 'show_notes.php';
						?>
					</table>
				</div>
			</td>
			
			<td width="20%" bgcolor="#d5ddde" valign="top">
				<div id="aside">
				Add new note
					<div id="contact-form">
						<form method="get" action="new_note.php">
							<fieldset>								
								<label for="Note">Note</label><br>
								<input type="text" name="Note"/><br>
								
								<label for="DeadLine">DeadLine</label><br>
								<input type="text" name="DeadLine"/><br><br>
								
								<input type="submit" name="submit" id="button" value="Add" />
							</fieldset>
						</form>
					</div>
				</div>
			</td>
		</tr>
	</table>	
</body>


</html>