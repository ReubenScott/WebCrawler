<?php
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
error_reporting(0);
require_once('data.php');
require_once('../include/common.inc.php');
if ($_COOKIE ['x_Cookie'] != $adminname or $_COOKIE ['y_Cookie'] != $password) {
	echo"<script>location.href='index.php';</script>";
	exit;
}
		
?>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/sqm.js"></script>
<?php
$vv=$_GET['t'];
		switch($vv){
			case "updatenow":
			updatenow();
			break;
			case "update":
			update($upname);
			break;
		}
?>