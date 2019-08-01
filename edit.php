<h1>EDIT YOUR CATEGORY AND PRODUCTS</h1>
<center><table>
<form  action="edit.php" method="POST" >
	<input type="hidden" name="id"value=<?php echo $_GET["id"]; ?> >
	<tr><td>
	Category name:</td><td> <input type="text" name="category" placeholder="category name"></td></tr>
	<tr><td>Product name:</td><td><input type="text" name="product" placeholder="product name"></td></tr>
	<tr><td></td><td><input type="submit" name="submit" value="UPDATE"></td>
</form></table></center>
<?php 

	

if($_SERVER["REQUEST_METHOD"]=="POST")
		{
		include "connection.php";
        echo "hi";
		$category=$_POST["category"];
    	$product=$_POST["product"];
   $id=$_POST["id"];
    	$q ="UPDATE category SET category ='$category',product='$product' WHERE id = '$id' ";
    	
    		$insertQuery=mysqli_query($connection,$q); 
     	header("Location:list.php");

 		    	
    }
    	
   	   		
?>