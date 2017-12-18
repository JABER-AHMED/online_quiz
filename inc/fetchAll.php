<?php
// include 'inc/User.php';
include 'Event.php';
//include "Question.php";


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    Session::destroy();
}

if(isset($_GET['action']) && $_GET['action'] == 'read'){
    $event = new Event();
    $allEvent = $event->getAllEvent();
    $res = array('error' => false);
    $res['events'] = $allEvent;
}

/*if(isset($_GET['action']) && $_GET['action'] == 'readquestion'){
    $question = new Question();
    $allQuestion = $question->getAllQuestion();
    $res = array('error' => false);
    $res['questions'] = $allQuestion;
}*/
header("Content-type: application/json");
echo json_encode($res);