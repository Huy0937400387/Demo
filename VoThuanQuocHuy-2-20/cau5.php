
<?php 
	include ('./users.php');
	$obj_users = new users();

	$users = $obj_users->getUsers();
	var_dump($users);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="./public/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<link href="./public/css/styles.css" rel="stylesheet" type="text/css">

	<script src="./public/js/jquery-2.1.4.min.js"></script>
	<script src="./public/js/bootstrap.min.js"></script>

	<style type="text/css">
		.container {
			text-align: center;
		}
		.type {
			font-size: 50px;
			text-align: center;
			color: blue;
			padding-top: 100px;
		}
		.tieude {
			text-align: center;
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="col-md-12 boder">
			<div class="type">Our team</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 sol-xs-12 class">
						<div class="images">
							<img src="./public/images/pic1">
							
						</div>
						<div class="tieude">
							<a href="#"><h3>ROBERT JONHSON</h3></a>
						</div>
				</div>
				<div class="col-md-4 col-sm-6 sol-xs-12 class">
						<div class="images">
							<img src="./public/images/pic2">
							
						</div>
						<div class="tieude">
							<a href="#"><h3>ROBERT JONHSON</h3></a>
						</div>
				</div>
				<div class="col-md-4 col-sm-6 sol-xs-12 class">
						<div class="images">
							<img src="./public/images/pic3">
							
						</div>
						<div class="tieude">
							<a href="#"><h3>ROBERT JONHSON</h3></a>
						</div>
				</div>

			</div>
		</div>
	</div>
</body>
</html>