<?php
      $host_heroku = "ec2-54-146-73-98.compute-1.amazonaws.com";
			$db_heroku = "d13da88n45ouc0";
			$user_heroku = "vzhpjzlpafmtft";
			$pw_heroku = "a49e15b38751156392c0251a8e0bc2645d2bb5029a4c15c397b9a3e3a88b81ef";
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			$pg_heroku = pg_connect($conn_string);
			
			if (!$pg_heroku)
			{
				die('Error: Could not connect: ' . pg_last_error());
			}
$productid=$_GET['pi'];
$query = "DELETE FROM atnshop1 WHERE productid = '$productid'";
$data = pg_query($pg_heroku,$query);
if($data)
{
  echo "<script>alert('Delete Successfully!')</script>";
	?>
	<meta http-equiv="refresh" content="0; url=https://asm-atn-shop.herokuapp.com/shop1.php" />
	<?php
}
else
{
  echo "Failed to delete.";
}
?>
