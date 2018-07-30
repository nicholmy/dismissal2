<?php
	#Supposed to be a template for connecting to the database, 
	#but can't seem to get it to work.
	
	#Connect to MYSQL
	$conn = mysqli_connect("mysql.kippenc.org", "kippgast_mnichol", "Yumyum92!!!");
				
	#Select the database
	$rs = mysqli_select_db($conn, "kippgast_dismissal") or die(''.mysqli_error());
?>