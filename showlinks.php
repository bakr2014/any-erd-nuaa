<?php
include_once("admin/class.db.php");

function showLinklist($categoryID,$type)
{
	$conn=new DBOperation();
	$html="";
	$sql="SELECT * FROM categorys WHERE ID=".$categoryID;
	$result=$conn->query($sql);
	if ($row=$result->fetch_array()) $categoryName=$row['categoryName'];
	else $categoryName="";
	
	if (isset($categoryID)) $sql="SELECT * FROM links WHERE categoryID=".$categoryID." order by `order`";
	else $sql="SELECT * FROM links";
	$result=$conn->query($sql);
	if (isset($type) && $type=='s')
	{
		$html.="<form name='form' id='form'>";
		$html.="<select name='jumpMenu' id='jumpMenu'>\n";
		$html.="<option selected='selected'>$categoryName</option>";
		while($row=$result->fetch_array())
		{
			$address=$row['linkAddress'];
			if (strstr($address,"http://")=="" && substr_count($address,"./")==0) $address="http://".$address;
			$html.="<option value='".$address."'>";
			$html.=$row['linkName'];
			$html.="</option>";
		}
		$html.="</select>\n";
		$html.="</form>\n";
	}
	else
	{
		$html="<ul>\n";
		while($row=$result->fetch_array())
		{
			$address=$row['linkAddress'];
			if (strstr($address,"http://")=="" && substr_count($address,"./")==0) $address="http://".$address;
			$html.="<li><a href='".$address."' target='_blank'>";
			if ($categoryID==13)
			{
				$img=$row['logo'];
				$img=str_ireplace("<p>","",$img);
				$img=str_ireplace("</p>","",$img);
				$html.=$img;
			}
			else
			{
				$html.=$row['linkName'];
			}
			$html.="</a></li>\n";
		}
		$html.="</ul>\n";
	}
	return $html;
}
?>
