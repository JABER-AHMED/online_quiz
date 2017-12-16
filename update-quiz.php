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

      if (isset($_GET['action']) && $_GET['action'] == 'edit') {
          
          $eventid = (int)$_GET['id'];

          $eventdelete = $event->getEventbyID($eventid);
      }

?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Update Question List</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Question Name</th>
                  <th>Option 1</th>
                  <th>Option 2</th>
                  <th>Option 3</th>
                  <th>Option 4</th>
                  <th>Correct Ans</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  <td>1</td>
                  <td>what is java ?</td>
                  <td>one</td>
                  <td>two</td>
                  <td>three</td>
                  <td>four</td>
                  <td>one</td>
                  <td ><button type="edit" class="btn btn-default"> Edit </button> <button type="delete"  class="btn btn-danger"> Delete</button></td>
                </tr>
                <tr class="gradeC">
                  <td>2</td>
                  <td>what is vue ?</td>
                  <td>one</td>
                  <td>two</td>
                  <td>three</td>
                  <td>four</td>
                  <td>one</td>
                  <td ><button type="edit"  class="btn btn-default"> Edit </button> <button type="delete"  class="btn btn-danger">Delete</button></td>
                </tr>
                <tr class="gradeC">
                  <td>3</td>
                  <td>what is cpp ?</td>
                  <td>one</td>
                  <td>two</td>
                  <td>three</td>
                  <td>four</td>
                  <td>one</td>
                  <td ><button type="edit"  class="btn btn-default">Edit </button> <button type="delete" class="btn btn-danger">Delete</button></td>
                </tr>
                <tr class="gradeC">
                  <td>4</td>
                  <td>what is english ?</td>
                  <td>one</td>
                  <td>two</td>
                  <td>three</td>
                  <td>four</td>
                  <td>one</td>
                  <td ><button type="edit" class="btn btn-default">Edit </button> <button type="delete" class="btn btn-danger">Delete</button></td>
                </tr>
                 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Online Quiz Admin. </div>
</div>
<!--end-Footer-part-->




<?php include "partial/adminfooter.php"; ?>