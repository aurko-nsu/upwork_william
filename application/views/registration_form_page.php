<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
	body {
    text-align: center;
}
form{
	display: inline-block;
}
input{
	width: 300px;
	height: 30px;
}
</style>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
<h1>Register Here</h1>

<form method="POST" role="form">
	<input type="text" name="name" placeholder="Enter your name"><br><br>
	<input type="email" name="email" placeholder="Enter your email"><br><br>
	<input type="password" name="password" placeholder="Enter your password"><br><br><br>
	<button type="submit" name="register_here">Register here</button>
</form>
</body>
</html>