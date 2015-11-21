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
			left:35%;
			width:400px;
			padding:40px;
			border-radius:10px;
			z-index:0;
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
		.btn{
			margin-left:30%;
			margin-top:15px;
			background-color:#F5800A
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
		<nav>
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo">Cross Border Vehicle Transport</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="home.php">New Request</a></li>
					<li><a href="status.php?id=<?php echo $_GET['id'] ?>">Request Status</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="home.php">New Request</a></li>
					<li><a href="status.php">Request Status</a></li>
				</ul>
			</div>
		</nav>
		<div class="form">
			<form method="POST" action="submitrequest.php">
				<input type="text" name="address" placeholder="Address">
				<input type="text" name="registerationnumber" placeholder="Registeration number">
				<input type="text" name="vinnumber" placeholder="VIN number">
				<input type="text" name="make" placeholder="Make">
				<input type="text" name="model" placeholder="Model">
				<input type="text" name="color" placeholder="Color">
				<input type="text" name="year" placeholder="Year">
				<input type="text" name="bankname" placeholder="Bank name">
				<input type="text" name="loannumber" placeholder="Loan Number">
				<input type="text" name="companyname" placeholder="Company Name">
				<input type="text" name="policynumber" placeholder="Policy Number">
				<input type="hidden" name="owner" value="<?php echo $_GET['id']; ?>">
				<input type="submit" class="btn" value="Submit">
			</form>
		</div>
		<br>
		<div class="footer">
			<p style="opacity:0;">Hey</p>
		</div>

		<script type="text/javascript" src="js/materialize.js"></script>
	</body>
</html>