<?php
$host_heroku = "ec2-34-195-143-54.compute-1.amazonaws.com";
$db_heroku = "dc093vuc6gjaav";
$user_heroku = "ubniakvyleptee";
$pw_heroku = "237d8b8b0a1597a3f29b43a35aa8b02b413148386f81c7210be32fe2baaf259e";
$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
$pg_heroku = pg_connect($conn_string);
if (!$pg_heroku) {
  die('Error: Could not connect: ' . pg_last_error());
}
?>
<html>

<head>
  <link rel="stylesheet" href="/css/style.css">
  <title> Add </title>
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
      background-attachment: fixed;
      background-size: 100%100%;
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
  $query = "INSERT INTO atnshop2 VALUES ('$pi','$pn','$pp','$qt')";
  $data = pg_query($pg_heroku, $query);
  if ($data) {
    echo "<script>alert('Added Successfully!')</script>";
?>
    <meta http-equiv="refresh" content="0; url=https://atn-toy-store-asm2.herokuapp.com/shop2.php" />
<?php
  } else {
    echo "Failed to add product to the table.";
  }
}
?>