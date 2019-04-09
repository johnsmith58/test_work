<!DOCTYPE html>
<html>
<head>
	<title>Login Form </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        .error {
            border: 10px solid red;
        }
    </style>
</head>
<body>
<?php

include "function.php";

?>
	<form id="form_input">

		<b>Username :</b>
	    <input type="text" name="name" id="name" required><br>

	    <div id="password_input">
        <b>Password :</b>
	    <input type="password" id="password" required><br>

	    <b>Confirm Password :</b>
	    <input type="password" id="confirm_password" required><br><br>
        </div>
        <p id="cursor_title"></p>
	    <input type="button" id="btnSubmit" value="Submit" onclick="return Validate()" detect-cursor='1' />
    </form>
</body>
</html>