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
        <li> <a href="datashop1.php">VIEW DATABASE OF ATN SHOP 1</a> </li>
		<li> <a href="datashop2.php">VIEW DATABASE OF ATN SHOP 2</a> </li>
	    <li> <a href="login.php">LOG OUT</a> </li>
    </ul>
  </head>
    <body>
      <style>
        body {
          background-image: url('background.jpg');
          background-attachment: fixed;
          background-size: 100%100%;
        } 
      </style>		 
	</body>
</html>
