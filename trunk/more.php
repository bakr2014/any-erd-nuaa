<?php include_once("showannouncelist.php"); ?>
<?php include_once("showlinks.php"); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>南航图书馆读者自主学习中心</title>
<link href="c.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
<div id="top"></div>
<div id="left"><?php echo showLinklist(12,"l") ?></div>
<div id="right">
<h2>中心动态</h2>
<?php
	$n=20;
	if (isset($_GET['page']))
		$page=$_GET['page'];
	else
		$page=0;
	$k=showAnnounceList($page*$n,$n);
?>
<div style="text-align:center">
<?php
	if ($page>0) echo "<a href=more.php?page=",$page-1,">上一页</a>";
	if ($k==1) echo "<a href=more.php?page=",$page+1,">下一页</a>";
?>
</div>
</div>
</div>
</body>
</html>