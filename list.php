

<?php 
 
		echo "<center><table border= `1`><tr><th>Category</th>
						<th>Product</th>
						<th>Edit</th>
						<th>Remove</th>
					</tr</table>";
			include "connection.php";
		$q="SELECT * FROM`category`";
 		$insertQuery=mysqli_query($connection,$q);

 		while($array=mysqli_fetch_array($insertQuery))
														   {
														   	echo "<tr><td>";
														    echo $array['category']."</td>";
														    echo "<td>".$array['product']."</td>";
		   
			echo "<td><a href=edit.php?id=".$array['id'].">Edit</a></td>" ;
			echo "<td><a onclick='myFunction()' href=delete.php?id=".$array['id'].">Remove</a></td>";
			echo "</tr>";}
				 									#<button onclick="myFunction()">Try it</button>



						echo "</table></center";							  
 
    
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<script>
function myFunction() {
  alert("Delete this category?");
}
</script>
</body>
</html>
