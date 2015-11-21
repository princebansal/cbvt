<?php
	echo "In Here";
	$connection = new MongoCLient();
	$database = $connection->CBVT;
	$drivers = $database->createCollection('drivers');
	
	echo "database connection";
	$licensenumber = $_POST["licensenumber"];
	$passportnumber = $_POST["passportnumber"];

	$driverinfo = array('licensenumber' => $licensenumber, 'passportnumber' => $passportnumber);

	$driver = $drivers->find($driverinfo);
	echo "Find Done";
	foreach($driver as $tr){
		$id = $tr["_id"];
		header('Location: http://localhost/cbvt/home.php?id='.$id);
		exit();
	}
	$photo = "";
	$driverinfor = array('licensenumber' => $licensenumber, 'passportnumber' => $passportnumber, 'photo' => $photo);
	$drivers->insert($driverinfor);
	$driver = $drivers->find($driverinfor);
	foreach($driver as $tr){
		$id = $tr["_id"];
		header('Location: http://localhost/cbvt/uploadphoto.php?id='.$id);
		exit();
	}

?>