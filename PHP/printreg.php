<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>YOUR REGISTRATION INFO</title>
	<style>
		table{
			border: 5px solid black;
		}
		table td{
			padding: 10px;
		}
		table tr:nth-child(odd){
			background-color: purple;
		}
	</style>
</head>
<body>
<?php

require_once 'functions.php';
if($_POST){
	$rollno=$_POST['rollno'];
	$name=$_POST['sname'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$dob=$_POST['dob'];
	$sem=$_POST['sem'];
	$semail=$_POST['semail'];
	$dept=$_POST['dept'];
	$batch=$_POST['batch'];
	if(!empty($rollno)&&!empty($name)&&!
	empty($gender)&&
		!empty($address)&&!empty($dob)&&!
	empty($sem)&& 
	!empty($semail)&&!empty($dept)&&!
	empty($batch))	{
		?>
		<table>
			<tr>
				<td>Roll no</td>
				<td><?php echo fix_rollno($rollno);?></td>	
			</tr>
			<tr>
				<td>Gender</td>
				<td><?php echo $gender;?></td>	
			</tr>
			<tr>
				<td>Address</td>
				<td><?php echo fix_address($address);?></td>	
			</tr>
			<tr>
				<td>Semester</td>
				<td><?php echo $sem;?></td>	
			</tr>
			<tr>
				<td>Date of birth</td>
				<td><?php echo $dob;?></td>	
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo fix_email($semail);?></td>	
			</tr>
			<tr>
				<td>Dept</td>
				<td><?php echo $dept;?></td>	
			</tr>
			<tr>
				<td>Batch</td>
				<td><?php echo $batch;?></td>	
			</tr>
		</table>
<?php
	}
	else{
		echo "<span>SOMETHING IS MISSING</span>";
		header('Refresh:2,url=../registration.html');

	}

}

	else{
		header('Refresh:0,url=../registration.html');
	}
?>
</body>
</html>