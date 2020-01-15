<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 align="center"><u>Please Fillup This From</u></h1>
<form action="from_data.php" method="post">
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
	$first_name = $_POST['firstname'];
	$lastname  = $_POST['lastname'];
	$Uname =$_POST['Uname'];
	$pass = md5($_POST['pass']); // encrypt password
}

?>
<h1 align="center"><u>Your Details Details</u></h1>
<table align="center" border="2" cellpadding="10">
	<tr>
		<td>First Name</td>
		<td>Last Name</td>
		<td>User Name</td>
		<td>Password</td>
	</tr>
	<tr>
		<td><?php echo $first_name; ?></td>
		<td><?php echo $lastname; ?></td>
		<td><?php echo $Uname; ?></td>
		<td><?php echo $pass; ?></td>
	</tr>
</table>
</body>
</html>