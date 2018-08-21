<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>My PHP Exmaple at AIKTC</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1.0">

</head>
<body>
	<?php

	echo '<h1>WELCOME TO PHP</h1>';
	if($_POST){
	$username=$_POST['username'];
	$brand=$_POST['brand'];
	echo "THNANK YOU,$username You have voted for $brand";


	}
	else{
	echo <<<_END
		<form method="post"
		action="myexample.php">
		<br><label for="user">User
		Name: </label>
		<input type="text"
		name="username"
		id="username"/><br>
		<br><label>Please vote for your brand</label>
		<br>
		<br><label><input type="radio" name="brand" value="NOKIA"/>
		NOKIA</label>
		<br><label><input type="radio" name="brand" value="APPLE"/>
		APPLE</label>
		<br><label><input type="radio" name="brand" value="SAMSUNG"/>
		SAMSUNG</label>
		<br><label><input type="radio" name="brand" value="HTC"/>
		HTC</label>
		<br><label><input type="radio" name="brand" value="ASUS"/>
		ASUS</label>
		<br><br><input type="SUBMIT" value="VOTE"/>
_END;
	phpinfo();

			}
?>

</body>
</html>