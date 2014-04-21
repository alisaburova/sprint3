<?php
require 'connect.php';
$mysql_select = "SELECT * FROM customers";
$result = mysql_query($mysql_select);
$row = mysql_fetch_array($result);
do{
$FamilyName = $row['FamilyName'];
$FirstName = $row['FirstName'];
$Address = $row['Address'];
$Phone = $row['Phone'];
$Email = $row['Email'];

printf("<tr>
			<td>%s</td>
			<td>%s</td>
			<td>%s</td>
			<td>%s</td>
			<td>%s</td>
		</tr>",$FamilyName,$FirstName,$Address,$Phone,$Email);	
}
while($row = mysql_fetch_array($result));

?>
