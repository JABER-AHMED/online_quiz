<?php ob_start();
include "partial/adminheader.php";
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

      if (isset($_GET['action']) && $_GET['action'] == 'delete') {
          
          $eventid = (int)$_GET['id'];

          $eventdelete = $event->eventDelete($eventid);
      }

      if (isset($_GET['action']) && $_GET['action'] == 'edit') {
          
          $eventid = (int)$_GET['id'];

          $eventdelete = $event->getEventbyID($eventid);
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
        <div id="event-list" class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th width="5%;">ID</th>
                  <th width="50%;">Event Name</th>
                  <th width="15%;">Event Date</th>
                  <th width="30%;">Action</th>
                </tr>
              </thead>
              <tbody>
            <tr v-for="item in eventList">
              <td>{{ item.event_id}}</td>
              <td>{{item.event_name}}</td>
              <td>{{item.event_date}}</td>
              <td>
                <a type="button" class="btn btn-default" name="edit"><i class="icon icon-edit"></i> Edit</a>
                <a type="button" class="btn btn-danger" name="delete"><i class="icon icon-trash"></i> Delete</a>
                <a type="button" class="btn btn-success" name="view"><i class="icon icon-eye-open"></i> View Questions</a>
              </td>
            </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "partial/adminfooter.php"; ?>
