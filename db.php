<?php
class DBC
{
	public $db;
	public $query;
	public $result;

	public function DBI()
	{
		$this->db = new mysqli('localhost', 'root', 'dud0103', ''); //host, id, pw, database 순서입니다.
		$this->db->query('SET NAMES UTF8');
		if(mysqli_connect_errno())
		{
			header("Content-Type: text/html; charset=UTF-8");
			echo "데이터 베이스 연동에 실패했습니다.";
			exit;
		}
	}

	public function DBQ()
	{
		$this->result = $this->db->query($this->query);
	}

	public function DBO()
	{
		$this->result->free;
		$this->db->close();
	}
}
?>