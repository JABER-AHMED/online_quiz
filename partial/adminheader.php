<?php ob_start();
$filepath = realpath(dirname(__FILE__));
include_once $filepath.'/../inc/Session.php';
Session::init();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Quiz</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="lib/css/bootstrap.min.css" />
<link rel="stylesheet" href="lib/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="lib/css/uniform.css" />
<link rel="stylesheet" href="lib/css/select2.css"/>
<link rel="stylesheet" href="lib/css/matrix-style.css" />
<link rel="stylesheet" href="lib/css/matrix-media.css" />
<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="lib/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="header">
  <h1><a href="dashboard.php">Online Quiz</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome Admin</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
      </ul>
    </li>

    <li class=""><a title="" href="?action=logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->