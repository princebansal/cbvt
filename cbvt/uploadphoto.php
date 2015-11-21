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
			.request{
				position:relative;
				top:80px;
				height:250px;
				width:90%;
				margin-left:5%;
				margin-right:5%;
				margin-top:20px;
				border-radius:10px;
				z-index:0;
				background-color:rgba(255,255,255,0.9);
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
				top:0px;
				left:0px;
				padding:30px;
				padding-top:0px;
			}
			.to{
				width:50%;
				height:40%;
				position:absolute;
				top:0px;
				left:50%;
				padding:30px;
				padding-top:0px;
			}
			.vehicle{
				position:absolute;
				top:30%;
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
			nav{
				position:fixed;
				top:0px;
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
				margin-left:1%;
				margin-top:15px;
				background-color:#F5800A
			}
			.btn1{
				margin-left:30%;
				margin-top:15px;
				background-color:#08a562;
			}
			.btn2{
				margin-left:1%;
				margin-top:15px;
				background-color:#ff3a3f;
			}
			.btn1:hover{
				margin-left:30%;
				margin-top:15px;
				background-color:#fff;
				color:black;
			}
			.btn2:hover{
				margin-left:1%;
				margin-top:15px;
				background-color:#fff;
				color:black;
			}
			.button-container{
				margin-left:30%;
			}
			.photo{
				position:absolute;
				top:130px;
				left:30%;
				padding:50px;
				border-radius:10px;
				z-index:0;
				background-color:rgba(255,255,255,0.9);
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
				</ul>
			</div>
		</nav>
		<div class="photo">
			<img src="icon.png" style="width:300px;margin-left:30px;">
			<form action="upload.php" method="POST" enctype="multipart/form-data">
				<input type="file" class="btn" name="file" id="file"><br>
				<input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>">
				<input type="submit" class="btn btn1" name="submit" value="Submit">
			</form>
		</div>

		<script type="text/javascript" src="js/materialize.js"></script>
	</body>
</html>