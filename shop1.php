<html>
	<head>
    <link rel="stylesheet" href ="styles.css">
    <title> Database </title>
    <marquee bgcolor="gray" 
             scrollamount="12" 
             direction="left" 
             onmouseover="this.stop();" 
             onmouseout="this.start();">
        <center>
		<?php
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$date = getdate();
			echo "<hr>";
			echo "Today is: ".$date['weekday']."--".$date['mday']."/".$date['mon']."/".$date['year']."--".$date['hours'].":".$date['minutes'].":".$date['seconds'];
		?>
	  </center>
    </marquee>
    <ul>
        <li> <a href="datashop1.php">VIEW DATABASE</a> </li>
	<li> <a href="shop1.php">EDIT DATABASE</a> </li>
	<li> <a href="login.php">LOG OUT</a> </li>
    </ul>
  </head>
    <body>
      <style>
        body {
          background-image: url('background2.png');
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
			    <th colspan="2" align="center">Operation</th>
		    </tr>
		<?php 
			echo '<p>ATN SHOP 1 </p>'; 
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
		    	$query = 'select * from atnshop1';
			$data = pg_query($pg_heroku, $query);
	    		$total = pg_num_rows($data);
			if($total!=0)
			{
				while ($result=pg_fetch_assoc($data))
				{
					echo "
					<tr>
					<td>".$result['productid']."</td>
					<td>".$result['productname']."</td>
					<td>".$result['productprice']."</td>
					<td>".$result['quantityonhand']."</td>
					<td><a href='update1.php?pi=$result[productid]&pn=$result[productname]&pp=$result[productprice]&qt=$result[quantityonhand]'>
					Edit/Update</td>
					<td><a href='delete1.php?pi=$result[productid]'>Delete</td>
					
					</tr>
					";
				}
			}
	    
		?> 
		    <form action="https://asm-atn-shop.herokuapp.com/add1.php">
    				<input type="submit" value="Add" />
			</form>
		   </center>
	</body>
</html>
