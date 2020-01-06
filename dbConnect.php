<?php


function connect()
{
	static $connection = null;
	if (null === $connection) {
		$connection = mysqli_connect('newgrade.vpool', 'test', 'test', 'demintsevan_test') or die('connevction Error');
	}
	return $connection;
}


