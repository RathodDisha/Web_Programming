<html>
<head>
       <title>Registration Form</title>
	   <style>
	   input,select{border: 3px solid #de2837;}
	   </style>
</head>
<body>
<center>
<form action="output.php" method="get">
<table border="0" bgcolor="#e9ded6" width="300px" >

<h1>Registration Form</h1>
<tr><td>Username:</td> <td> <input type="text" name="username" /></td></tr>

<tr><td>Password: </td><td><input type="text" name="password" /></td></tr>

<tr><td>Name:  </td><td>  <input type="text" name="Name" /></td></tr>

<tr><td>Address: </td><td> <input type="text" name="Address" /></td></tr>

<tr><td>Country: </td><td><select name="drop-down">
           <option value="select country name">select country Name</option>
		   <option value="India">India</option>
		   <option value="China">China</option>
		   <option value="South Korea">South Korea</option></select></td></tr>
		   
<tr><td>ZIP code:  </td><td> <input type="number" name="ZIP_coad" /></td></tr>

<tr><td>Email:  </td><td> <input type="text" name="Email" /></td></tr>

<tr><td>Sex: </td><td><input type="radio" name="gender" value="male" checked>Male
            <input type="radio" name="gender" value="female" >Female</td></tr>
			
<tr><td>Language: </td><td>  <input type="checkbox" name="language" checked>English
           <input type="checkbox" name="language" />Non English</td></tr>
		   
<tr><td>About:  </td><td>    <textarea cols="20" rows="5" name="about">
           </textarea></td></tr>
		   
<tr><td><input type="submit"></td></tr>
</table>
</form>
</center>
</body>
</html>
