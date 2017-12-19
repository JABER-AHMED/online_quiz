<?php 


include "partial/adminheader.php"; 
      include "partial/adminsidebar.php";
      include "inc/Event.php";

      Session::checkSession();

		$event = new Event();

		header('Content-type:application/json');

		$value = array(
			'event_name' => $_POST['event_name'],
			'event_date' => $_POST['event_date']
		);

		//$addEvent = $event->addEvent();

		echo json_encode($value);
		die();
		
?>