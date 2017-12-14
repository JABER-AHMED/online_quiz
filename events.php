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
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['event'])) {

      $addEvent = $event->addEvent($_POST);
  }

?>
<div class="container" style="margin-top: 40px;">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2>CreateEvent<span class="pull-right">
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

          if (isset($addEvent)) {
              
              echo $addEvent;
          }

      ?>
      <form action="" method="POST">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="form-gourp">
              <label for="EventTitle">Event Title</label>
              <input type="text" name="event_name" class="form-control" placeholder="Event title">
            </div>
            <div class="form-gourp">
              <label for="date">Event Date</label>
                <input type='text' name="event_date" class="form-control" placeholder="Event Date" />
            </div>
          </div>
        </div>
        <div style="margin-top: 10px;" class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <button type="submit" name="event" class="btn btn-block btn-primary">Add Event</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include 'partial/footer.php'; ?>