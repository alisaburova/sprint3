<?php
include('database.php');


if (array_key_exists('cat_name', $_GET)) {
   
   $con=start_connection();
   $items = select_all($con, $_GET['cat_name'], 'items');
   $con=start_connection();   
  $categories = select_all($con, '', 'category');  
  }
  else{
    $con=start_connection();
    $items = select_all($con, '', 'items');
    //print_r($items);
  }
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	 <title>Oriflame</title> 
	 <link href="stylecatalogue.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<table cellspacing="3px" align="center" >
		<!--THE FIRST ROW-->
		<tr bgcolor="#9966FF">
			<td colspan="2" height="140px" valign="center">
				<a style="text-decoration: none; color: #ffffff" href="http://karvanen.eu.gg">
					<div id="catalogue">
						CATALOGUE
					</div>
					
					<div id="logo">
						<img src="smalllogo.png" height="100px" style="border: none;">
					</div>
				</a>
			</td>
		</tr>
		<tr>
			
			<td width="80%"  bgcolor="#d5ddde">
				<div id="context">
					<table id="catalogTable" cellspacing="3px" cellpadding="3px">
                        <?php		
							if(! empty( $items ) ){
                            foreach ($items as $item){
                                echo "<tr>
										<td style='text-align:center; color: #9966FF;'>
											<img style='width:70px;' src='$item->photo'/>					
										</td>  
										
										<td style='background: #9966FF; color: white;'>
										   $item->name
										</td>
										
										<td style='font-size:15px; color: #9966FF;'>
										   <b><i>$item->description</i></b>					
										</td>
										
										<td style='width:70px; text-align:center; color: #9966FF;'>
											<b>$item->price euro</b>
										</td>
									</tr>";
                            }
							}
                        ?>
                    </table>
				</div>
			</td>
			
			<td width="20%" bgcolor="#d5ddde" valign="top">
				<div id="aside">
				Add new item
					<div id="contact-form">					  
						<form enctype="multipart/form-data" action="new_item.php" method="post"  >
							<fieldset>								
								<label for="Name">Name</label><br>
								<input type="text" name="Name" id="input"/><br>
								
								<label for="Price">Price</label><br>
								<input type="text" name="Price" id="input"/><br>
								
								<label for="Category">Category</label><br>
									<select id="Category" name="Category" value="Category">
									   <?php
									   foreach($categories as $category){
									      echo "<option value='$category->name'>$category->name</option>";
									      
									   }?>
									</select>
								
								<br>
								
								<label for="Description">Description</label><br>
								<input type="text" name="Description" id="input"/><br><br>
								
								<label for="file">Photo</label><br>
								<input type="file" name="file" id="file"/><br><br>
								
								<input type="submit" name="submit" id="button" value="Save" />
							</fieldset>
						</form>
					</div>
				</div>
				<div id="aside">
					Delete item
					<div id="contact-form">
						<form method="get" action="delete_item.php">
							<fieldset>								
								<label for="FamilyName">Choose category</label><br>
									<select id="dropdown_menu" name="category">
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
								<br><br>
								<label for="FamilyName">Choose item</label><br>
									<select id="dropdown_menu" name="item">
										<?php
											require 'connect.php';
											$mysql_select = "SELECT Name FROM items ORDER BY Name;";
											$result = mysql_query($mysql_select);
											while ($row = mysql_fetch_array($result)) {
														$ItemName=$row["Name"];
															echo "<option>
																$ItemName
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
		</tr>
	</table>	
</body>


</html>