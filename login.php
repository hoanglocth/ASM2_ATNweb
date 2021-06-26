<html>

<head>
	<link rel="stylesheet" href="/css/style.css">
	<title> Login </title>
	<marquee bgcolor="gray" scrollamount="20" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
		<center>
			<?php
			echo "<p> <font color=white>TODAY ATN TOY STORE SALE UP TO 50%</font> </p>";
			?>
		</center>
	</marquee>
	<ul>
		<li> <a href="">LOGIN</a></li>
		<li> <a href="index.php">HOME</a></li>
	</ul>
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
	<div>
		<h2 style="color:black;" align="center">LOGIN</h2>
		<form style="color:black;" align="center" method="POST">
			Username: <input type="text" name="userid"> <br><br>
			Password:&nbsp;<input type="password" name="password"> <br><br>
			<input type="submit" value="LOGIN">
		</form>
	</div>
	<?php
	if (isset($_POST['userid']) && isset($_POST['password'])) {
		$user = $_POST['userid'];
		$pass = $_POST['password'];
	}
	if ($user == "shop1" && $pass == "shop1") {
		header("location:shop1.php");
	}
	if ($user == "shop2" && $pass == "shop2") {
		header("location:shop2.php");
	}
	if ($user == "admin" && $pass == "admin") {
		header("location:admin.php");
	}
	?>
</body>

</html>