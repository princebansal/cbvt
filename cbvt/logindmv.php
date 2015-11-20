<?php
	
	$connection = new MongoCLient();
	$database = $connection->CBVT;
	$dmv = $database->createCollection('dmv');

	$dmvid = $_POST["dmvid"];

	$dmvinfo = array('dmvid' => $dmvid);

	$user = $dmv->find($dmvinfo);

	foreach($user as $tr){
		$id = $tr["_id"];
		header('Location: http://localhost/cbvt/dmv.php?id='.$id);
		exit();
	}

	$dmv->insert($dmvinfo);
	$user = $dmv->find($dmvinfo);
	foreach($user as $tr){
		$id = $tr["_id"];
		header('Location: http://localhost/cbvt/dmv.php?id='.$id);
		exit();
	}

?>