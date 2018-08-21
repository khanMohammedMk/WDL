<!DOCTYPE html>
<?php
	session_start();
	?>
	<head>
		<title>My Blog page</title>
	</head>
	<body>
	</body>
	<?php
		if($_POST){
			if($_POST['Logout']== "yes"){
				session_destroy();
			}
		}
		if(isset($_SESSION['user'])){
			echo "<h1> Welcome $_SESSION[user] !</h1>"
			. "<b>College :</b> $_SESSION[College]<br>"
			. "<b>Class :</b> $_SESSION[Class]<br>"
			."<b>Batch :</b> $_SESSION[Batch]<br>";

			echo "<br>"
			."<form method='post' action = 'blog.php'>"
			."<input type='hidden' name='Logout' value='yes'/>"
			."<input type='Submit' value='Logout'/>"
			."</form>";
		}
		else{
			header("Refresh:0, url=login.php");
		}
		?>
	</body>
	</html>