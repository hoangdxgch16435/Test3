<!DOCTYPE html>
<html>
<head>
	<title>DO CHOI detail</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
		<div id="menu_top">
			<div id="ATN">
				<a href="index.php" title="HOME PAGE">ATN SHOP</a>
			</div>
			<div id="menu">
				<ul>
				<li><a href="index.php" title="HOME PAGE">HOME PAGE</a></li>
				<li><a href="introduce.php" title="INTRODUCE">INTRODUCE</a></li>
				<li><a href="product.php" title="PRODUCT">PRODUCT</a></li>
				<li><a href="news.php" title="NEWS">NEWS</a></li>
				<li><a href="contact.php" title="CONTACT">CONTACT</a></li>	
			</ul>
			</div>
			<div id="help">
				<a href="help.php" title="HELP">HELP</a>
			</div>
		</div>
		<div id="banner">
			<img src="image/banner2.png" alt="DO CHOI" width="1000px" />
		</div>'/=ơ'
		<div id="detail">
<?php
		include 'dbconnector.php';
		$productid =$_GET['productid'];
		            $sql = "SELECT productid, image, price, productname FROM product  WHERE productid = '$productid'";
		            $result = pg_query($connection,$sql);
		            if (pg_num_rows($result) > 0) {
		            // output data of each row
		            while($row = pg_fetch_assoc($result)) {
		            	$productid = $row['productid'];
		              	$price = $row['price'];
		              	$image = $row['image'];
		              	$productname = $row['productname'];
		         
		          ?>
			

			<h1>Do choi 1</h1>
				<div class="detailIMG col-5">
					<img src="<?= $image; ?>" width="300px" height="400px" />
				</div>
				<div class="col-5 detail">
					<form>
						<table>
							<tr>
								<th>Name: </th>
								<td><?= $productname; ?></td>
							</tr>
							<tr>
								<th>Price: </th>
								<td><?= $price; ?>$</td>
							</tr>
							<tr>
								<th>Color:</th>
								<td>
									<input type="radio" name="color"/>Red
									<input type="radio" name="color"/>White
								</td>
							</tr>
							<tr>
								<th>size: </th>
								<td><select>
									<option>40</option>
									<option>41</option>
									<option>42</option>
									<option>43</option>
								</select></td>
							</tr>
						</table>
					</form>
				</div>
				 <?php }} 

		       ?>

		</div>
		<div id="footer">
			<div class="row">
				<p>WELCOME TO ATN SHOP</p>
			</div>
		</div>
</body>
</html>