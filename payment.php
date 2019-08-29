<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<div id="menu_top">
			<div id="ATN">
				<a href="home.php" title="HOME PAGE">ATN SHOP</a>
			</div>
			<div id="menu">
				<ul>
				<li><a href="home.php" title="HOME PAGE">HOME PAGE</a></li>
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
		</div>
		<div id="payment">
			<div class="col-6">
				<h1>Information</h1>
				<form>
					<table>
						<tr>
							<td>Fullname: </td>
							<td><input type='text' size='25' placeholder='Your name' /></td>
						</tr>
						<tr>
							<td>Address: </td>
							<td><input type='text' size='25' placeholder='Address' /></td>
						</tr>
						<tr>
							<td>Phone number: </td>
							<td><input type='text' size='25' placeholder='Phone number' /></td>
						</tr>
					</table>
				</form>
			</div>
			<div class="col-6">
				<h1>Detail Product</h1>
				<form>
						<table>
							<tr>
								<th>Price: </th>
								<td>200$</td>
							</tr>
							<tr>
								<th>Color:</th>
								<td>
									Red
								</td>
							</tr>
							<tr>
								<th>Size: </th>
								<td>40</td>
							</tr>
						</table>
					</form>
			</div>
			<div class="cf col-12">
				<input type="submit" value="Confirm">
			</div>
		</div>
		<div id="footer">
			<div class="row">
				<p>WELCOME TO ATN SHOP</p>
			</div>
		</div>
</body>
</html>