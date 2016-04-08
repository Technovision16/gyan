<html>
	<head>
		<title>
			GYAN
		</title>
			<!--Import Google Icon Font-->
			<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 			<!--Import materialize.css-->
      		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
			<!--Let browser know website is optimized for mobile-->
     		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
	<div class="row">
    <div class="col s12">
    <div class="card-panel teal lighten-2">
		<header>
		<form class="col s12">
      	<div class="row">
        <div class="input-field col s6">
          	<input  id="first_name" type="text" class="validate" name="username" required>
          	<label for="first_name">First Name</label>
        </div>
<!--			<form action="" method="post">
				Username : 
				<input type="text" name="username" required>
				Password :
				<input type="password" name="password" required>
				<input type="submit" value="Login" name="login" />
			</form>
-->
				<?php
					if(isset($_POST["login"]))
					{
						$link = mysql_connect('localhost', 'root', '');
		          		$mydb = mysql_select_db('test',$link);
		          		$username = $_POST["username"];
		          		$password = $_POST["password"];
		          		$sql = "SELECT * FROM gyanuser WHERE (username= '$username' AND password='$password')";
		          		$data = mysql_query($sql);
		          		$count = mysql_num_rows($data);
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
			    ?>
		</header>
		</div>
		</div>
		</div>
		<section>
			<form action="" method="post">
				Username : 
				<input type="text" name="username" required /><br>
				Password :
				<input type="password" name="password" required /><br>
				Name:
				<input type="text" name="name" required /><br>
				Location:
				<input type="text" name="location" required /><br>
				Age:
				<input type="number" name="age" required /><br>
				Gender:<br>
    			<input type="radio" name="gender" value="M">M<br>
    			<input type="radio" name="gender" value="F">F<br>
				DOB:
				<input type="date" name="dob" required /><br>
				Mobile:
				<input type="number" name="mobile" required />
				<input type="submit" value="Register" name="register" />
			</form>
				<?php
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
		          		$sql = "SELECT * FROM gyanuser WHERE (username= '$username')";
		          		$data = mysql_query($sql);
		          		$count = mysql_num_rows($data);
		          		if($count!=0)
			          	{
			          		echo "username already exists!!!";
			          	}
			          	else
			          	{
			          		$result = mysql_query("INSERT INTO gyanuser VALUES ('$username','$password','$name','$location','$age','$gender','$dob','$mobile')");
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
		</section>
	<footer>
	</footer>
		<!--Import jQuery before materialize.js-->
     	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      	<script type="text/javascript" src="js/materialize.js"></script>
	</body>
</html>