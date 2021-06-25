<!DOCTYPE html>
<html>
<head>
	<title>Treasure You</title>
	<style>
		.header{
	height: 50px;
	top: 0;
	position: sticky;
	margin-bottom: 20px;
	z-index: 2;
}
.logo{
	height: 40px;
	margin: 5px 10px;

}
.form-control{
	margin-top: 9px;
	margin-left: 30px;
	border:  1px solid black !important;
	border-top-left-radius: 20px !important;
	border-bottom-left-radius: 20px !important;
	border-top-right-radius: 0 !important;
	border-bottom-right-radius: 0 !important;
	box-shadow: none !important;
}
.input-group-text{
	background: black;
	border:  1px solid black !important;
	margin: 8.5px 10px 3px 0 !important;
	border-top-left-radius: 0px !important;
	border-bottom-left-radius: 0px !important;
	border-top-right-radius: 20px !important;
	border-bottom-right-radius: 20px !important;
	cursor: pointer;
}
.search{
	display: inline-flex;
	width: 60%;
}
.fa-search{
	color: black;
}
.menu{
	width: 20%;
	height: 30px;
	float: right;
}
.menu ul{
	display: inline-flex;
	float: right;
}
.menu ul li{
	border-left:  1px solid #fff;
	list-style-type: none;
	padding:  15px 35px;
	text-align: center;
	background-color: #EFAFD4;
	cursor: pointer;
}
.menu ul li a{
	font-size: 16px;
	font-weight: bold;
	color: black;
	text-decoration: none;
}
.shopping-cart{
	margin-right: 5px;
}
@media only screen amd (max-width: 980px){
	.header{
		height: 118px;
		border-bottom: 0;
	}
	.search{
		width: 100%;
	}
	.menu{
		width: 100%;
	}
	.menu ul{
		margin: 10px 0;
		width: 100%;
	}
	.menu ul li{
		height: 57px;
		width: 100%;
	}
}
.content{
	overflow: visible;
	width: 100%;
}
.left{
	width: 20%;
	float: left;
	height: auto;
	background-color: #FDA9CD;
}
.category ul{
	list-style-type: none;
	padding: 0;
	margin: 0;
}
.category a{
	text-decoration: none;
	font-size: 25px;
	line-height: 35px;
	color: #7EFBF1;
	padding-left: 15px;
	display: block;
}
.category a:hover{
	background-color: #F8CFCF;
	color: #454593;
}
.main{
	width: 70%;
	float: left;
	height: auto;
}
.item1{
	height: 500px;
	width: 32%;
	margin: 0.5%;
	float: left;
}
.item2{
	height: 600px;
	width: 49%;
	margin: 0.5%;
	float: left;
}
.product{
	height: 150px;
	width: 20%;
	float: left;
	margin: 0.5%;
}
.name{
	text-align: center;
    line-height: 12px;
    padding-bottom: 8px;
    position: relative;
}
.image{
	height: 400px;
}
.price{
	text-align: center;
}
.product-group-title{
	width: 100%;
	float: left;
	height: 500px;
	margin: 0;
	padding: 0;
}
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
	
<?php 
 ?>
<div class="header">
<div class="menu">
	<ul>
		<li><a href="login.php">Log in</a></li>
	</ul>	
</div>
</div>

	<img src="https://www.chuu.co.kr/images/main/banners/top-area/main-banner/b/7.jpg" class="content">
</body>
</html>