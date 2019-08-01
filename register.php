<!DOCTYPE html>
<html>
<head>
	<title>testingt</title>
	</head>
<body>
<center><table>
<form action="register.php" method="POST">
	<tr><td>Enter your name:</td>
		<td> <input type="text" name="username"></td>
	</tr>
	<tr><td>Enter your address: </td>
		<td> <input type="text" name="address"></td>
	</tr>
	<tr><td>Enter your email:</td>
		<td>  <input type="email" name="email"></td>
	</tr>
	<tr><td>Enter your password:</td>
		<td> <input type="password" name="password"></td>
	</tr>
	<tr><td>Confirm your password:</td>
		<td> <input type="password" name="confirmpassword"></td>
	</tr>
	<tr><td></td><td> <input type="submit" name="submit" value="submit"></td></tr>
	</form></table>
<?php if($_SERVER["REQUEST_METHOD"]=="POST")
{
		include "connection.php";
		$name=$_POST["username"];
    	$email=$_POST["email"];
    	$password = $_POST["password"];
    	$confirmpassword = $_POST["confirmpassword"];
    	if($confirmpassword == $password)
    	{
    		
    	$insertQuery=mysqli_query($connection,"INSERT INTO `userdata`(`Username`, `email`,`password`) 
    		VALUES('$name','$email','$password')");
    	header("Location:index.html");
    }
    	
    		else
		{
		 echo "<div class='form'>
		 <h3>Password not match.</h3>";
        }
    		
}
?>
</body>
</html>