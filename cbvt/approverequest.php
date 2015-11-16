<?php
	
	$connection = new MongoCLient();
	$database = $connection->CBVT;
	$requests = $database->requests;

	$id = $_GET["id"];
	$condition = array("_id" => new MongoId($id));

	$update = array("requeststatus" => true);

	$requests->update($condition, 
      array('$set' => $update));

?>