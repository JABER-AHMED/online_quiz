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
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addQues'])) {

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
            <form id="form-wizard" class="form-horizontal" method="post">
              <div id="form-wizard-1" class="step">
                <div class="control-group">
                  <label class="control-label">Event Title:</label>
                  <div class="controls">
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Question:</label>
                  <div class="controls">
                    <input type="text" name="question" class="form-control"  v-model="QuizCreate.question"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Option 1:</label>
                  <div class="controls">
                    <input type="text" name="optionone" class="form-control" v-model="QuizCreate.optionone"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Option 2:</label>
                  <div class="controls">
                    <input type="text" name="optiontwo" class="form-control" v-model="QuizCreate.optiontwo"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Option 3:</label>
                  <div class="controls">
                    <input type="text" name="optionthree" class="form-control" v-model="QuizCreate.optionthree"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Option 4:</label>
                  <div class="controls">
                    <input type="text" name="optionfour" class="form-control" v-model="QuizCreate.optionfour"/>
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Correct Answer:</label>
                  <div class="controls">
                    <input type="text" name="correct_answer" class="form-control" v-model="QuizCreate.correct_answer"/>
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    <button type="submit" @click.prevent="storeCreateQuiz" class="btn btn-block btn-primary form-control-button">Submit</button>
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