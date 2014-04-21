<?php
require 'connect.php';

$Id = $_GET['Id'];

$deleteSQL = "DELETE FROM notes WHERE Id = '$Id'";
mysql_query($deleteSQL);

header('Location: http://karvanen.eu.gg/notes.php');
?>

