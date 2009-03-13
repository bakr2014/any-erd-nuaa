<?php
include_once("islogin.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>公告管理</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="menu">
[ <a href="../index.php">返回首页</a> ][ <a href="announcements.php">公告管理</a> | <a href="announce.php">发布公告</a> ] [ <a href="categorys.php">板块管理</a><!-- | <a href="addCategory.php">添加板块</a>--> ] [ <a href="links.php">链接管理</a> | <a href="addlink.php">添加链接</a> | <a href="verify.php">用户提交查看</a> ] [ <a href="logout.php">退出</a> ]
</div>
<div id="content">
<!-- InstanceBeginEditable name="content" -->
<ul>
<?php
include_once("class.db.php");
$conn=new DBOperation();
$sql="SELECT * FROM announcements ORDER BY annouceTime";
$result=$conn->query($sql);
while($row=$result->fetch_array())
{
	$id=$row['ID'];
	echo "<li><a href='../showannounce.php?id=$id' target='_blank'>".$row["title"]."</a> <a href=deleteannounce.php?id=$id>删除</a> | <a href='editannouncement.php?aid=".$row['ID']."'>修改</a></li>";
}
?>
</ul>
<!-- InstanceEndEditable -->
</div>
</body>
<!-- InstanceEnd --></html>
