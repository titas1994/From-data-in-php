<!DOCTYPE html>
<html>
<head>
	<title>From Validation</title>
</head>
<body>
<h1 align="center"><u>Please Fillup This From</u></h1>
<form action="from_validation.php" method="post">
<table border="2" cellpadding="5" align="center">
	<tr>
		<td>First Name</td>
		<td><input type="text" name="firstname"></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text" name="lastname"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="Uname"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="PassWord" name="pass"></td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="submit" value="Enter">
		</td>
		<td>
			<input type="reset" name="reset">
		</td>
	</tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
	$nam= ['titas','nil','anwesha','srimaye'];
	$minmum =3;
	$maximum =6;
	$first_name = $_POST['firstname'];
	$lastname  = $_POST['lastname'];
	$Uname =$_POST['Uname'];
	$pass = md5($_POST['pass']); // encrypt password
	
	if(strlen($Uname) < $minmum){ //username length check

		echo "user name has longer to than 3";
	}
	elseif(strlen($Uname) > $maximum){ //username length check 

		echo "user name has longer to than 6";
	}
	elseif(in_array($Uname,$nam)){ //username validation
		echo "user name already exit";
	}
	else{
		echo "Welcome";
	}
}

?>
</body>
</html>