<?php
include_once("admin/class.db.php");

function showVLink()
{
	$conn=new DBOperation();
	$html="";
	
	$sql="SELECT * FROM links WHERE categoryID=11 order by `order` ASC,`addTime` DESC LIMIT 1";
	$result=$conn->query($sql);
	if ($row=$result->fetch_array())
	{
		$address=$row['linkAddress'];
		if (strstr($address,"//")=="" && substr_count($address,"./")==0) $address="http://".$address;
		$html.="<a href='".$address."' target='_blank' title='".$row['comment']."' title='".$row['comment']."'>\n";
		$html.="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	";
		$html.="</a>\n";
	}
	return $html;
}
?>
