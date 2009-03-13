<?php
include_once("admin/class.db.php");

function showAnnounceList($s,$n)
{
	$conn=new DBOperation();
	$sql="SELECT * FROM announcements ORDER BY annouceTime DESC LIMIT ".$s.",".($n+1);
	$result=$conn->query($sql);
	echo "<ul>";
	$i=0;
	while(($row=$result->fetch_array()) && $i<$n)
	{
		$id=$row['ID'];
		echo "<li><a href='../showannounce.php?id=$id&action=content' title='".$row['comment']."' target='_blank'>".$row["title"]."</a></li>\n";
		$i++;
	}
	echo "</ul>";
	if (!($row=$result->fetch_array()))
	{
		return 0;
	}
	else
	{
		return 1;
	}
}
?>
