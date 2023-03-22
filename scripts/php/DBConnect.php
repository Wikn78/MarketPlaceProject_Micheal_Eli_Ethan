<?php
	$dbhost = 'fdb30.awardspace.net';
	$dbuser = '4245416_se4050ethanlouis';
	$dbpass = 'pBMPWAcs0_@Xvfuj';
	$dbname = '4245416_se4050ethanlouis';
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(! $conn ) {
		die('Could not connect: ' . mysqli_error());
	}
?>      