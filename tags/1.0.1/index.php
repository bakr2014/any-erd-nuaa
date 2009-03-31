<?php include_once("showlinks.php"); ?>
<?php include_once("showvlinks.php"); ?>
<?php include_once("showannouncelist.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>南航图书馆读者自主学习中心</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  if (selObj.options[selObj.selectedIndex].value==0) return;
  //eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  eval("window.open('"+selObj.options[selObj.selectedIndex].value+"')");
  //window.open(selObj.options[selObj.selectedIndex].value);
  //window.location="selObj.options[selObj.selectedIndex].value";
  if (restore) selObj.selectedIndex=0;
}

function setJump()
{
	refs=document.getElementsByTagName("select");
	for (i=0;i<refs.length;i++)
	{
		ref=refs[i];
		if (ref==null) setTimeout(setJump,1000);
		else ref.onchange=function(){MM_jumpMenu('parent',this,1)};
	}
}

window.onload=setJump;
//-->
</script>
</head>

<body>
<div id="container">
   	<div id="banner">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" height="220" width="300">
                  <param name="movie" value="101.swf" />
                  <param name="quality" value="high" />
                  <param name="wmode" value="transparent" />
                  <embed src="101.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent" height="220" width="300"></embed>
        </object>
    </div>
    <div id="top">
		<div id="video"><?php echo showVLink() ?></div>
		<?php echo showLinklist(10,"l") ?>
    </div>
	<div id="middle">
		<div id="left"><?php echo showLinklist(12,"l") ?>
		</div>
		<div id="news"><h2><span>中心动态</span><span id="more"><a href="more.php">更多</a></span></h2><?php showAnnounceList(0,6) ?>
		</div>
		<div id="right"><?php echo showLinklist(13,"l") ?>
		</div>
		<div id="bottom">
			<span id="bleft"><?php echo showLinklist(15,"s") ?></span>
			<span id="bmiddle"><?php echo showLinklist(16,"s") ?></span>
			<span id="bright"><?php echo showLinklist(17,"s") ?></span>
			<div id="copyright">版权所有 南京航空航天大学图书馆</div>
		</div>
	</div>
</div>
</body>
</html>
