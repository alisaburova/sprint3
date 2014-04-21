<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
 <title>Oriflame</title> 
 <link href="styleneworder.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<table cellspacing="3px" align="center" >
		<!--THE FIRST ROW-->
		<tr bgcolor="#9966FF">
			<td colspan="3" height="140px" valign="center">
				<a style="text-decoration: none; color: #ffffff" href="http://karvanen.eu.gg">
					<div id="neworder">
						NEW ORDER
					</div>
					
					<div id="logo">
						<img src="smalllogo.png" height="100px" style="border: none;">
					</div>
				</a>
			</td>
		</tr>
		
		<tr>
			<td width="50%" bgcolor="#d5ddde" valign="top">
				<div id="aside">
					ADD NEW ORDER <br>
						<div id="contact-form">
							<form method="get" action="add_new_order.php" style="box-shadow: 0 0 10px rgba(0,0,0,0.5);padding: 20px; min-height:250px; height:100%;">
								<table id="1" style="height:250px;">	
									<tr>
										<td>
											<label for="FamilyName">Family name</label>
										</td>	
										<td>
											<input type="text" name="FamilyName" id="input"/>
										</td>
									</tr>
									<tr>
										<td>
											<label for="FirstName">First name</label>
										</td>	
										<td>
											<input type="text" name="FirstName" id="input"/>
										</td>
									</tr>
									<tr>
										<td>
											<label for="Phone">Phone</label>
										</td>	
										<td>
											<input type="text" name="Phone" id="input"/><br>
										</td>
									</tr>
									<tr>
										<td>
											<label for="Address">Address</label>
										</td>	
										<td>
											<input type="text" name="Address" id="input"/><br>
										</td>
									</tr>	
									<tr>
										<td>
											<label for="Email">Email</label>
										</td>
										<td>
											<input type="text" name="Email" id="input"/><br>
										</td>
									</tr>	
									<tr>
										<td>
											<label for="Items">Items</label>
										</td>	
										<td><!--CATEGORY-->
											<select id="dropdown_menu" name="dd" value="Category">
											<option value="">Choose</option>
												<?php
													require 'connect.php';
													$mysql_select = "SELECT Name FROM category ORDER BY Name;";
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
											<!--ITEMS-->
											<select id="dropdown_menu" name="dd" value="Items">
											<option value="">Choose</option>
												<?php
													require 'connect.php';
													$mysql_select = "SELECT Name FROM items ORDER BY Name;";
													$result = mysql_query($mysql_select);
													while ($row = mysql_fetch_array($result)) {
														$ItemsName=$row["Name"];
															echo "<option>
																$ItemsName
																</option>";				
													}
													while($row = mysql_fetch_array($result));
												?>
											</select>
										</td>
									</tr>	
									<tr>
										<td>
										</td>
										<td>
											<input type="submit" name="submit" style="box-shadow: 0 0 10px rgba(0,0,0,0.5);" value="Add item" />
										</td>
									</tr>
								</table>
								<input type="submit" name="submit" id="button" value="Submit" />
							</form>
						</div>
				</div>
			</td>
		
			<td width="50%" bgcolor="#d5ddde" valign="top">
				<div id="aside">
					ADD ORDER TO EXISTING CONTACT
						<div id="contact-form">
							<form method="get" action="add_to_order.php" style="box-shadow: 0 0 10px rgba(0,0,0,0.5); padding: 20px; min-height:250px; height:100%;">							
								<table id="1" style="height:250px;">	
									<tr>
										<td>
											<label for="FamilyName">Family name</label>
										</td>	
										<td>
											<select id="dropdown_menu" name="dd">
												<option value="">Choose</option>
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
										</td>
									</tr>
									<tr>
										<td>
											<label for="Items">Items</label>
										</td>	
										<td><!--CATEGORY-->
											<select id="dropdown_menu" name="dd" value="Category">
											<option value="">Choose</option>
												<?php
													require 'connect.php';
													$mysql_select = "SELECT Name FROM category ORDER BY Name;";
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
											<!--ITEMS-->
											<select id="dropdown_menu" name="dd" value="Items">
											<option value="">Choose</option>
												<?php
													require 'connect.php';
													$mysql_select = "SELECT Name FROM items ORDER BY Name;";
													$result = mysql_query($mysql_select);
													while ($row = mysql_fetch_array($result)) {
														$ItemsName=$row["Name"];
															echo "<option>
																$ItemsName
																</option>";
													}
													while($row = mysql_fetch_array($result));
												?>
											</select>
										</td>
									</tr>	
									<tr>
										<td>
										</td>
										<td>
											<input type="submit" name="submit" style="box-shadow: 0 0 10px rgba(0,0,0,0.5);" value="Add item" />
										</td>
									</tr>
								</table>
								<input type="submit" name="submit" id="button" value="Submit" />
							</form>
						</div>
				</div>
			</td>
		</tr>
	</table>	
</body>


</html>