<?
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
error_reporting ( 0 );
require_once('data.php');
require_once('../include/common.inc.php');
require_once('../include/config_sift.php');
require_once('../include/config.php');
if ($_COOKIE ['x_Cookie'] != $adminname or $_COOKIE ['y_Cookie'] != $password) {
	echo "<script>location.href='index.php';</script>";
	exit ();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link href="css/jquery.css" rel="stylesheet" type="text/css">
<link href="css/base.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/sqm.js"></script>
<script language="javascript">
var siftw = '<?= $sift?>';
</script>
</head>
<body> 
<?
if($_GET['id']=='sift'){
?>
<div class="right">
   <? include "welcome.php";?>
  <div id=sift class="right_main"></div>
</div>
<?
	include "footer.php";
	?>
</body>
</html>

<?
}elseif ($_GET['id']=='save'){

	$sfw=trim($_POST['sift']);
	$sfw=preg_replace("'([\r\n])[\s]+'", "",$sfw);

	$con='<?php'."\r\n".'$sift='.'"'.$sfw.'"'.";\r\n?>";
	if(preg_match("/require|include|REQUEST|eval|system|fputs/i", $con)){   
    echo"<script>alert('含有非法字符！');location.href='?id=sift';</script>";
}   
else{
	$fp=fopen("../include/config_sift.php","w");
	fwrite($fp,$con);
	fclose($fp);
	echo base64_decode ( 'PHNjcmlwdD5hbGVydCgndml2aczhyr7E+izQ3rjEs8m5pqOhJyk7d2luZG93LmxvY2F0aW9uPSdz
aWZ0LnBocD9pZD1zaWZ0Jzs8L3NjcmlwdD4=');
	exit;
}}
?>

