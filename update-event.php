<?php include "partial/adminheader.php"; 
      include "partial/adminsidebar.php";
      include "inc/Event.php";

      Session::checkSession();

?>

<?php
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
  Session::destroy();
}
?>
<?php 
    $event = new Event();
    if (isset($_GET['id'])) {
         $eventid = (int)$_GET['id'];
      }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {

      $updateEvent = $event->eventEdit($eventid, $_POST);
  }
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Event</a> <a href="#">create event</a> </div>
    <h1>Update Event</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <?php 

          if (isset($updateEvent)) {
              
              echo $updateEvent;
          }

      ?>
          </div>
         <?php 

          $eventinfo = $event->getEventbyID($eventid);
          if ($eventinfo) {
      ?>

          <div class="widget-content nopadding">
            <form id="form-wizard" class="form-horizontal" method="post">
              <div id="form-wizard-1" class="step">
                <div class="control-group">
                  <label class="control-label">Event Name</label>
                  <div class="controls">
                    <input type="text" name="event_name" v-model="EventCreate.event_name" class="form-control" value="<?php echo $eventinfo->event_name; ?>" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Event Date</label>
                  <div class="controls">
                    <input type="date" v-model="EventCreate.event_date" name="event_date" class="form-control" value="<?php echo $eventinfo->event_date; ?>" />
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    <button type="submit" name="update" class="btn btn-primary form-control-button">Update</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
         <?php } ?> <!-- end of if condition -->
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "partial/adminfooter.php"; ?>