<?php
	// upload snaps from the command line

	require('../snaphax.php');

	function main() {
		global $argv;

		if (count($argv) != 4) {
			die("$argv[0]: usage $argv[0] [email] [pass] [username]\n");
		}

		$opts = array();
		$opts['email'] = $argv[1];
		$opts['password'] = $argv[2];
		$opts['username'] = $argv[3];
		$opts['debug'] = 1; 

		$s = new Snaphax($opts);
		echo "Registering...";
		$result = $s->register();
		var_dump($result);
		echo "Registering username...";
		$result = $s->registerUsername();
		var_dump($result);
	}

	main();
