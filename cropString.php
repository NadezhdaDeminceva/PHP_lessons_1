<?php
function cropString($string, $stringLength = 12)
{
	if (strlen($string) > $stringLength) {
		return substr($string, 0, 12) . '...';
	}
	return $string;
}


