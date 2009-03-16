<?php
include_once("islogin.php");

$html="";
if (isset($_GET["action"]) && $_GET["action"]=="edit")
{
	include_once("class.db.php");
	$conn=new DBOperation();
	$sql="UPDATE categorys SET categoryName='".$_POST["categoryName"]."' WHERE ID=".$_GET['cid'];
	$conn->query($sql);
	$html="修改成功 <a href='categorys.php'>返回</a>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>板块名称修改</title>
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
<?php
	echo $html;
	include_once("class.db.php");
	$conn=new DBOperation();
	$sql="SELECT * FROM categorys WHERE ID=".$_GET['cid'];
	$result=$conn->query($sql);
	
	if ($row=$result->fetch_array()) $categoryName=$row['categoryName'];
	else $categoryName="";
?>
<form id="form1" name="form1" method="post" action="editcategory.php?action=edit&cid=<?php echo $_GET['cid'] ?>">
<label>板块名称:<input name="categoryName" type="text" value="<?php echo $categoryName ?>" /></label>
<input type="submit" value="修改" />
</form>
<!-- InstanceEndEditable -->
</div>
</body>
<!-- InstanceEnd --></html>
