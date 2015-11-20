<?php
	
	$connection = new MongoCLient();
	$database = $connection->CBVT;
	$banks = $database->createCollection('banks');

	$bankid = $_POST["bankid"];

	$bankinfo = array('bankid' => $bankid);

	$bank = $banks->find($bankinfo);

	foreach($bank as $tr){
		$id = $tr["_id"];
		header('Location: http://localhost/cbvt/bank.php?id='.$id);
		exit();
	}

	$banks->insert($bankinfo);
	$bank = $banks->find($bankinfo);
	foreach($bank as $tr){
		$id = $tr["_id"];
		header('Location: http://localhost/cbvt/bank.php?id='.$id);
		exit();
	}
?>