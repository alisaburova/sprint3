<?php
require 'connect.php';
$FamilyName = $_REQUEST['FamilyName'];
$FirstName = $_REQUEST['FirstName'];
$Phone = $_REQUEST['Phone'];
$Address = $_REQUEST['Address'];
$Email = $_REQUEST['Email'];

//$CategoryName = $_REQUEST['Category'];ItemId, CustomerId, '{$ItemId}','{$CustomerId}',

$mysql_insert = "INSERT INTO customers (FamilyName, FirstName, Phone, Address, Email)".
"VALUES('{$FamilyName}','{$FirstName}','{$Phone}','{$Address}','{$Email}');";
mysql_query($mysql_insert) or die ("<p>Error of input ".mysql_error());


$mysql_insert = "INSERT INTO orders (DateOfOrder)".
"VALUES('{NOW()}';";
mysql_query($mysql_insert) or die ("<p>Error of input ".mysql_error());






header('Location: http://karvanen.eu.gg/neworder.php');
?>
