<?php
require 'connect.php';

$Note = $_REQUEST['Note'];
$DeadLine = $_REQUEST['DeadLine'];

$insertSQL = "INSERT INTO notes (Note, DeadLine)".
"VALUES('{$Note}','{$DeadLine}');";
mysql_query($insertSQL);

header('Location: http://karvanen.eu.gg/notes.php');
?>
