<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<h1>ADD YOUR CATEGORY AND PRODUCTS</h1>
<center><table>
<form method="POST" action="addcategory.php">
	<tr><td>
	Category name:</td><td> <input type="text" name="category" placeholder="category name"></td></tr>
	<tr><td>Product name:</td><td><input type="text" name="product" placeholder="product name"></td></tr>
	<tr><td></td><td><input type="submit" name="submit" value="add"></td>
</form></table></center>
<?php if($_SERVER["REQUEST_METHOD"]=="POST")
		{
		include "connection.php";
		$category=$_POST["category"];
    	$product=$_POST["product"];
 		$insertQuery=mysqli_query($connection,"INSERT INTO `category`(`category`,`product`) 
    		VALUES('$category','$product')");
 		
    	header("Location:list.php");
    }
    	
   	   		
?>
</body>
</html>