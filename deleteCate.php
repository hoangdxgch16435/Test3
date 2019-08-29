<?php 
	require_once('./dbconnector.php');

	$ID=$_GET['cateID'];
    $sql="DELETE FROM categories WHERE cateID = $ID";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:viewCate.php'); 
 ?>