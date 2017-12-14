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
$allEvent = $event->getAllEvent();
?>
<?php 

      if (isset($_GET['action']) && $_GET['action'] == 'delete') {
          
          $eventid = (int)$_GET['id'];

          $eventdelete = $event->eventDelete($eventid);
      }
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Event List</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          
          
        

         <?php 

        if (isset($eventdelete)) {
          echo $eventdelete;
        }

    ?>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Event Name</th>
                  <th>Event Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
             <?php
                foreach ($allEvent as $event) {
            ?>
            <tr>
              <td><?php echo $event['event_id'] ?></td>
              <td><?php echo $event['event_name'] ?></td>
              <td><?php echo $event['event_date'] ?></td>
              <td>
                <a type="button" class="btn btn-danger" href="event-list.php?action=delete&id=<?php echo $event['event_id'] ?>" name="delete">Delete</a>
              </td>
            </tr>
            <?php } ?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "partial/adminfooter.php"; ?>
