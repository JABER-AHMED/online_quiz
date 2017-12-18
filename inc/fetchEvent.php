<?php
// include 'inc/User.php';
include 'Event.php';


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    Session::destroy();
}

if(isset($_GET['action']) && $_GET['action'] == 'read'){
    $event = new Event();
    $allEvent = $event->getAllEvent();
    $res = array('error' => false);
    $res['events'] = $allEvent;
}
header("Content-type: application/json");
echo json_encode($res);