<?php
require 'connect.php';
$Name = $_REQUEST['Name'];

$deleteSQL = "DELETE FROM items WHERE Name = '$Name'";
mysql_query($deleteSQL);
header('Location: http://kristiina.eu.gg/catalogue.php');
?>


