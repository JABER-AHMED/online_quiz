<?php
include_once 'Session.php';
include 'Database.php';

class User {
	
	private $db;
	function __construct()
	{
		$this->db = new Database();
	}

	public function userRegistration($data)
	{
		$name = $data['name'];
		$username = $data['username'];
		$email = $data['email'];
		$password = md5($data['password']);

		$mail_check = $this->emailCheck($email);

		if ($name == "" OR $username == "" OR $email == "" OR $password == "") {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>field must not be empty</div>";

			return $message;
		}
		if (strlen($username) < 4) {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>Username is too short</div>";

			return $message;
		}elseif(preg_match('/[^a-z0-9_-]+/i', $username)){

			$message = "<div class='alert alert-danger'><strong>Error! </strong>Username must contain alphanumeric, dashes and underscores</div>";

			return $message;
		}
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>Email Address is not valid</div>";

			return $message;
		}
		if ($mail_check == true) {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>Email Address already exists</div>";

			return $message;
		}

		$sql = "INSERT INTO tbl_user(name, username, email, password) VALUES(:name, :username, :email, :password)";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':name', $name);
		$query->bindValue(':username', $username);
		$query->bindValue(':email', $email);
		$query->bindValue(':password', $password);
		$result = $query->execute();

		if ($result) {
			
			$message = "<div class='alert alert-success'><strong>Success! </strong>Successfully registered.</div>";

			return $message;
		}else{
			$message = "<div class='alert alert-danger'><strong>Error! </strong>Sorry There has been something wrong</div>";

			return $message;
		}
	}

	public function emailCheck($email)
	{
		$sql = "SELECT email FROM tbl_user WHERE email = :email";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':email', $email);
		$query->execute();

		if ($query->rowCount() > 0) {
			
			return true;
		}else
		{
			return false;
		}

	}

	public function getLoginUser($email, $password)
	{
		 $sql = "SELECT * FROM tbl_user WHERE email = :email AND password = :password LIMIT 1";
		 $query = $this->db->pdo->prepare($sql);
		 $query->bindValue(':email', $email);
		 $query->bindValue(':password', $password);

		 $query->execute();
		 $result = $query->fetch(PDO::FETCH_OBJ);

		 return $result;
	}

	public function userLogin($data)
	{
		$email = $data['email'];
		$password = md5($data['password']);

		if ($email == "" OR $password == "") {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>field must not be empty</div>";

			return $message;
		}
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>Email Address is not valid</div>";

			return $message;
		}
		$result = $this->getLoginUser($email, $password);

		if ($result) {

			Session::init();
			Session::set("login", true);
			Session::set("id", $result->id);
			Session::set("name", $result->name);
			Session::set("username", $result->username);
			Session::set("type", $result->type);
			Session::set("loginmessage", "<div class='alert alert-success'><strong>Success! </strong>You are loggedIn!</div>");
			header("Location: index.php");
			
		}else{
			$message = "<div class='alert alert-danger'><strong>Error! </strong>Data not found</div>";

			return $message;
		}
	}

	// public function getUserData()
	// {
	// 	$sql = "SELECT * FROM tbl_user";
	// 	$query = $this->db->pdo->prepare($sql);
	// 	$query->execute();

	// 	$result = $query->fetchAll();

	// 	return $result;
	// }

	public function getUserDataById($id)
	{
		$sql = "SELECT * FROM tbl_user WHERE id = :id";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':id', $id);
		$query->execute();

		$result = $query->fetch(PDO::FETCH_OBJ);

		return $result;

	}

	public function userUpdate($id, $data)
	{
		$name = $data['name'];
		$username = $data['username'];
		$email = $data['email'];


		if ($name == "" OR $username == "" OR $email == "") {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>field must not be empty</div>";

			return $message;
		}
		if (strlen($username) < 4) {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>Username is too short</div>";

			return $message;
		}elseif(preg_match('/[^a-z0-9_-]+/i', $username)){

			$message = "<div class='alert alert-danger'><strong>Error! </strong>Username must contain alphanumeric, dashes and underscores</div>";

			return $message;
		}
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			
			$message = "<div class='alert alert-danger'><strong>Error! </strong>Email Address is not valid</div>";

			return $message;
		}
		$sql = "UPDATE tbl_user set

				name = :name,
				username = :username,
				email = :email
				WHERE id = :id
		";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':name', $name);
		$query->bindValue(':username', $username);
		$query->bindValue(':email', $email);
		$query->bindValue(':id', $id);
		$result = $query->execute();

		if ($result) {
			
			$message = "<div class='alert alert-success'><strong>Success! </strong>Successfully updated data.</div>";

			return $message;
		}else{
			$message = "<div class='alert alert-danger'><strong>Error! </strong>Data can not successfully updated.</div>";

			return $message;
		}
	}
}


?>