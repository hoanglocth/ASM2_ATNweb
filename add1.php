<?php
require 'connectdb.php';
?>
<html>

<head>
  <link rel="stylesheet" href="/css/style.css">
  <title>Add</title>
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
        <td><input type="text" value="" name="productid" required></td>
      </tr>

      <tr>
        <td>Product Name</td>
        <td><input type="text" value="" name="productname" required></td>
      </tr>

      <tr>
        <td>Product Price</td>
        <td><input type="text" value="" name="productprice" required></td>
      </tr>

      <tr>
        <td>Quantity</td>
        <td><input type="text" value="" name="quantityonhand" required></td>
      </tr>

      <tr>
        <td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Add"></td>
      </tr>
  </form>
  </table>
</body>

</html>

<?php
if ($_GET['submit']) {
  $pi = $_GET['productid'];
  $pn = $_GET['productname'];
  $pp = $_GET['productprice'];
  $qt = $_GET['quantityonhand'];
  $query = "INSERT INTO atnshop1 VALUES ('$pi','$pn','$pp','$qt')";
  $data = pg_query($pg_heroku, $query);
  if ($data) {
    echo "<script>alert('Added Successfully!')</script>";
?>
    <meta http-equiv="refresh" content="0; url=https://atn-toy-store-asm2.herokuapp.com/shop1.php" />
<?php
  } else {
    echo "Failed to add product to the table.";
  }
}
?>