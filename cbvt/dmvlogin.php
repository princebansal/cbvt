<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/materialize.css">
	<style type="text/css">
		body{
			overflow:hidden;
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
		.overlay{
			position:absolute;
			top:250px;
			left:35%;
			width:400px;
			height:250px;
			padding:40px;
			border-radius:10px;
			background-color:rgba(255,255,255,0.9);
		}
		.blur{
			width:100%;
			-webkit-filter: blur(8px);
		}
		.background{
			width:1400px;
			position:absolute;
			top:0px;
			left:-15px;
		}
		nav{
			position:absolute;
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
				<li><a href="index.php">Driver Login</a></li>
				<li><a href="banklogin.php">Bank Login</a></li>
				<li><a href="dmvlogin.php">DMV Login</a></li>
			</ul>
			<ul class="side-nav" id="mobile-demo">
				<li><a href="index.php">Driver Login</a></li>
				<li><a href="banklogin.php">Bank Login</a></li>
				<li><a href="dmvlogin.php">DMV Login</a></li>
			</ul>
		</div>
	</nav>
	<div class="overlay">
		<form method="POST" action="logindmv.php">
			<input type="text" name="dmvid" placeholder="DMV ID" autocomplete="off">
			<input type="submit" class="btn" value="Submit">
		</form>
	</div>

	<script type="text/javascript" src="js/materialize.js"></script>
</body>
</html>