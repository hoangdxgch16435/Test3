<?php
$connection = pg_connect("host=ec2-54-235-86-101.compute-1.amazonaws.com port=5432 dbname=d417ob2n4lkqrd user=ffjjnqkvqbgtdv password=2f8d36a7a380dfc345899711053cdda743a2bee9a633221b537e1d9ca96730e4");  
 if(!$connection) {
     die("Database connection failed");
 }

//this is used to execute all SQL queries
function pg_query($query) {
    global $connection;
    $result = $connection->query($query);
    if (!$result) {
        die ($connection->error);
    }
    return $result;
}

//this is used to create table
function createTable($name, $body){
    $str = "CREATE TABLE IF NOT EXISTS $name($body)";
    queryMysql($str);
    echo "Table $name is created or already exists";
}

//this is for security purpose
function sanitizeString($str) {
    global $connection;
    $str = strip_tags($str); //remove html tags
    $str = htmlentities($str); //encode html (for special characters)
    if (get_magic_quotes_gpc()){
        $str = stripslashes($str); //Don't use the magic quotes
    }
    //Avoid MYSQL Injection
    $str = $connection->real_escape_string($str);
    return $str;
}

//Convert password into encrypted form
function passwordToToken($password){
    global $salt1;
    global $salt2;
    $token = hash ("ripemd128", "$salt1$password$salt2");
    return $token;
}

//Add user to the database
function addUser($username, $password, $status){
    //Setup one default user
    $result = queryMysql("SELECT * FROM User where username='$username'");
    $row = mysqli_fetch_assoc($result);
    if (!$row) { //user doesn't exist
        //Add a default user
        $token = passwordToToken($password);
        $query = "INSERT INTO User(username, password, status) VALUES('$username', '$token', '$status')";
        queryMysql($query);
        return 1; //added
    }else {
        return 0; //not added
    }
}
function runQuery($sql){
		$conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpassword, $this->dbname);
		//chay cau truy van
		$result = $conn->query($sql);
		//doc ket qua chay cau truy van, tra ve mot mang
		$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
		//dong ket noi
		$conn->close();
		return $rows;
	}