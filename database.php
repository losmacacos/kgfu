<?php

try{
	
	$conn = new PDO("pgsql:host=localhost port=5432 user=postgres password=123456 dbname=kungfuatibaia2");
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}