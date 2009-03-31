<?php
include_once("islogin.php");

if (isset($_GET["action"]) && $_GET["action"]=="announce")
{
	$title=$_POST["title"];
	$content=$_POST["content"];
	$address=$_POST["address"];
	$category=$_POST["category"];
	$authorID=$_SESSION['userID'];
	$logo=$_POST['logo'];
	
	include_once("class.db.php");
	$conn=new DBOperation();
	$sql="INSERT INTO links (linkName,linkAddress,authorID,categoryID,comment,logo) VALUES ('$title','$address',$authorID,'$category','$content','$logo')";
	$conn->query($sql);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>添加链接</title>
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
<form id="form1" name="form1" method="post" action="addlink.php?action=announce">
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
		版块：
		<label>
		<select name="category">
			<?php
			include_once("class.db.php");
			$con=new DBOperation();
			$sql="SELECT * FROM categorys";
			$result=$con->query($sql);
			while($row=$result->fetch_array())
			{
				$id=$row['ID'];
				echo "<option value='".$row["ID"]."'>".$row["categoryName"]." </option>";
			}
			?>
		</select>
		</label>
		<br />
<script type="text/javascript">
<!--
var sBasePath = document.location.href.substring(0,document.location.href.lastIndexOf('/'))+"/fckeditor/" ;

var oFCKeditor = new FCKeditor( 'logo' ) ;
oFCKeditor.BasePath	= sBasePath ;
oFCKeditor.Config["AutoDetectLanguage"] = false ;
oFCKeditor.Config["DefaultLanguage"]    = "zh-cn" ;
oFCKeditor.Height=200;
oFCKeditor.Width=300;
oFCKeditor.Config["SkinPath"]=sBasePath+"editor/skins/office2003/";
oFCKeditor.ToolbarSet="anyToolbarSet2";

oFCKeditor.Value = '' ;
oFCKeditor.Create() ;
//-->
</script>
<br />
描述：
<label>
<textarea name="content" id="content" cols="45" rows="5"></textarea>
</label>
<label>
<input type="submit" name="button" id="button" value="提交" />
</label>
	</p>
</form>
<!-- InstanceEndEditable -->
</div>
</body>
<!-- InstanceEnd --></html>
