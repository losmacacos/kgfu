<?php

try{
	
	$conn = new PDO("pgsql:host=ec2-184-73-174-10.compute-1.amazonaws.com port=5432 user=zwjaegfjfxxizf password=5049949664477c785135e52fbb54265edc71a7a3c2c67cfdcc878f16f7763741
 dbname=d2jljet10m16fv");
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}