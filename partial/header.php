<?php ob_start();
$filepath = realpath(dirname(__FILE__));
include_once $filepath.'/../inc/Session.php';
Session::init();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Quiz System</title>

    <!--All the css-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="/lib/css/bootstrap.min.css"> -->
    <!--<link rel="stylesheet" type="text/css" href="lib/css/style.css">-->
	<link rel="stylesheet" href="lib/css/styleone.css">

    <!--All the scripts-->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="color: #0B6AC6;">Online Quiz Test</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
         <?php
        $id = Session::get('id');
        $userlogin = Session::get('login');
        $usertype = Session::get('type');
        if ($userlogin == true && $usertype == 0) {
        ?>
        <li><a href="profile.php?id=<?php echo $id ?>">Profile</a></li>
        <li><a href="?action=logout">Logout</a></li>
        <?php } elseif ($userlogin == true && $usertype == 1) {
        ?>
        <li><a href="profile.php?id=<?php echo $id ?>">Profile</a></li>
        <li><a href="?action=logout">Logout</a></li>
        <li><a href="eventslist.php">Go To User</a></li>
        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>