<?php
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['pass'];

	echo "My name is :".$username;
	echo "<br>";
	echo "My password is :".$password;
}

?>