<<<<<<< HEAD
<<<<<<< HEAD
<?php ob_start();
// include 'inc/User.php';
/*include 'Event.php';*/
include "Question.php";
=======
<?php

include 'Event.php';
>>>>>>> c9921684105149f9054f29759fb628f4b1aeee5c
=======
<?php

include 'Event.php';
>>>>>>> c9921684105149f9054f29759fb628f4b1aeee5c

if(isset($_GET['action']) && $_GET['action'] == 'read'){
    $event = new Event();
    $allEvent = $event->getAllEvent();
    $res = array('error' => false);
    $res['events'] = $allEvent;
}

if(isset($_GET['action']) && $_GET['action'] == 'readquestion'){
    $question = new Question();
    $allQuestion = $question->getAllQuestion();
    $res = array('error' => false);
    $res['questions'] = $allQuestion;
    print_r($allQuestion);
}
/*header("Content-type: application/json");
echo json_encode($res);*/