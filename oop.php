<?php

class Connection
	{

		public static function make() {
			return new PDO('mysql:host=localhost;dbname=landing_page', 'root', '');
		}
	}

	class db_work
	{

		private $db;

		public function __construct($pdo) {
			$this->db = $pdo;
		}

		public function writeToDb($name, $phone, $message) {
			
			$result = $this->db->prepare("INSERT INTO lp_table VALUES (NULL, :name, :phone, :message)");
			$result->bindParam(':name', $name);
			$result->bindParam(':phone', $phone);
			$result->bindParam(':message', $message);

			$result->execute();
			return $result;
		}

		public function exportFromDb() {
			$statement = $this->db->query("SELECT * FROM lp_table");
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}



	}

	
	


	