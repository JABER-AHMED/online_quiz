<?php include "partial/adminheader.php"; 
      include "partial/adminsidebar.php";
      //include "inc/Event.php";
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
  if (isset($_GET['action']) && $_GET['action'] == 'questionCreate') {

      $_POST = json_decode(file_get_contents('php://input'), true);
      $addQues = $question->addQuestion($_POST);
  }
  $eventID = $question->getEventID();

?>
<div id="create-quiz">
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>Create Quiz</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
          <?php if (isset($addQues)) {
              echo $addQues;
          } ?>
          </div>
          <div class="widget-content nopadding">
            <form id="form-wizard" class="form-horizontal">
              <div id="form-wizard-1" class="step">
                <div class="control-group">
                  <label class="control-label">Event Title:</label>
                  <div class="controls">


                    <select name="event_id" class="form-control-select">
                    <?php if(!count($eventID)){?>
                      <option>Select</option>
                    <?php } else { ?> <!-- end of if and start of else -->
                      <option checked>Select</option>
                    <?php foreach ($eventID as $e ) { ?> <!--foreach start -->
                      <option value="<?php echo $e['event_id']; ?>"><?php echo  $e['event_name'];?></option>
                      
                    <?php } } ?>  <!--end of foreach and else -->

                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Question:</label>
                  <div class="controls">
                    <input type="text" class="form-control"  v-model="question"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Option 1:</label>
                  <div class="controls">
                    <input type="text" class="form-control" v-model="option_one"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Option 2:</label>
                  <div class="controls">
                    <input type="text" class="form-control" v-model="option_two"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Option 3:</label>
                  <div class="controls">
                    <input type="text" class="form-control" v-model="option_three"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Option 4:</label>
                  <div class="controls">
                    <input type="text" class="form-control" v-model="option_four"/>
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Correct Answer:</label>
                  <div class="controls">
                    <input type="text" class="form-control" v-model="correct_answer"/>
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    <button type="submit" @click.prevent="AddQues" class="btn btn-block btn-primary form-control-button">Submit</button>
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
</div>
<?php include "partial/adminfooter.php"; ?>