<?php
	
	$connection = new MongoCLient();
	$database = $connection->CBVT;
	$drivers = $database->createCollection('drivers');

	$licensenumber = $_POST["licensenumber"];
	$passportnumber = $_POST["passportnumber"];

	$driverinfo = array('licensenumber' => $licensenumber, 'passportnumber' => $passportnumber);

	$driver = $drivers->find($driverinfo);

	foreach($driver as $tr){
		$id = $tr["_id"];
		header('Location: http://localhost/cbvt/home.php?id='.$id);
		exit();
	}

	$drivers->insert($driverinfo);
	$driver = $drivers->find($driverinfo);
	foreach($driver as $tr){
		$id = $tr["_id"];
		header('Location: http://localhost/cbvt/home.php?id='.$id);
		exit();
	}

?>