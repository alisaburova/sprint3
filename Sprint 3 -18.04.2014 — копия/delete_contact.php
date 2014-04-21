<?php
require 'connect.php';
$FamilyName = $_GET['family_name'];
$deleteSQL = "DELETE FROM customers WHERE FamilyName = '$FamilyName'";
mysql_query($deleteSQL);
header('Location: http://karvanen.eu.gg/contacts.php');
?>


