<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<style>
		*{
	padding:0;
	margin:0;
}

.logo{
	width:100%;
	height:100px;
	font-family: calibri;
	font-size: 45px;
	border:1px solid;
}

.menu{
	width:100%;
	height:50px;
	font-family: calibri;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

.menu ul li {
  float: left;
  margin-left: 20px;
}

.menu ul li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

.mainD{
	width:65%;
	height: 450px;
	margin-left: 200px;
	padding:0;
	font-family: calibri;
	background-color: #f2f2f2;
	margin-top: 2px;
}

.imageD{
	float:left;
	width:30%;
	height:400px;
	margin-left: 15px;
	margin-top:20px;
	border:1px solid;
}

.imageD img{
	width:100%;
	height:400px;
}

.itemDetail{
	float:right;
	width:62%;
	height: 400px;
	margin-right:15px;
	margin-top:20px;
	background-color: white;
}

.nameD h1{
	background-color: black;
	color: white;
	text-align: center;
	font-size: 50px;
}

.priceD{
	font-size: 40px;
}

.describeD{
	font-size: 30px;
}

	</style>
</head>
<body>
	<div class="logo"><h1>NCT STORE</h1></div>
	<div class="menu">
		<ul>
		  <li><a class="active" href="index.php">Home</a></li>
		  <li><a href="men.php">Men</a></li>
		  <li><a href="women.php">Women</a></li>
		  <li><a href="login.php">Login</a></li>
		  <form action="Search.php" style="float: right;background-color: black;height: 20px;">
					<input type="text" name="search" style="width: 200px;height: 30px;margin-top: 5px">
					<input type="submit" name="searchbtn" value="Search" placeholder="Search....">
				</form>
		</ul>
	</div>
	<div class="mainD">

			<div class="contentD">
				<?php 
						//get parameter from client
						require_once('./dbconnector.php');
						if(isset($_GET['productID']))
						{
							$productID = $_GET['productID'];
							//create sql query
							$sql = "Select * from product where productID=" . $productID;
							//instance an object DBConnector
							$cn = new DBConnector();
							//call the function of object DBConnector
							$rows = $cn->runQuery($sql);
							foreach($rows as $r)
							{
					?>
					<div class="imageD"><img src="<?=$r['image']?>"></div>

					<div class="itemDetail">
						<div class="nameD"><h1><?=$r['productName']?></h1></div>
						<div class="priceD">Price:<?=$r['productPrice']?>$</div>
						<div class="describeD"><?=$r['des']?></div>
					</div>
				<?php
						}
					}
					?>
			</div>

		</div>
	<div class="footer"></div>
</body>
</html>