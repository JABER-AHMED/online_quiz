<?php 

	$filepath = realpath(dirname(__FILE__));
	include_once $filepath.'/../inc/Session.php';
	Session::init();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Quiz System</title>
	<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">
</head>
<body>