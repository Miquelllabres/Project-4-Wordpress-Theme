<?php

add_action('init', 'myStartSession', 1);

function myStartSession($provience) {

	if (!$_COOKIE["region"]) {

		$geo = json_decode(file_get_contents('http://ipinfo.io/'));

		$region = "toronto";
		if ($geo->region == "British Columbia"){
			$region = "vancouver";
		};

		setcookie("region", $region, time() + (86400 * 30), "/"); // 86400 = 1 day
	}
}
