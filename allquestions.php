<?php include "partial/adminheader.php"; 
      include "partial/adminsidebar.php";
      include "inc/Question.php";

      Session::checkSession();

?>

<?php
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
  Session::destroy();
}
?>
<?php
$question = new Question();
$getEventQuestion = $question->getAllQuestion();
?>
<?php

?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Question List</h1>
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
                  <th>Event Name</th>
                </tr>
              </thead>
              <tbody>

                <?php 
                  foreach ($getEventQuestion as $EventandQuestion) {   
                ?>
                <tr class="gradeX">
                  <td>1</td>
                  <td><?php echo $EventandQuestion['question']; ?></td>
                  <td><?php echo $EventandQuestion['option_one'];?></td>
                  <td><?php echo $EventandQuestion['option_two']; ?></td>
                  <td><?php echo $EventandQuestion['option_three']; ?></td>
                  <td><?php echo $EventandQuestion['option_four']; ?></td>
                  <td><?php echo $EventandQuestion['correct_answer']; ?></td>
                  <td><?php echo $EventandQuestion['event_name']; ?></td>
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
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Online Quiz Admin. </div>
</div>
<!--end-Footer-part-->




<?php include "partial/adminfooter.php"; ?>