<html>
	<head>
		<title>
			GYAAN
		</title>

	</head>
	<body>
		<header>
			<form action="" method="post">
				Username : 
				<input type="text" name="username" required>
				Password :
				<input type="password" name="password" required>
				<input type="submit" value="Login" name="login" />
			</form>
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
			<a href="regteacher.php">Register as Faculty</a>
		</section>
	<footer>
	</footer>
	    <script src="js/init.js"></script>
	</body>
</html>