<?php
	$connection = new MongoClient();

	$database = $connection->CBVT;

	$requests = $database->createCollection("requests");

	$licensenumber = $_POST["licensenumber"];
	$passportnumber = $_POST["passportnumber"];
	$address = $_POST["address"];
	$registerationnumber = $_POST["registerationnumber"];
	$vin = $_POST["vinnumber"];
	$make = $_POST["make"];
	$model = $_POST["model"];
	$color = $_POST["color"];
	$year = $_POST["year"];
	$bankname = $_POST["bankname"];
	$loannumber = $_POST["loannumber"];
	$companyname = $_POST["companyname"];
	$policynumber = $_POST["policynumber"];
	$owner = $_POST["owner"];

	$requestinfo = array(
			"licensenumber" => $licensenumber,
			"passportnumber" => $passportnumber,
			"address" => $address,
			"registerationnumber" => $registerationnumber,
			"vin" => $vin,
			"make" => $make,
			"model" => $model,
			"color" => $color,
			"year" => $year,
			"bankname" => $bankname,
			"loannumber" => $loannumber,
			"companyname" => $companyname,
			"policynumber" => $policynumber,
			"owner" => $owner,
			"requeststatus" => false,
			"dmvapproved" => false,
			"bankapproved" => false,
			"requestdenied" => false
		);

	$requests->insert($requestinfo);

	echo "Inserted";

	header('Location: http://localhost/cbvt/');
?>