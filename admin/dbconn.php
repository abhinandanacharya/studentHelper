<?php
class db
{
	public $host="localhost";
	public $username="root";
	public $password="";
	public $dbname="studenthelper";
	public $conn;
	public function __construct()
	{
		$this->conn = new mysqli($this->host,$this->username,$this->password,$this->dbname);
	}
	public function insert($qry)
	{
		$res = $this->conn->query($qry);
		return $res;
	}
	public function show_data($qry)
	{
		$result = $this->conn->query($qry);
		$row = $result->fetch_all(MYSQLI_ASSOC);
		return $row;
	}
	public function show_where($qry)
	{
		$result = $this->conn->query($qry);
		$row = $result->fetch_all(MYSQLI_ASSOC);
		return $row;
	}
	public function update($qry)
	{
		$res  = $this->conn->query($qry);
		return $res;
	}
	public function delete($qry)
	{
		$res = $this->conn->query($qry);
		
	}
	public function checkuser($qry)
	{
		$res = $this->conn->query($qry);
		$count = $res->num_rows;
		return $count;	
	}
}

?>

