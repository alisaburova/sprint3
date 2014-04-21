<?php
require 'connect.php';
$mysql_select = "SELECT * FROM notes";
$result = mysql_query($mysql_select);
$row = mysql_fetch_array($result);
do{
$Id = $row['Id'];
$Note = $row['Note'];
$DeadLine = $row['DeadLine'];

printf("<tr>
			<td>%s</td>
			<td>%s</td>
			<td>%s</td>
		</tr>",$Id,$Note,$DeadLine);	
}
while($row = mysql_fetch_array($result));

?>
