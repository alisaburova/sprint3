<?php
include('database.php');
 


if (array_key_exists('category', $_GET)) {
   $con=start_connection();
   $items = select_all($con, $_GET['category'], 'items');
	$con=start_connection();   
  $categories = select_all($con, '', 'category');  
  }
  else{
    $con=start_connection();
    $items = select_all($con, '', 'items');
	//$categories = select_all($con, '', 'category'); 
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
			<td colspan="3" height="140px" valign="center">
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
			<td width="20%" bgcolor="#d5ddde">
				<div id="aside">
				 
					<div id="contact-form">
						<!--<form method="get" action="delete_item.php">
							<fieldset>								
								<label for="FamilyName">FamilyName</label><br>
								DROPDOWN
							</fieldset>
						</form>
						-->
					</div>
				</div>
			</td>
		
			<td width="60%"  bgcolor="#d5ddde">
				<div id="context">
					<table id="catalogTable" cellspacing="3px" cellpadding="3px" border="1px solid white">
                        <?php		
							if(! empty( $items ) ){
                            foreach ($items as $item){
                                echo "<tr>
										<td>
										   $item->name
										</td>
										<td style='font-size:15px;'>
										   $item->description					
										</td>
										<td>
											<img src='$item->photo'/>					
										</td>  
										<td>
											$item->price
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
								<input type="text" name="Name"/><br>
								
								<label for="Price">Price</label><br>
								<input type="text" name="Price"/><br>
								
								<label for="Category">Category</label><br>
								<select name="Category">
								<?php
										foreach ($categories as $category){
											echo "
											<option value='$category->name'>$category->name</option>";
											}
								?>								 						 
								</select>
								
								<br>
								<label for="file">Photo</label><br>
								<input type="file" name="file" id="file"/><br>
								
								<label for="Description">Description</label><br>
								<input type="text" name="Description"/><br><br>
								
								<input type="submit" name="submit" id="submit" value="Save" />
							</fieldset>
						</form>
					</div>
				</div>
			</td>
		</tr>
	</table>	
</body>


</html>