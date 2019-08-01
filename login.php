<!DOCTYPE html>
<html>
<head>
	<title>ABC</title>
</head>
<body>
<center><table>
<form action="login.php" method="POST">
	<tr><td>Enter your name:</td>
		<td> <input type="text" name="username"></td>
	</tr>
	<tr><td>Your password:</td>
		<td> <input type="password" name="password"></td>
	</tr>
	<tr><td></td><td><input type="submit" name="submit" value="login"></td></tr>
</form>

<?php
		 if($_SERVER["REQUEST_METHOD"]=="POST")
		{
		    include 'connection.php';
		    $u=$_POST["username"];
		    $p=$_POST["password"];
		    $q1="SELECT * FROM `userdata` WHERE  `password` LIKE '$p' AND `username` LIKE '$u'";
		    $result=mysqli_query($connection,$q1) or die(mysql_error());
		    $rows = mysqli_num_rows($result);
		        if($rows==1){
		     $_SESSION['username'] = $username;
		            // Redirect user to index.php
		     header("Location: addcategory.php");
		}else
		{
		 echo "<div class='form'>
		 <h3>Username/password is incorrect.</h3>";
        }}
?>
</body>
</html>