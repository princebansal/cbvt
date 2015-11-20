<?php
	
	$connection = new MongoCLient();
	$database = $connection->CBVT;
	$dmv = $database->createCollection('dmv');

	$dmvid = $_POST["dmvid"];

	$dmvinfo = array('dmvid' => $dmvid);

	$user = $dmv->find($dmvinfo);

	$count = count($user);

	if($count === 1){
		$dmv->insert($dmvinfo);
		header('Location: http://localhost/cbvt/dmv.php');
	}
	else{
		header('Location: http://localhost/cbvt/dmv.php');
	}

?>