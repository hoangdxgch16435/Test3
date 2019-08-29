<?php

$connection = pg_connect("host=ec2-54-197-234-117.compute-1.amazonaws.com port=5432 dbname=d9d0847k2d7foi user=cpswmthrtfyytc password=dbc2e563241035e26679e4938a872f606e46b0e2a96c11fbfd764a92487acb8d");  
 if(!$connection) {
     die("Database connection failed");
 }
 ?>
