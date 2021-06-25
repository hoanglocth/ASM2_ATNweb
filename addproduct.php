<!DOCTYPE html>
<html>
<head>
	<title>Treasure You</title>
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
		require("dbconnect.php");
		if(isset($_POST["submit"]))
		{
			$id = $_POST["id"];
			$name = $_POST["name"];
			$price = $_POST["price"];

			if ($id == "" || $name == "" || $price == "")
			{
				?>
				<script>
					alert("Product data should not be blank!!!");
				</script>
				<?php
			}
			else
			{
				$sql = "select * from product where name = '$name'";
				$query = pg_query($conn, $sql);
				if(pg_num_rows($query)>0)
				{
					?>
					<script>
						alert("The product is added");
					</script>
					<?php 
				}
				else
				{
					$sql = "INSERT INTO Product(id, name, price) VALUES ('$id', '$name', '$price')";
					pg_query($conn, $sql);
					?>
					<script>
						alert("Added");
						window.location.href = "/admin.php";
					</script>
					<?php
				}
			}
		}
	?>
	<form method = "post" action = "addproduct.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td>ID</td>
				<td><input type = "text" name= "id"></td>
			
			<tr>
			<tr>
				<td>Name</td>
				<td><input type = "text" name= "name"></td>
			
			<tr>
				<td>Price</td>
				<td><input type = "text" name = "price"/></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type = "submit" name = "submit" value = "Add"></td>
			</tr>
		</table>
	</form>
			<a href="./admin.php">Back to Product Admin</a>
		</div>
</body>
</html>