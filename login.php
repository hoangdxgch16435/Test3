<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<h2 style="text-align: center;">Login</h2>

		<form action="manager.php">
		  <div class="imgcontainer">
		    <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
		  </div>

		  <div class="container">
		    <label for="uname"><b>Username</b></label>
		    <input type="text" placeholder="Enter Username" name="uname" required>

		    <label for="psw"><b>Password</b></label>
		    <input type="password" placeholder="Enter Password" name="psw" required>
		        
		    <a href="manager.php"><button type="submit">Login</button></a>

		  </div>

		  <div class="container" style="background-color:#f1f1f1">
		    <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
		    <a href="register.php"><button type="button" class="regist" style="height:40px;width: 100px;float: right;background-color: #5BBEB6;">Register</button></a>
		  </div>
		</form>
</body>
</html>