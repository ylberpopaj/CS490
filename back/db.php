
<?php
	
	class DB
	{
		private $db;
		private $table;
		private $username;
		private $pw;
		private $hostname;

		public $conn;

		function __construct()	
		{
			$this->db = "gg99";
			$this->username = "gg99";
			$this->pw = "spheric25";
			$this->table = "CS490";

			$this->conn = new mysqli('sql2.njit.edu', $this->username, $this->pw, $this->db);
			if($this->conn->connect_error)
			{
				echo "Failed to connect to db";
			}
		}

		function exec_query($query)
		{	
			$result = $this->conn->query($query);


			if(!$result)
			{
				echo "Error no result";
			}
			return $result;
		}

		function close()
		{
			$this->conn->close();
		}
	}


?>