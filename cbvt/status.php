<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/materialize.css">
	<style type="text/css">
		body{
		}
		.input-field label {
			color: #fff;
		}
		/* label focus color */
		.input-field input[type=text]:focus + label {
			color: #fff;
		}
		/* label underline focus color */
		.input-field input[type=text]:focus {
			border-bottom: 1px solid #fff;
			box-shadow: 0 1px 0 0 #fff;
		}
		/* valid color */
		.input-field input[type=text].valid {
			border-bottom: 1px solid #fff;
			box-shadow: 0 1px 0 0 #fff;
		}
		/* invalid color */
		.input-field input[type=text].invalid {
			border-bottom: 1px solid #fff;
			box-shadow: 0 1px 0 0 #fff;
		}
		/* icon prefix focus color */
		.input-field .prefix.active {
			color: #fff;
		}
		.form{
			position:absolute;
			top:100px;
			left:5%;
			width:85%;
			padding:40px;
			border-radius:5px;
			z-index:0;
			height:300px;
			background-color:rgba(255,255,255,0.9);
		}
		.blur{
			width:100%;
			-webkit-filter: blur(8px);
		}
		.background{
			width:1400px;
			position:fixed;
			top:0px;
			left:-15px;
		}
		.footer{
			position:absolute;
			top:900px;
			height:30px;
			background-color:rgba(0,0,0,0);
		}
		nav{
			position:fixed;
			z-index:100;
			background-color:white;
		}
		nav a{
			color:#514b4b !important;
			font-size:18px !important;
			font-family: 'Big Caslon', 'Book Antiqua', 'Palatino Linotype', Georgia, serif;
		}
		.brand-logo{
			margin-left:30px;
			font-size:25px !important;
			font-family: 'Big Caslon', 'Book Antiqua', 'Palatino Linotype', Georgia, serif;
		}
		.btn1{
			margin-left:25%;
			margin-top:15px;
			width:300px;
			background-color:#ff3a3f;
		}
		.btn1:hover{
			margin-left:25%;
			margin-top:15px;
			width:300px;
			background-color:#fff;
			color:#514b4b;
		}
		.btn2{
			margin-left:25%;
			margin-top:15px;
			width:300px;
			background-color:#08a562;
		}
		.btn2:hover{
			margin-left:25%;
			margin-top:15px;
			width:300px;
			background-color:#fff;
			color:#514b4b;
		}
		.left-side{
			width:50%;
			height:90%;
			position:absolute;
			top:15px;
			left:0px;
			border-right: 2px dashed #686969;
		}
		.right-side{
			width:50%;
			height:90%;
			position:absolute;
			top:15px;
			left:50%;
		}
		.from{
			width:50%;
			height:40%;
			position:absolute;
			top:15px;
			left:0px;
			padding:30px;
		}
		.to{
			width:50%;
			height:40%;
			position:absolute;
			top:15px;
			left:50%;
			padding:30px;
		}
		.vehicle{
			position:absolute;
			top:45%;
			padding-left:30px;
			margin-top:10px;
			width:100%;
			font-size:17px;
		}
		h4{
			font-size:18px;
		}
		h5{
			text-align:center;
			font-size:18px;
			margin-top:50px;
		}
		h2{
			text-align:center;
			color:#ff3a3f;
			margin-top:20px;
		}
		@media screen and (max-width: 990px) {
			.overlay{
				left:25%;
			}
		}
		@media screen and (max-width: 740px) {
			.overlay{
				left:15%;
			}
		}
		@media screen and (max-width: 550px) {
			.overlay{
				left:5%;
			}
		}
	</style>
</head>
	<body>
		<div class="blur">
			<img src="download.jpg" class="background">
		</div>
		<?php
			$userid = $_GET["id"];
	
			$connection = new MongoCLient();
			$database = $connection->CBVT;
			$requests = $database->requests;

			$requestType = array('owner' => $userid);

			$travelrequests = $requests->find($requestType);

			foreach($travelrequests as $tr){
		?>
		<nav>
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo">Cross Border Vehicle Transport</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="home.php?id=<?php echo $tr['owner'] ?>">New Request</a></li>
					<li><a href="status.php?id=<?php echo $_GET['id'] ?>">Request Status</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="home.php">New Request</a></li>
					<li><a href="status.php">Request Status</a></li>
				</ul>
			</div>
		</nav>
		<div class="form">
			<div class="left-side">
				<div class="from">
					<h6>From</h6>
					<h4>26 November, 2015</h4>
				</div>
				<div class="to">
					<h6>To</h6>
					<h4>31 December, 2015</h4>
				</div>
				<div class="vehicle">
					<p>Vehicle Registeration Number : <span><?php echo $tr["registerationnumber"]; ?></span></p>
					<p>Vehicle : <span><?php echo $tr["make"]; ?></span> <span><?php echo $tr["model"]; ?></span></p>
					<p>VIN : <span><?php echo $tr["vin"]; ?></span></p>
				</div>
			</div>
			<?php
				$requeststatus = $tr["requeststatus"];
				if(!$requeststatus){
					echo '
						<div class="right-side">
							<h5>Request Status</h5>
							<h2>Pending</h2>
							<a class="btn btn1">Cancel Request</a>
						</div>
					';
				}
				else{
					echo '
						<div class="right-side">
							<h5>Request Status</h5>
							<h2 style="color:#08a562">Approved</h2>
							<a class="btn btn2">View Approval</a>
						</div>
					';
				}
			?>
		</div>

		<?php } ?>

		<script type="text/javascript" src="js/materialize.js"></script>
	</body>
</html>