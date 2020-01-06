<?php

function returnMenu($menu, $sort, $cssClass)
{
	$menu = arraySort($menu, $key = 'sort', $sort);
	include $_SERVER['DOCUMENT_ROOT'] . '/template/menu.php';
}