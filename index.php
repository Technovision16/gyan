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
	<body class="black white-text">
						<?php
						if(isset($_POST["login"]))
						{
							$link = mysql_connect('localhost', 'root', '');
			          		$mydb = mysql_select_db('test',$link);
			          		$username = $_POST["username"];
			          		$password = $_POST["password"];
			          		$sql = "SELECT * FROM gyanuser WHERE (username= '$username' AND password='$password')";
			          		$data = mysql_query($sql);
			          		$count = mysql_fetch_assoc($data);
			          		if($count!=0)
				          	{
					          	setcookie("username",$username, time() + (86400 * 30), "/");
				          		header("Location: dashboard.php");
				          	}
				          	else
				          	{
				          		echo "Invalid Login";
				          	}
				        }
						if(isset($_POST["register"]))
						{
							$link = mysql_connect('localhost', 'root', '');
			          		$mydb = mysql_select_db('test',$link);
			          		$username = $_POST["username"];
			          		$password = $_POST["password"];
			          		$name = $_POST["name"];
			          		$location = $_POST["location"];
			          		$age = $_POST["age"];
			          		$gender = $_POST["gender"];
			          		$dob = $_POST["dob"];
			          		$mobile = $_POST["mobile"];		          		
			          		$adhaar = $_POST["adhaar"];
			          		$sql = "SELECT * FROM gyanuser WHERE (username= '$username')";
			          		$data = mysql_query($sql);
			          		$count = mysql_num_rows($data);
			          		if($count!=0)
				          	{
				          		echo "username already exists!!!";
				          	}
				          	else
				          	{
				          		$result = mysql_query("INSERT INTO gyanuser VALUES ('$username','$password','$name','$location','$age','$gender','$dob','$mobile','$adhaar')");
				          		if($result)
				          		{
				          			echo "Registration Successful";
				          		}
				          		else
				          		{
				          			die("Error in Registration, Sorry!!!");
				          		}
				          	}
			          	}
					?>

		<header>
			<nav style="position:fixed; z-index:+7;" class="grey">
			    <div class="nav-wrapper">
			      <a class="brand-logo center">GYAAN</a>
			    </div>
			</nav>
			  <br><br><br>
			  <div class="row">
				  <div class="col s8">
				  <br><br><br>
					 <div class="slider">
					    <ul class="slides">
					      <li>
					        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
					        <div class="caption center-align">
					          <h3>Education For All</h3>
					          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					        </div>
					      </li>
					      <li>
					        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
					        <div class="caption left-align">
					          <h3>Left Aligned Caption</h3>
					          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					        </div>
					      </li>
					      <li>
					        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
					        <div class="caption right-align">
					          <h3>Right Aligned Caption</h3>
					          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					        </div>
					      </li>
					      <li>
					        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
					        <div class="caption center-align">
					          <h3>This is our big Tagline!</h3>
					          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					        </div>
					      </li>
					    </ul>
					  </div></div><br>
			  		<span>Login</span>
       					<div class="col s4">
			  			<form class="white-text" style="size:10px; padding:0px 0px 0px 0px;" action="" method="post">
							Username : 
							<input type="text" name="username" required><br>
							Password :
							<input type="password" name="password" required>
							<input type="submit" value="Login" name="login">
						</form>
   					<form action="" method="post">
       									<span class="blue-text text-darken-2">Sign Up</span>
       									<br>
		        			<div class="input-field ">
		          				<input  id="first_name" type="text" class="validate" name="username" required>
		          				<label for="first_name">Username</label>
		        			</div><br>
		        			<div class="input-field ">
		          				<input id="last_name" type="password" class="validate" name="password" required>
		         				<label for="last_name">Password</label>
		       				</div><br>
		      				<div class="row">
		        			<div class="input-field ">
		          				<input id="text" type="text" class="validate" name="name" required>
		         				<label for="text">Name</label>
		       				</div>
		      				</div>
		      				<div class="row">
		        			<div class="input-field ">
		          				<input id="text" type="text" class="validate" name="location" required>
		         				<label for="text">Location</label>
		       				</div>
		      				</div>
		      				<div class="row">
		        			<div class="input-field ">
		          				<input id="number" type="text" class="validate" name="age" required>
		         				<label for="number">Age</label>
		       				</div>
		      				</div>
		      				<div class="row">
		        			<div class="input-field ">
		          				<input id="date" type="date" class="validate" name="dob" required>
		       				</div>
		      				</div>
		      				<p>Gender</p>      				
		      				<p>
		     					<input type="radio" id="test1" name="gender" value="M"/>
		      					<label for="test1">Male</label>
		    				</p>
		    				<p>
		      					<input  type="radio" id="test2" name="gender" value="F"/>
		      					<label for="test2">Female</label>
		   					</p>
		   					<div class="input-field col s6">
		          				<input id="number" type="text" class="validate" name="mobile" required>
		         				<label for="number">Mobile</label>
		       				</div><br>
		   					<div class="input-field col s6">
		          				<input id="number" type="text" class="validate" name="adhaar" required>
		         				<label for="number">Adhaar</label>
		       				</div><br>
		       				<div class="row">
		        				<button class="btn waves-effect waves-light" type="submit" value="Register" name="register">Register
		    					<i class="material-icons right">send</i>
		  						</button>
		      				</div>
      				</form>
      			</div>
				</div>
		</header><br>
				<section>
			<a>Register as Faculty</a>
		</section>
	<footer class="footer-fixed center grey" style="position:fixed; bottom:0px; width:100%; height:30px;">
		Padho Likho Jiyo
	</footer>
		<!--Import jQuery before materialize.js-->
     	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      	<script type="text/javascript" src="js/materialize.js"></script>
      	<script src="js/init.js"></script>
	</body>
</html>