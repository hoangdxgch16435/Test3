<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<div class="logo"><h1>NCT STORE</h1></div>
	<div class="menu">
		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li><a class="active" href="men.php">Men</a></li>
		  <li><a href="women.php">Women</a></li>
		  <li><a href="login.php">Login</a></li>
		  <form action="search.php" style="float: right;background-color: black;height: 40px;">
					<input type="text" name="search" style="width: 200px;height: 10px;">
					<input type="submit" name="searchbtn" value="Search" placeholder="Search....">
				</form>
		</ul>
	</div>
	<div class="main">
		<div class="left">
			<ul>
				<li style="text-align: center;font-size: 30px;background-color: black;color: white;">Categories</li>
			  <li><?php 
							//including library
							require_once('./dbconnector.php');
							$conn = new DBConnector();
							$sql = "Select * From categories";
							$rows = $conn->runQuery($sql);
							foreach($rows as $r)
							{
							?>
								<a href="catePageM.php?cateID=<?=$r['cateID']?>"><?=$r['cateName']?></a>

						<?php
							}
						?>
				</li>
			</ul>
		</div>
		<div class="right">
			<div class="contentv1">
			<?php
                     $search=$_GET['search'];
               		require_once('./dbconnector.php');
                     $cn = new DBConnector();
                     $sql="Select * from product where genderID = 1 AND productName like '%$search%'";
                     $rows = $cn->runQuery($sql);
                     foreach ($rows as $r) {
               ?> 
          <a href="showDetail.php?productID=<?=$r['productID']?>">
          <div class="itemv1">
            <div class="imagev1"><img src="<?=$r['image']?>"></div>
            <div class="namev1"><?=$r['productName']?></div>
            <div class="pricev1"><?=$r['productPrice']?></div>
          </div>
          </a>
          <?php
            }
          ?>
			</div>
		</div>
	</div>
	<div class="footer"></div>
</body>
</html>