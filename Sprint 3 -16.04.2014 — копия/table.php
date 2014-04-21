<?php
require 'connect.php';
$strSQL = "SELECT name, price, category, photo, description FROM items";
$rs = mysql_query($strSQL);                          
$table = "<table width = '100px' align=center>";

while($row = mysql_fetch_array()) {  
$table .= "<tr>";
 $table .= "<td >".$row['name']."</td>";
 $table .= "<td >".$row['price']."</td>";
 $table .= "<td >".$row['category']."</td>";
 $table .= "<td >".$row['photo']."</td>";
 $table .= "<td >".$row['description']."</td>";
 $table .= "</tr>";
      }
$table .= "</table>";
        echo $table;
?>