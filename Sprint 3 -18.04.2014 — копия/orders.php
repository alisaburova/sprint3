<?php
require("connect.php");
$mysql_select = "SELECT FamilyName 
FROM customers";

$result = mysql_query($mysql_select);
$names = mysql_fetch_array($result);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
 <title>Oriflame</title> 
 <link href="styleorders.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<table cellspacing="3px" align="center" >
		<!--THE FIRST ROW-->
		<tr bgcolor="#9966FF">
			<td colspan="2" height="140px" valign="center">
				<a style="text-decoration: none; color: #ffffff" href="http://karvanen.eu.gg">
					<div id="order">
						ORDERS
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
				 <form  method="POST">
					Ordering <br><br>
					<input type="submit" name="dateOrder" id="button" value="By date" /><br><br>
					<input type="submit" name="customersOrder" id="button" value="By Customers" /><br><br>
				 </form>
				</div>
				
				<div id="aside">
					<form  method="POST">
						Sort by <br><br>
							<select id="dropdown_menu" name="All">
								<?php
									require 'connect.php';
									$mysql_select = "SELECT Status FROM orders;";
									$result = mysql_query($mysql_select);
									while ($row = mysql_fetch_array($result)) {
										$CategoryName=$row["Name"];
											echo "<option>
													$CategoryName
													</option>";
												}
									while($row = mysql_fetch_array($result));
								?>
							</select>
					</form>
				</div>
			</td>
		
			<td width="80%" bgcolor="#d5ddde">
				<div id="context">
					<table id="catalogTable" cellspacing="5px" cellpadding="5px">
						<tr>
							<th style="background: #9966FF; color: white; padding-left: 10px; text-align: left;">Order Id</th>
							<th style="background: #9966FF; color: white; padding-left: 10px; text-align: left;">Date</th>
							<th style="background: #9966FF; color: white; padding-left: 10px; text-align: left;">Items</th>
							<th style="background: #9966FF; color: white; padding-left: 10px; text-align: left;">TotalSum, euro</th>
							<th style="background: #9966FF; color: white; padding-left: 10px; text-align: left;">FirstName</th>
							<th style="background: #9966FF; color: white; padding-left: 10px; text-align: left;">FamilyName</th>
							<th style="background: #9966FF; color: white; padding-left: 10px; text-align: left;">Address</th>
							<th style="background: #9966FF; color: white; padding-left: 10px; text-align: left;">Phone</th>
							<th style="background: #9966FF; color: white; padding-left: 10px; text-align: left;">Email</th>
						</tr>
						<?php require 'show_orders.php';?>
				</div>
			</td>
		</tr>
	</table>	
</body>


</html>