<?php
function returnHeadline($menu)
{
	$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	foreach ($menu as $menuItem) {
		if (array_search($urlPath, $menuItem)) {
			return $menuItem['title'];
		}
	}
}