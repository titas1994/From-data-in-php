<!DOCTYPE html>
<html>
<head>
	<title>Checking Form Submition</title>
</head>
<body>

<?php
if(isset($_POST['submit'])){
$username =$_POST['username'];
$pass =$_POST['pass'];

}

?>
<form action="checking_formsubmition.php" method="post">
	<input type="text" name="username" placeholder="Enter your name">
	<input type="password" name="pass" placeholder="Enter your password">
	<input type="submit" name="submit" value="Enter">
</form>
<?php
echo "My name is :".$username;
echo "My password is :".$pass;
?>
</body>
</html>