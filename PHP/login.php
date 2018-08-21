<!DOCTYPE html>
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
	#login-box{
		width:25%;
		margin:7em auto;
		border:1px solid black;
		border-radius: 5px;
		padding: 10px;
			}
	#login-box>input{
		display: black;
		width: 90%;
		margin: 0 auto;
		margin-bottom: 10px;

	}
	#login-box>span{
		display: block;
		text-align: center;
		margin-bottom: 10px;


	}
</style>
</head>
<body>
	<?php
	if($_POST){
		$username =$_POST['username'];
		$pass =$_POST['pass'];
		if($username=="mohammed" && $pass=="145541"){
			echo "executed";			
			echo '<span>Login Successful!
				you will be redirected to
				blog page</span>';
				$_SESSION['user']=$username;
				$_SESSION['College']="AIKTC";
				$_SESSION['Class']="TE";
				$_SESSION['Batch']="B2";
				header("Refresh:3, url =blog.php");
		}
		else {
			echo '<span>Incorrect username or password !</span>';
		}
	}
	?>
	<form method="post" action="login.php">
	<div id="login-box">
		<span>Log In</span>
		<input type="Text" name="username" id="username"
				placeholder="Username" required="required"/>
		<input type="password" name="pass" id="pass"
		placeholder="password" required="required"/>
		<input type="submit" value="Log In"/>
	</div>
</form>
</body>
</html>
