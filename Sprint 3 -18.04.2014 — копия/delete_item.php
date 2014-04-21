<?php
require 'connect.php';
$chosen_item=  $_POST['good'];
$deleteSQL = "DELETE FROM items WHERE Name = '$chosen_item';";

echo $deleteSQL;
//echo "<br>";
//mysql_query($deleteSQL);
header('Location: http://karvanen.eu.gg/catalogue.php');
?>


