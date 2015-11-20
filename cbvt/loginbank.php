<?php
	
	$connection = new MongoCLient();
	$database = $connection->CBVT;
	$banks = $database->createCollection('banks');

	$bankid = $_POST["bankid"];

	$bankinfo = array('bankid' => $bankid);

	$bank = $banks->find($bankinfo);

	$count = count($bank);

	if($count === 1){
		$banks->insert($bankinfo);
		header('Location: http://localhost/cbvt/bank.php');
	}
	else{
		header('Location: http://localhost/cbvt/bank.php');
	}

?>