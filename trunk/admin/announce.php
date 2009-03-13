<?php
include_once("islogin.php");

if (isset($_GET["action"]) && $_GET["action"]=="announce")
{
	$title=$_POST["title"];
	$content=$_POST["content"];
	$authorID=$_SESSION['userID'];
	
	include_once("class.db.php");
	$conn=new DBOperation();
	$sql="INSERT INTO announcements (title,authorID,content) VALUES ('$title',$authorID,'$content')";
	$conn->query($sql);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>发布公告</title>
<script type="text/javascript" src="fckeditor/fckeditor.js"></script>
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
<form id="form1" name="form1" method="post" action="announce.php?action=announce">
	<p>标题：
		<label>
		<input type="text" name="title" id="title" />
		</label>
		<br />

<script type="text/javascript">
<!--
// Automatically calculates the editor base path based on the _samples directory.
// This is usefull only for these samples. A real application should use something like this:
// oFCKeditor.BasePath = '/fckeditor/' ;	// '/fckeditor/' is the default value.
var sBasePath = document.location.href.substring(0,document.location.href.lastIndexOf('/'))+"/fckeditor/" ;

var oFCKeditor = new FCKeditor( 'content' ) ;
oFCKeditor.BasePath	= sBasePath ;
oFCKeditor.Config["AutoDetectLanguage"] = false ;
oFCKeditor.Config["DefaultLanguage"]    = "zh-cn" ;
oFCKeditor.Height=400;
oFCKeditor.Config["SkinPath"]=sBasePath+"editor/skins/office2003/";
oFCKeditor.ToolbarSet="anyToolbarSet";

oFCKeditor.Value = '' ;
oFCKeditor.Create() ;
//-->
		</script>
		<br />

<label>
<input type="submit" name="button" id="button" value="提交" />
</label>
	</p>
</form>
<!-- InstanceEndEditable -->
</div>
</body>
<!-- InstanceEnd --></html>
