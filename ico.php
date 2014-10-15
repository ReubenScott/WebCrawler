<?php
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
require_once (dirname(__FILE__) . "/include/config.php");
require_once (dirname(__FILE__) . "/include/common.inc.php");
$Shortcut = "[InternetShortcut]
URL=http://".$_SERVER ['HTTP_HOST']."/
IDList=
IconFile=http://".$_SERVER ['HTTP_HOST']."/favicon.ico
IconIndex=1
[{000214A0-0000-0000-C000-000000000088}]
Prop3=19,2";
Header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=".$webtitle.".url;"); 
echo $Shortcut; 
?>