<?php
	
	$connection = new MongoCLient();
	$database = $connection->CBVT;
	$requests = $database->requests;

	$id = $_GET["id"];
	$condition = array("_id" => new MongoId($id));

	$update = array("bankapproved" => true, 'requeststatus' => true);

	$requests->update($condition, 
      array('$set' => $update));

	header('Location: http://localhost/cbvt/bank.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<img alt="testing" src="/cbvt/barcode.php?size=50&text=<?php echo $id ?>" />
</body>
</html>