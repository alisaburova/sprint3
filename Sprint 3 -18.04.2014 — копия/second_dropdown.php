<?php
include("database.php");

$con=start_connection();
$it = select_all($con, $_REQUEST["state"], 'items');
foreach($it as $i){
echo"<option value=".$i->name.">".$i->name."</option>";
} 
?>