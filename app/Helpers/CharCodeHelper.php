<?php

if (!function_exists('utf16_code')) {


// UTF-8 string to code point
	function utf16_code($s) {
		 list(, $d) = unpack('N', mb_convert_encoding($s, 'UCS-4BE', 'UTF-8'));
		return dechex($d);
	}
}
