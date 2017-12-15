<?php 

include_once 'Session.php';
include 'Database.php';

class Event {
	
	private $db;
	function __construct()
	{
		$this->db = new Database();
	}

	public function addEvent($data)
	{
		$event_name = $data['event_name'];
		$event_date = $data['event_date'];
		$id = Session::get('id');

		if ($event_name == "" OR $event_date == "") {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>field must not be empty</div>";

			return $message;
		}

		if (strlen($event_name) < 15 ) {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>Event Name is too short!</div>";

			return $message;
		}

		$sql = "INSERT INTO tbl_event(event_name, event_date, user_id) VALUES(:event_name, :event_date, :id)";

		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':event_name', $event_name);
		$query->bindValue(':event_date', $event_date);
		$query->bindValue(':id', $id);

		$result = $query->execute();

		if ($result) {
			
			$message = "<div class='alert alert-success'><strong>Success! </strong>Successfully Event Created.</div>";

			return $message;
		}else{
			$message = "<div class='alert alert-danger'><strong>Error! </strong>There is something wrong! Can't create event</div>";

			return $message;
		}
	}

	public function getAllEvent()
	{
		$sql = "SELECT * FROM tbl_event";
		$query = $this->db->pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();

		return $result;
	}

	public function getEventbyID($event_id)
	{
		$sql = "SELECT * FROM tbl_event WHERE event_id=:event_id";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':event_id',$event_id);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		return $result;

	}

	public function eventEdit($event_id, $data)
	{
		$event_name = $data['event_name'];
		$event_date = $data['event_date'];
		$id = Session::get('id');

		if ($event_name == "" OR $event_date == "") {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>field must not be empty</div>";

			return $message;
		}

		if (strlen($event_name) < 15 ) {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>Event Name is too short!</div>";

			return $message;
		}

		$sql = "UPDATE tbl_event 
				set
				event_name = :event_name,
				event_date = :event_date,
				user_id = :user_id
				WHERE event_id = :event_id";

		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':event_name', $event_name);
		$query->bindValue(':event_date', $event_date);
		$query->bindValue(':user_id', $id);
		$query->bindValue(':event_id', $event_id);

		$result = $query->execute();

		if ($result) {
			
			$message = "<div class='alert alert-success'><strong>Success! </strong>Successfully Event Updated.</div>";

			return $message;
		}else{
			$message = "<div class='alert alert-danger'><strong>Error! </strong>There is something wrong! Can't Update event</div>";

			return $message;
		}
	}


	public function eventDelete($id)
	{
		$sql = "DELETE FROM tbl_event WHERE event_id = :id";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':id', $id);

		$result = $query->execute();

		if ($result) {
			
			$deletemessage = "<div class='alert alert-success'><strong>Success! </strong>Successfully Event Deleted.</div>";

			return $deletemessage;
		}else{

			$deletemessage = "<div class='alert alert-danger'><strong>Success! </strong>Something went wrong!.</div>";

			return $deletemessage;
		}

	}
}


?>