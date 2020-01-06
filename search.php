<?php

function search($login, $password)
{
	$login = mysqli_real_escape_string(connect(), $_POST['login']);
	$password = mysqli_real_escape_string(connect(), $_POST['password']);
	
    $result = mysqli_query(connect(), "select * from users where email = '$login'");
    $row = mysqli_fetch_assoc($result);
	return md5($password) == $row['password'];
};

