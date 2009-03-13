<?php
session_start();
if (isset($_SESSION["userID"]) && isset($_SESSION["isLogin"])) Header("Location: index.php");

if (isset($_GET["action"]) && $_GET["action"]=="login")
{
		include_once("class.user.php");
		
		$user=new User();
		
		if ($user->login($_POST["username"],$_POST["userpwd"])) Header("Location: index.php");
		else Header("Location: login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>用户登入</title>

<form id="form1" name="form1" method="post" action="login.php?action=login">
	<p>用户名：
		<label>
		<input type="text" name="username" id="username" />
		</label>
		<br />
密　码：
<label>
<input type="password" name="userpwd" id="userpwd" />
</label>
	<br />
	<label>
	<input type="submit" name="button" id="button" value="提交" />
	</label>
	</p>
</form>
</head>

<body>
</body>
</html>
