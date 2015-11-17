<?php
	
	$connection = new MongoCLient();
	$database = $connection->CBVT;
	$requests = $database->createCollection("requests");

	$requestType = array('bankapproved' => false, 'dmvapproved' => true, 'requestdenied' => false);

	$travelrequests = $requests->find($requestType);

	foreach($travelrequests as $tr){
		echo $tr["licensenumber"];
		$id = $tr["_id"];
		echo '<a href="bankapproverequest.php?id=';echo $id;echo '" >Approve</a>';
	}
?>