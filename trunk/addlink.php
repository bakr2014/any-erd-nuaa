<?php

if (isset($_GET["action"]) && $_GET["action"]=="announce")
{
	$title=$_POST["title"];
	$content=$_POST["content"];
	$address=$_POST["address"];
	
	include_once("admin/class.db.php");
	$conn=new DBOperation();
	$sql="INSERT INTO links (linkName,linkAddress,authorID,categoryID,comment,verify) VALUES ('$title','$address','','','$content',0)";
	$conn->query($sql);
	echo "提交成功";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<div id="content">
<form id="form1" name="form1" method="post" action="addLink.php?action=announce">
	<p>名称：
		<label>
			<input type="text" name="title" id="title" />
			</label>
		<br />
		地址：
		<label>
			<input type="text" name="address" id="title" />
			</label>
		<br />
		描述：
	<label>
	<textarea name="content" id="content" cols="45" rows="5"></textarea>
	</label>
	<br />
	<label>
	<input type="submit" name="button" id="button" value="提交" />
	</label>
		</p>
</form>
</div>
</body>
</html>
