<?php
require 'connectdb.php';
$pi = $_GET['pi'];
$pn = $_GET['pn'];
$pp = $_GET['pp'];
$qt = $_GET['qt'];
?>
<html>

<head>
  <link rel="stylesheet" href="/css/style.css">
  <title> Update </title>
  <marquee bgcolor="gray" scrollamount="20" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
    <center>
      <?php
      			echo "<p> <font color=white>TODAY ATN TOY STORE SALE UP TO 50%</font> </p>";
      ?>
    </center>
  </marquee>
</head>

<body>
  <style>
    body {
      background-image: url('background1.jpg');
      min-height: 500px;
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
    }
  </style>
  <br>
  <form action="" method="GET">
    <table border"0" bgcolor="white" align="center" cellspacing="20">

      <tr>
        <td>Product ID</td>
        <td><input type="text" value="<?php echo "$pi" ?>" name="productid" required></td>
      </tr>

      <tr>
        <td>Product Name</td>
        <td><input type="text" value="<?php echo "$pn" ?>" name="productname" required></td>
      </tr>

      <tr>
        <td>Product Price</td>
        <td><input type="text" value="<?php echo "$pp" ?>" name="productprice" required></td>
      </tr>

      <tr>
        <td>Quantity</td>
        <td><input type="text" value="<?php echo "$qt" ?>" name="quantityonhand" required></td>
      </tr>

      <tr>
        <td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Update"></td>
      </tr>
  </form>
  </table>
</body>

</html>

<?php
if ($_GET['submit']) {
  $productid = $_GET['productid'];
  $productname = $_GET['productname'];
  $productprice = $_GET['productprice'];
  $quantityonhand = $_GET['quantityonhand'];
  $query = "UPDATE atnshop1 SET productid='$productid', productname='$productname', productprice='$productprice', quantityonhand='$quantityonhand' WHERE productid='$productid' ";
  $data = pg_query($pg_heroku, $query);
  if ($data) {
    echo "<script>alert('Updated Successfully!')</script>";
?>
    <meta http-equiv="refresh" content="0; url=https://atn-toy-store-asm2.herokuapp.com/shop1.php" />
<?php
  } else {
    echo "Failed to update the table.";
  }
}
?>