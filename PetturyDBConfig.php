<?php

    //define
	// define (DB_USER, "root");
	define (DB_USER, "kjhmodis");
	define (DB_PASSWORD, "12341234");
	define (DB_DATABASE, "pettury");
	// define (DB_HOST, "localhost");
	define (DB_HOST, "zero.ch3jllns7bfa.us-east-1.rds.amazonaws.com:3306");

	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
?>
