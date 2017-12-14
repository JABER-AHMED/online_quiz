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
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['event'])) {

      $addEvent = $event->addEvent($_POST);
  }

?>



<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Event</a> <a href="#">create event</a> </div>
    <h1>Create Event</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <?php 

          if (isset($addEvent)) {
              
              echo $addEvent;
          }

      ?>
          </div>
          <div class="widget-content nopadding">
            <form id="form-wizard" class="form-horizontal" method="post">
              <div id="form-wizard-1" class="step">
                <div class="control-group">
                  <label class="control-label">Event Name</label>
                  <div class="controls">
                    <input type="text" name="event_name" v-model="EventCreate.event_name" class="form-control" placeholder="Event Title" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Event Date</label>
                  <div class="controls">
                    <input type="date" v-model="EventCreate.event_date" name="event_date" class="form-control" />
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    <button type="submit" @click.prevent="storeCreateEvent" class="btn btn-primary form-control-button">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "partial/adminfooter.php"; ?>