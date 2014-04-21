<link href="stylecatalogue.css" rel="stylesheet" type="text/css" />
<?php
require 'connect.php';

if ((!array_key_exists('dateOrder', $_POST)) && (!array_key_exists('customersOrder', $_POST))){
    $mysql_select = "SELECT * 
    FROM orders, items, customers
    WHERE orders.ItemId = items.ItemId
    AND orders.CustomerId = customers.CustomerId
    ORDER BY FamilyName";
    showValues($mysql_select);
}
elseif ($_POST['customersOrder']){
    $mysql_select = "SELECT * 
    FROM orders, items, customers
    WHERE orders.ItemId = items.ItemId
    AND orders.CustomerId = customers.CustomerId
    ORDER BY FamilyName";
    showValues($mysql_select);
}
elseif ($_POST['dateOrder']){
    $mysql_select = "SELECT * 
    FROM orders, items, customers
    WHERE orders.ItemId = items.ItemId
    AND orders.CustomerId = customers.CustomerId
    ORDER BY DateOfOrder";
    showValues($mysql_select);
}



function showValues($mysql_select){
    $result = mysql_query($mysql_select);
    $row = mysql_fetch_array($result);
    do{   
          echo "<tr>";
          echo "<td>".$row[0]."</td>";
          echo "<td>".$row[3]."</td>";
          echo "<td>".$row[5]."</td>";
          echo "<td>".$row[4]."</td>";
          echo "<td>".$row[11]."</td>";
          echo "<td>".$row[12]."</td>";
          echo "<td>".$row[13]."</td>";
          echo "<td>".$row[14]."</td>";
          echo "<td>".$row[15]."</td>";
          echo "</tr>";        
}
        while($row = mysql_fetch_array($result));
}
?>