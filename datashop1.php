<html>

<head>
	<link rel="stylesheet" href="/css/style.css">
	<title> Database </title>
	<marquee bgcolor="gray" scrollamount="12" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
		<center>
			<?php
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$date = getdate();
			echo "<hr>";
			echo "Today is: " . $date['weekday'] . "--" . $date['mday'] . "/" . $date['mon'] . "/" . $date['year'] . "--" . $date['hours'] . ":" . $date['minutes'] . ":" . $date['seconds'];
			?>
		</center>
	</marquee>
	<ul>
		<li> <a href="admin.php">VIEW DATABASE</a> </li>
		<li> <a href="login.php">LOG OUT</a> </li>
	</ul>
</head>

<body>
	<style>
		body {
			background-image: url('background2.jpg');
			background-attachment: fixed;
			background-size: 100%100%;
		}
	</style>
	<center>
		<table border="2">
			<tr>
				<th>Product ID</th>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Quantity</th>
			</tr>
			<?php
			echo '<p>ATN SHOP 1</p>';
			$host_heroku = "ec2-34-195-143-54.compute-1.amazonaws.com";
			$db_heroku = "dc093vuc6gjaav";
			$user_heroku = "ubniakvyleptee";
			$pw_heroku = "237d8b8b0a1597a3f29b43a35aa8b02b413148386f81c7210be32fe2baaf259e";
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			$pg_heroku = pg_connect($conn_string);

			if (!$pg_heroku) {
				die('Error: Could not connect: ' . pg_last_error());
			}
			$query = 'select * from atnshop1 order by productid';
			$data = pg_query($pg_heroku, $query);
			$total = pg_num_rows($data);
			if ($total != 0) {
				while ($result = pg_fetch_assoc($data)) {
					echo "
					<tr>
					<td>" . $result['productid'] . "</td>
					<td>" . $result['productname'] . "</td>
					<td>" . $result['productprice'] . "</td>
					<td>" . $result['quantityonhand'] . "</td>
					
					</tr>
					";
				}
			}

			?>
	</center>
</body>

</html>