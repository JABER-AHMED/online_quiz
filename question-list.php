<?php include "partial/adminheader.php"; 
      include "partial/adminsidebar.php";
      include "inc/Question.php";

      Session::checkSession();

    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
      Session::destroy();
    }
    $question = new Question();
    if (isset($_GET['id'])) {
        $eventid = (int)$_GET['id'];
    }
    $getQbyEvent = $question->getQbyEvent($eventid);

    if (isset($_GET['action']) && $_GET['action'] == 'edit') {
          
          $quesid = (int)$_GET['id'];

          $questionUpdate = $question->getQuestionbyID($quesid);
      }

      if (isset($_GET['action']) && $_GET['action'] == 'delete') {
          
          $quesid = (int)$_GET['id'];

          $questiondelete = $question->questionDelete($quesid);
      }
    
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
                  <th>Action</th>
                
                </tr>
              </thead>
              <tbody>
                <?php foreach ($getQbyEvent as $question) { ?>
                <tr class="gradeX">
                  <td><?php echo $question['question_id'] ?></td>
                  <td><?php echo $question['question'] ?></td>
                  <td><?php echo $question['option_one'] ?></td>
                  <td><?php echo $question['option_two'] ?></td>
                  <td><?php echo $question['option_three'] ?></td>
                  <td><?php echo $question['option_four'] ?></td>
                  <td><?php echo $question['correct_answer'] ?></td>
                  <td >
                    <a type="button" class="btn btn-default" href="update-quiz.php?action=edit&id=<?php echo $question['question_id']; ?>" name="edit"><i class="icon icon-edit"></i> Edit</a>
                    <a type="button" class="btn btn-danger" href="question-list.php?action=delete&id=<?php echo $question['question_id'] ?>" name="delete"><i class="icon icon-trash"></i> Delete</a>
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