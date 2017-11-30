<!DOCTYPE html>
<html>
<head>
	<?php include "imports.inc.php"; 
	if(file_exists("./config/config.php")) {
		include "./config/config.php";
		include "mysql.php";
		echo "<title>".$company_name."| Employee Management</title>";
	} else {
		echo "<title>Not configured!</title>";
	}

		?>
	
	
</head>
<body>

  