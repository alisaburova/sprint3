<?php
require 'connect.php';
$FamilyName = $_REQUEST['FamilyName'];
$FirstName = $_REQUEST['FirstName'];
$Address = $_REQUEST['Address'];
$Phone = $_REQUEST['Phone'];
$Email = $_REQUEST['Email'];



$mysql_insert = "INSERT INTO customers (FamilyName, FirstName, Address, Phone, Email)".
"VALUES('{$FamilyName}','{$FirstName}','{$Address}','{$Phone}','{$Email}');";
mysql_query($mysql_insert) or die ("<p>Error of input ".mysql_error());

header('Location: http://karvanen.eu.gg/contacts.php');
?>

