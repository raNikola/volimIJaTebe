<?php
/**
 * Plugin Name: Volim Te Najvise na Svetu
 * Description: Da Osetis Leptirice U Stomaku
 * version: 1.0.
 * Author: Pa Naravno JA
 * Author URI: https://raNikola.iz.rs
 */

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

/*
 * This is the "official" OO way to do it,
 * BUT $connect_error was broken until PHP 5.2.9 and 5.3.0.
 */
if ($mysqli->connect_error) {
	die('Connect Error (' . $mysqli->connect_errno . ') '
	    . $mysqli->connect_error);
}

/*
 * Use this instead of $connect_error if you need to ensure
 * compatibility with PHP versions prior to 5.2.9 and 5.3.0.
 */
if (mysqli_connect_error()) {
	die('Connect Error (' . mysqli_connect_errno() . ') '
	    . mysqli_connect_error());
}

var_dump( 'Success... ' . $mysqli->host_info . "\n" );

/**
 * Drop all Tables from DB
 */

$mysqli->query('SET foreign_key_checks = 0');
if ($result = $mysqli->query("SHOW TABLES"))
{
	while($row = $result->fetch_array(MYSQLI_NUM))
	{
		$mysqli->query('DROP TABLE IF EXISTS '.$row[0]);
	}
}

$mysqli->query('SET foreign_key_checks = 1');

var_dump('LELE LELeee Sve sam Gu Prejebaja');

$mysqli->close();