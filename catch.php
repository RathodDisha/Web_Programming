<?php

echo $Fname=$_REQUEST['my_fname'];
echo $Lname=$_REQUEST['my_lname'];
echo $Add=$_REQUEST['my_add'];
echo $City=$_REQUEST['my_city'];
echo $State=$_REQUEST['my_sts'];
echo $Mobil=$_REQUEST['my_fno'];
echo $Class=$_REQUEST['my_class'];
echo $Division=$_REQUEST['my_div'];

echo "<table border=1 bordercolor=pink >
       <tr><td>FirstName:</td><td>$Fname</td></tr>
	   <tr><td>LastName:</td><td>$Lname</td></tr>
	   <tr><td>Address:</td><td>$Add</td></tr>
	   <tr><td>City:</td><td>$City</td></tr>
	   <tr><td>State:</td><td>$State</td></tr>
	   <tr><td>Mobil no:</td><td>$Mobil</td></tr>
	   <tr><td>Claas:</td><td>$Class</td></tr>
	   <tr><td>Division:</td><td>$Division</td></tr>
	   </table>"


?>