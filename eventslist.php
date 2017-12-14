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

<?php 

      if (isset($_GET['action']) && $_GET['action'] == 'delete') {
          
          $eventid = (int)$_GET['id'];

          $eventdelete = $event->eventDelete($eventid);
      }
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
      <form action="" method="POST">
        <table class="table tabel-striped">
          <thead>
            <tr>
              <th>Event No</th>
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
                <a type="button" class="btn btn-danger" href="eventslist.php?action=delete&id=<?php echo $event['event_id'] ?>" name="delete">Delete</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </form>
    </div>
  </div>
</div>
<?php include 'partial/footer.php'; ?>