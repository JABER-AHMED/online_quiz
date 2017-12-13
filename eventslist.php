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
<div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="#" class="navbar-brand">Online Quiz System</a>
      </div>
      <ul class="nav navbar-nav pull-right">
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
        <?php } ?>
      </ul>
    </div>
  </nav>
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