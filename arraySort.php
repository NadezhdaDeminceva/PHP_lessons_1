<?php
function arraySort($menu, $key, $sort)
{
	usort($menu, function($a, $b) use ($key, $sort) {
		return $sort == SORT_DESC ? $b[$key] <=> $a[$key] : $a[$key] <=> $b[$key];
	});
	return $menu;
};
