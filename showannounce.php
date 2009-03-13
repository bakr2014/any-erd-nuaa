<?php include_once("showlinks.php"); ?>
<?php
	include_once("admin/class.db.php");
	$conn=new DBOperation();
	$sql="SELECT * FROM announcements,administrations WHERE announcements.ID=".$_GET['id']." AND authorID=administrations.ID";
	$result=$conn->query($sql);
	if($row=$result->fetch_array())
	{
		$title=$row['title'];
		$content=$row['content'];
		$adminName =$row['adminName'];
		$annouceTime=$row['annouceTime'];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>南航图书馆读者自主学习中心</title>
<link href="c.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
<h1>&nbsp;</h1>
<div id="left"><?php echo showLinklist(12,"l") ?></div>
<div id="right">
	<?php
            echo "<h2>$title</h2>";
            echo "<div id='date'>$annouceTime</div>";
            echo "<div id='content'>$content</div>";
    ?>
</div>
</div>
</body>
</html>