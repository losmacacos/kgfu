<?php

try{
	
	$conn = new PDO("pgsql:host=ec2-107-22-167-179.compute-1.amazonaws.com port=5432 user=xbqchcqmahywjf password=3134588892d703a5b5327524a1580e3ddcfc06fa520f77464bbb63e5f8efd55d dbname=d2jljet10m16fv");
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}