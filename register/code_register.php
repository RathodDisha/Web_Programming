<?php

$user=$_REQUEST['user_nm'];
$pass=$_REQUEST['user_pw'];

$connect=mysqli_connect("localhost","root","","b1");
//print_r($connect);
echo $query="INSERT INTO `register`(`usernm`, `userpass`) VALUES ('$user','$pass')";

echo $exe_query=mysqli_query($connect,$query);
if($exe_query>=1)
{
	echo "data inserted";
}
else
{
	echo "error";
}
?>