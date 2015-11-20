<?php
	
	$connection = new MongoCLient();
	$database = $connection->CBVT;
	$drivers = $database->createCollection('drivers');

	$licensenumber = $_POST["licensenumber"];
	$passportnumber = $_POST["passportnumber"];

	$driverinfo = array('licensenumber' => $licensenumber, 'passportnumber' => $passportnumber);

	$driver = $drivers->find($driverinfo);

	$count = count($driver);

	if($count === 1){
		$drivers->insert($driverinfo);
		header('Location: http://localhost/cbvt/home.php');
	}
	else{
		header('Location: http://localhost/cbvt/home.php');
	}

?>