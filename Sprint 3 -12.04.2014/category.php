<?php
include ('database.php');
   $con=start_connection();
   $categories = select_all($con, '', 'category');
// print_r($categories);
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	 <title>Oriflame</title> 
	 <link href="stylecatalogue.css" rel="stylesheet" type="text/css" />
	 <style>
		  #button{
			   width: 250px;
			   height: 150px;
		  }
	 </style>
</head>

<body>
	<table cellspacing="3px" >
		<!--THE FIRST ROW-->
		<tr bgcolor="#9966FF">
			<td colspan="3" height="140px" valign="center">
				<a style="text-decoration: none; color: #ffffff" href="http://karvanen.eu.gg">
					<div id="catalogue">
						CATEGORY
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
				</div>
			</td>
		
		  <td width="60%" bgcolor="#d5ddde">
				<div id="context">
						<form action='catalogue.php' method='get'>
                            <?php
			    
                                foreach ($categories as $category){
				    if(!empty($category)){
					     /*echo "<div id='itemStyle'>
					     <img src='$category->photo'/>
					     <input type='submit' id='button' name='category' value='$category->name'/>
					     </div>";*/
					     echo "<div id='catStyle'>	
					     <input type='image' name='cat_name'  value='$category->name' src='$category->photo'/>						   
					     </div>";
					    
					  }
				    }?>
						</form>
                   
				</div>
			</td>
			
			<td width="20%" bgcolor="#d5ddde">
				<div id="aside" >
				</div>
			</td>
		</tr>
	</table>	
</body>


</html>