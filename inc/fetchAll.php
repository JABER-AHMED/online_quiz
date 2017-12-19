<?php ob_start();

if(isset($_GET['action']) && $_GET['action'] == 'read'){
    include 'Event.php';
    $event = new Event();
    $allEvent = $event->getAllEvent();
    $res = array('error' => false);
    $res['events'] = $allEvent;
   // print_r($res['events']);
}

if(isset($_GET['action']) && $_GET['action'] == 'readQuestion'){
    include 'Question.php';
    $question = new Question();
    $allQuestion = $question->getAllQuestion();
    $res = array('error' => false);
    $res['questions'] = $allQuestion;
    //print_r($allQuestion);
}

header("Content-type: application/json");
echo json_encode($res);