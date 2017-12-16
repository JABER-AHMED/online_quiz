<?php include 'partial/header.php';
// include 'inc/User.php';
include 'inc/Event.php';
Session::checkSession();
?>
<?php
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
Session::destroy();
}
?>
<?php
$event = new Event();
$allEvent = $event->getAllEvent();
?>
<div class="container" style="margin-top: 40px;">

  <?php 

    $loginmessage = Session::get("loginmessage");

    if (isset($loginmessage)) {
      echo $loginmessage;
    }
    Session::set("loginmessage", NULL);

   ?>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2>EventList<span class="pull-right">
        <?php
        $name = Session::get("name");
        if (isset($name)) {
        echo $name;
        }
        ?>
      </span></h2>
    </div>
    <div class="panel-body">
      <?php 

        if (isset($eventdelete)) {
          echo $eventdelete;
        }

    ?>

    <a type="button" class="btn btn-primary btn-block" href="">01. PHP Online Quiz</a>
      <a type="button" class="btn btn-primary btn-block" href="">02. Javascript Online Quiz</a>
      <a type="button" class="btn btn-primary btn-block" href="">03. HTML Online Quiz</a>
      <a type="button" class="btn btn-primary btn-block" href="">04. CSS Online Quiz</a>
      <a type="button" class="btn btn-primary btn-block" href="">05. Laravel Online Quiz</a>
      <a type="button" class="btn btn-primary btn-block" href="">06. Vuejs Online Quiz</a>
    </div>
  </div>
</div>
<?php include 'partial/footer.php'; ?>