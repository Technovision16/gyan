<html>
	<head>
		<title>
			GYAAN
		</title>
			<!--Import Google Icon Font-->
			<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 			<!--Import materialize.css-->
      		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
			<!--Let browser know website is optimized for mobile-->
     		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		<?php
          if(!isset($_COOKIE['username']))	
          	  {
          	  	header('Location: index.php');
          	  }
          if(isset($_POST["logout"]))
          {
			 	setcookie("username",'', time() + (86400 * 30), "/");
				header("Location: index.php");
          }
		?>
		<form method="POST" action="">
			<div class="right"><button class="btn waves-effect waves-light" type="logout" name="logout">Logout
	            <i class="material-icons right"></i></div>
		</form>

		<div class="row">
			<div class="col s2">
				<!--list-->
				<a href="#">1. a</a><br>
				<a href="#">2. a</a><br>
				<a href="#">3. a</a><br>
				<a href="#">4. a</a><br>
				<a href="#">5. a</a><br>
				<a href="#">6. a</a><br>
				<a href="#">7. a</a><br>
				<a href="#">8. a</a><br>
				<a href="#">9. a</a><br>
				<a href="#">10. a</a><br>
				<a href="#">1. a</a><br>
				<a href="#">1. a</a><br>
				<a href="#">1. a</a><br>
				<a href="#">1. a</a><br>
				<a href="#">1. a</a><br>

			</div>
			<div class="col s8">
				<div>
					<!--data of user-->
				</div>
				<div>
					<!--contents-->
				</div>
			</div>
			<div class="col s2">
				<!--progress bar-->
			</div>
		</div>
	<footer>
	</footer>
		<!--Import jQuery before materialize.js-->
     	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      	<script type="text/javascript" src="js/materialize.js"></script>
      	<script src="js/init.js"></script>
	</body>
</html>