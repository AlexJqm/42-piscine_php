<?php
	$con = mysqli_connect("localhost", "root", "root") or die("Connection Failed");
	if(!mysqli_select_db($con, "loginDB")){
		$create_db = 'CREATE DATABASE IF NOT EXISTS loginDB';
		$create_usr_table = "CREATE TABLE IF NOT EXISTS UserInfo (username varchar(200) NOT NULL, password varchar(200) NOT NULL)";
		$create_cart_table = "CREATE TABLE IF NOT EXISTS tblproduct (
			id int(8) NOT NULL AUTO_INCREMENT,
			name varchar(255) NOT NULL,
			code varchar(255) NOT NULL,
			image text NOT NULL,
			price double(10,2) NOT NULL,
			PRIMARY KEY (id),
			UNIQUE KEY product_code (code)
		)";
		mysqli_query($con, $create_db);
		mysqli_query($con, $create_usr_table);
		mysqli_query($con, $create_cart_table);
	}
?>
