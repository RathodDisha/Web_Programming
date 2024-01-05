<?php

$Username=$_REQUEST['username'];
$Password=$_REQUEST['password'];
$Name=$_REQUEST['Name'];
$Address=$_REQUEST['Address'];
$Country=$_REQUEST['drop-down'];
$ZIPcoad=$_REQUEST['ZIP_coad'];
$Email=$_REQUEST['Email'];
$Sex=$_REQUEST['gender'];
$Language=$_REQUEST['language'];
$About=$_REQUEST['about'];

echo "username".$Username."<br><br>";
echo "password".$Password."<br><br>";
echo "Name".$Name."<br><br>";
echo "Address".$Address."<br><br>";
echo "drop-down".$Country."<br><br>";
echo "ZIP_coad".$ZIPcoad."<br><br>";
echo "Email".$Email."<br><br>";
echo "gender".$Sex."<br><br>";
echo "language".$Language."<br><br>";
echo "about".$About."<br><br>";

?>