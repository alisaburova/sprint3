<?php
mysql_connect("www17.subdomain.com","user2649510","qwerty123")
or die ("<p>Error in connection to the database " .mysql_error()."</p>");
mysql_select_db("db2649510-main")
or die ("<p>Error of choosing the database " .mysql_error(). "</p>");
?>