<?php
require 'connect.php';
$Name = $_REQUEST['Name'];
$Price = $_REQUEST['Price'];
$Category = $_REQUEST['Category'];
//$Photo = $_REQUEST['file'];
$Description = $_REQUEST['Description'];
/*
echo $_REQUEST['file'];
echo "<br>";
echo var_dump($_FILES); 

echo "<br>";

//uploading a file

$file_exts = array("jpg", "bmp", "jpeg", "gif", "png");
$upload_exts = end(explode(".", $_FILES['file']['name']));
if ((($_FILES['file']['type'] == 'image/gif')
|| ($_FILES['file']['type'] == 'image/jpeg')
|| ($_FILES['file']['type'] == 'image/png')
|| ($_FILES['file']['type'] == 'image/pjpeg'))
&& ($_FILES['file']['size'] < 2000000)
&& in_array($upload_exts, $file_exts))
{
if ($_FILES['file']['error'] > 0)
{
echo "Return Code: " . $_FILES['file']['error'] . "<br>";
}
else
{
echo "Upload: " . $_FILES['file']['name'] . "<br>";
echo "Type: " . $_FILES['file']['type'] . "<br>";
echo "Size: " . ($_FILES['file']['size'] / 1024) . " kB<br>";
echo "Temp file: " . $_FILES['file']['tmp_name'] . "<br>";
// Enter your path to upload file here
if (file_exists('images/' .
$_FILES['file']['name']))
{
echo "<div class='error'>"."(".$_FILES['file']['name'].")".
" already exists. "."</div>";
}
else
{
move_uploaded_file($_FILES['file']['tmp_name'],
"images/" . $_FILES['file']['name']);
echo "<div class='sucess'>"."Stored in: " .
"images/" . $_FILES['file']['name']."</div>";
}
}
}
else
{
echo "<div class='error'>Invalid file</div>";
}*/



$mysql_insert = "INSERT INTO items (Name, Price, Category, Photo, Description)".
"VALUES('{$Name}','{$Price}','{$Category}',' ','{$Description}');"; 

mysql_query($mysql_insert) or die ("<p>Error of input ".mysql_error());

header('Location:http://karvanen.eu.gg/catalogue.php');
?>

