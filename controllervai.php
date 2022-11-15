<?php

include ('../config/config.php');

class controller{
	public $host=DB_HOST;
	public $user=DB_USER;
	public $pass=DB_PASS;
	public $dbname=DB_NAME;

	public $conn;
	public $error;


	function __construct(){
		$this->conn=new mysqli($this->host,$this->user,$this->pass,$this->dbname);

		if (!$this->conn) {
			$this->error = "Database connection Failed".$this->conn->connect_error;
		}
		
	}

	function store($sql){

		$data=$this->conn->query($sql) or die($this->conn->error.__LINE__);
		if($data){
			echo "Data Store Successfully";
		}
		else{
			echo "Data Store Failed";
		}

	}
}
