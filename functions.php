<?php


function enableErrorReporting() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
enableErrorReporting();


function queryString() {
	if (!$_SERVER['QUERY_STRING']) {
		return 'query: /';
	}
	return 'query: ' . $_SERVER['QUERY_STRING'];
}


function show($things) { // needs better name
	echo "<code class='show-code'>";
		echo '<pre>';
			print_r($things);
		echo '</pre>';
	echo '</code>';
}


function currentRoute() {
	if ( !isset($_GET['page']) ) {
		return "home";
	} 
	return $_GET['page'];
}


function renderTemplate() {
	include("templates/pages/" . currentRoute() . ".php");
}

