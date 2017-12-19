<?php ob_start();

class Database {
	
	private $dbhost = "localhost";
	private $dbuser = "root";
	private $dbpass = "";
	private $dbname = "online_quiz";
	public $pdo;

	function __construct()
	{
		if (!isset($this->pdo)) {
			
			try{
				
				$link = new PDO("mysql:host=".$this->dbhost.";dbname=".$this->dbname, $this->dbuser, $this->dbpass);
				$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$link->exec("SET CHARACTER SET utf8");
				$this->pdo = $link;

			}catch(PDOException $e){

				die("Failed to connect with database". $e->getMessage());
			}
		}
	}
}


?>