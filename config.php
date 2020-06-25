<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root")
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'localhost';
$databaseName = 'gallery';
$databaseUsername = 'root';
$databasePassword = '';
/*$databaseHost = 'sql307.epizy.com';
$databaseName = 'epiz_26099454_image';
$databaseUsername = 'epize_26099454';
$databasePassword = 'Rasika12345';*/

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>
