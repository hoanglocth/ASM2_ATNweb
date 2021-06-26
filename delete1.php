<?php
require 'connectdb.php';
$productid = $_GET['pi'];
$query = "DELETE FROM atnshop1 WHERE productid = '$productid'";
$data = pg_query($pg_heroku, $query);
if ($data) {
	echo "<script>alert('Delete Successfully!')</script>";
?>
	<meta http-equiv="refresh" content="0; url=https://atn-toy-store-asm2.herokuapp.com/shop1.php" />
<?php
} else {
	echo "Failed to delete.";
}
?>