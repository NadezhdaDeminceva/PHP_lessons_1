<?php

function isAuthorized()
{
	if ($_SESSION['isAuth'] ?? '') {
		setcookie ('login', $_COOKIE['login'], time() + 60*60*24*31, '/');
	} elseif (parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY) != 'login=yes') {
		header('Location: /?login=yes');
	} 
};


