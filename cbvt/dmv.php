<?php
	
	$connection = new MongoCLient();
	$database = $connection->CBVT;
	$requests = $database->createCollection("requests");

	$requestType = array('requeststatus' => false);

	$travelrequests = $requests->find($requestType);

	foreach($travelrequests as $tr){
		echo $tr["licensenumber"];
		$id = $tr["_id"];
		echo '<a href="approverequest.php?id=';echo $id;echo '" >Approve</a>';
	}
?>