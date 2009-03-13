<?php
include_once("admin/class.db.php");

function showAnnounceList()
{
	$conn=new DBOperation();
	$sql="SELECT * FROM announcements ORDER BY annouceTime";
	$result=$conn->query($sql);
	echo "<ul>";
	$i=0;
	while(($row=$result->fetch_array()) && $i<6)
	{
		$id=$row['ID'];
		echo "<li><a href='../showannounce.php?id=$id&action=content' target='_blank'>".$row["title"]."</a></li>\n";
		$i=$i+1;
	}
	echo "</ul>";
}
?>
