<?php
/*
*用户对象类
*作者：anyshpm
*日期：2008年12月3日
*版本：0.1
*/
session_start();
include_once("class.db.php");

class User
{
	public function login($user,$userPWD)
	{
		$conn=new DBOperation();
		$userPWD=md5($userPWD);
		$sql="SELECT ID FROM administrations WHERE adminName='$user' AND password='$userPWD'";
		$result=$conn->query($sql);
		$row=$result->fetch_array();
		if (isset($row["ID"]))
		{
			$_SESSION["userID"]=$row["ID"];
			$_SESSION["isLogin"]=true;
			return true;
		}
		else return false;
	}
	
	public function logout()
	{
		if (isset($_SESSION['userID'])) session_unregister("userID");
		if (isset($_SESSION['isLogin'])) session_unregister("isLogin");
	}

	
	//修改密码
	public function changePWD($oldPWD,$newPWD,$reNewPWD)
	{
		if ($this->isLogin!=true) return "尚未登入，无法修改密码！";
		if ($newPWD!=$reNewPWD) return "修改密码失败，两次输入的新密码不一致！";
		
		$oldPWD=md5($oldPWD);
		$newPWD=md5($newPWD);
		$reNewPWD=md5($reNewPWD);
		
		if ($oldPWD==$this->userPWD)
		{
			$conn=new DBOperation();
			$sql="UPDATE administrations SET password='$newPWD' WHERE adminName='$this->userName'";
			$conn->query($sql);
			
			return "修改成功！";
		}
	}
}
?>
