<?php 

include_once 'Session.php';
include 'Database.php';

class Question {
	
	private $db;
	function __construct()
	{
		$this->db = new Database();
	}

	public function addQuestion($data)
	{
		$question = $data['question'];
		$option_one = $data['option_one'];
		$option_two = $data['option_two'];
		$option_three = $data['option_three'];
		$option_four = $data['option_four'];
		$correct_answer = $data['correct_answer'];
		$id = Session::get('id');
		$event_id = $data['event_id'];

		if ($option_one == "" OR $option_two == "" OR $option_three == "" OR $option_four == "" OR $question == "" OR $correct_answer == "") {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>field must not be empty</div>";

			return $message;
		}

		$sql = "INSERT INTO tbl_question(question, option_one, option_two,option_three,option_four,correct_answer,user_id,event_id) VALUES(:question, :option_one, :option_two, :option_three, :option_four, :correct_answer, :user_id, :event_id)";

		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':question', $question);
		$query->bindValue(':option_one', $option_one);
		$query->bindValue(':option_two', $option_two);
		$query->bindValue(':option_three', $option_three);
		$query->bindValue(':option_four', $option_four);
		$query->bindValue(':correct_answer', $correct_answer);
		$query->bindValue(':user_id', $id);
		$query->bindValue(':event_id', $event_id);

		$result = $query->execute();

		if ($result) {
			
			$message = "<div class='alert alert-success'><strong>Success! </strong>Successfully Event Created.</div>";

			return $message;
		}else{
			$message = "<div class='alert alert-danger'><strong>Error! </strong>There is something wrong! Can't create event</div>";

			return $message;
		}
	}

	public function getAllQuestion()
	{
		$sql = "SELECT tbl_question.question,tbl_question.option_one,tbl_question.option_two,tbl_question.option_three,tbl_question.option_four,tbl_question.correct_answer,tbl_event.event_name FROM tbl_question,tbl_event WHERE tbl_question.event_id = tbl_event.event_id";
		$query = $this->db->pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();

		return $result;
	}

	public function getQbyEvent($id)
	{
		$sql = "SELECT * FROM tbl_question WHERE event_id = :id";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':id',$id);
		$query->execute();
		$result = $query->fetchAll();
		return $result;

	}

	public function getEventID()
	{
		$sql = "SELECT * FROM tbl_event";
		$query = $this->db->pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();

		return $result;
	}

	public function getQuestionbyID($question_id)
	{
		$sql = "SELECT * FROM tbl_question WHERE question_id=:question_id";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':question_id',$question_id);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		return $result;

	}

	public function updateQuestion($quesid, $data)
	{
		$question = $data['question'];
		$option_one = $data['option_one'];
		$option_two = $data['option_two'];
		$option_three = $data['option_three'];
		$option_four = $data['option_four'];
		$correct_answer = $data['correct_answer'];
		$id = Session::get('id');
		$event_id = $data['event_id'];

		if ($option_one == "" OR $option_two == "" OR $option_three == "" OR $option_four == "" OR $question == "" OR $correct_answer == "") {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>field must not be empty</div>";

			return $message;
		}

		$sql = "UPDATE tbl_question 
				set
				question = :question,
				option_one = :option_one,
				option_two = :option_two,
				option_three = :option_three,
				option_four = :option_four,
				correct_answer = :correct_answer,
				user_id = :user_id,
				event_id = :event_id
				WHERE question_id = :question_id";

		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':question', $question);
		$query->bindValue(':option_one', $option_one);
		$query->bindValue(':option_two', $option_two);
		$query->bindValue(':option_three', $option_three);
		$query->bindValue(':option_four', $option_four);
		$query->bindValue(':correct_answer', $correct_answer);
		$query->bindValue(':user_id', $id);
		$query->bindValue(':event_id', $event_id);
		$query->bindValue(':question_id', $quesid);

		$result = $query->execute();

		if ($result) {
			
			$message = "<div class='alert alert-success'><strong>Success! </strong>Successfully Event Updated.</div>";

			return $message;
		}else{
			$message = "<div class='alert alert-danger'><strong>Error! </strong>There is something wrong! Can't update event</div>";

			return $message;
		}
	}


	public function questionDelete($id)
	{
		$sql = "DELETE FROM tbl_question WHERE question_id = :question_id";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':question_id', $id);

		$result = $query->execute();

		if ($result) {
			
			$deletemessage = "<div class='alert alert-success'><strong>Success! </strong>Successfully Question Deleted.</div>";

			return $deletemessage;
		}else{

			$deletemessage = "<div class='alert alert-danger'><strong>Success! </strong>Something went wrong!.</div>";

			return $deletemessage;
		}

	}
}


?>