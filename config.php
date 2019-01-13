<?php 
	session_start();

	//connect to database 
	$conn = mysqli_connect('localhost', 'root', '', 'complete-blog-php');

    if(!$conn){
    	die("cannot connect to the database".mysqli_connect_error());
    }
	
	define( 'BASE_URL', 'http://localhost/complete-blog-php/');
?>
