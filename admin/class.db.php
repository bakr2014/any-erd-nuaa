<?php
/*
*���ݿ������
*���ڲ������ݿ�
*���ߣ�anyshpm
*ʱ�䣺2008��12��3��
*�汾��0.1
*/

class DBOperation
{
	private $dbName;
	private $dbUserName;
	private $dbUserPassword;
	private $dbHost;
	private $connection;
	
	public function __construct()
	{
		//���������ļ�
		include_once("config.php");
		
		$this->dbName = DB_NAME;
		$this->dbUserName = DB_USER;
		$this->dbUserPassword = DB_PASSWORD;
		$this->dbHost = DB_HOST;
		
		$this->connection = new mysqli();
		
		$this->connection->connect($this->dbHost,$this->dbUserName,$this->dbUserPassword,$this->dbName);
		if (mysqli_connect_errno())
		{
			echo("���ݿ�����ʧ�ܣ���");
		}
	}
	
	public function __destruct()
	{
		if ($this->connection) $this->connection->close();
	}

	
	//���ݿ��ѯ
	public function query($sql)
	{
		$this->connection->query("set character_set_results = utf8");
		$this->connection->query("set character_set_connection = utf8");
		$this->connection->query("set character_set_client = utf8");
		return $this->connection->query($sql);
	}
}
?>
