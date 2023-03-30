<?php
	$dbhost = 'fdb30.awardspace.net';
	$dbuser = '4240997_michaelh';
	$dbpass = 'CodingRocks88';
	$dbname = '4240997_michaelh';
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(! $conn ) {
		die('Could not connect: ' . mysqli_error());
	}

	

?>      