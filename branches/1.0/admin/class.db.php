<?php
/*
*数据库访问类
*用于操作数据库
*作者：anyshpm
*时间：2008年12月3日
*版本：0.1
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
		//载入配置文件
		include_once("config.php");
		
		$this->dbName = DB_NAME;
		$this->dbUserName = DB_USER;
		$this->dbUserPassword = DB_PASSWORD;
		$this->dbHost = DB_HOST;
		
		$this->connection = new mysqli();
		
		$this->connection->connect($this->dbHost,$this->dbUserName,$this->dbUserPassword,$this->dbName);
		if (mysqli_connect_errno())
		{
			echo("数据库连接失败！！");
		}
	}
	
	public function __destruct()
	{
		if ($this->connection) $this->connection->close();
	}

	
	//数据库查询
	public function query($sql)
	{
		$this->connection->query("set character_set_results = utf8");
		$this->connection->query("set character_set_connection = utf8");
		$this->connection->query("set character_set_client = utf8");
		return $this->connection->query($sql);
	}
}
?>
