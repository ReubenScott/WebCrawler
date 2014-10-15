<?
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
error_reporting ( 0 );
require_once('data.php');
require_once('../include/common.inc.php');
require_once('../include/config.php');
if ($_COOKIE ['x_Cookie'] != $adminname or $_COOKIE ['y_Cookie'] != $password) {
	echo "<script>location.href='index.php';</script>";
	exit ();
}
$word = file_get_contents('../include/keyword.dat');
$word=trim($word);
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
</head>
<body> 
<?
if($_GET['id']=='wyc'){
?>
<div class="right">
   <? include "welcome.php";?>
  <div class="right_main">
  <form action="?id=save" method="post" onSubmit="return chk();" > <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline"> <tr class="tb_head">  <td colspan="2"><h2>SEO 优化设置</h2></td> </tr> <tr class="firstalt">  <td width="260" align="center"><b>替换词汇</b><br /><font color="#666666">(建议4000以内)</font></td>  <td><br /> 每行一对同义词，以半角逗号,隔开<br>如：<br>忍耐,忍受<br>人间,人世间</font><br><textarea name="seowyc" cols="80" style="height:120px; width:450px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=$word?></textarea>  </td> </tr> <tr class="firstalt">  <td colspan="2" align="center"><input type="hidden" name="action" value="setting"> <input class="bginput" type="submit" name="submit" value=" 提交 " > <input class="bginput" type="reset" name="Input" value=" 重置 " >  </td> </tr></table> </form>
  </div>
</div>
<?
	include "footer.php";
	?>
</body>
</html>

<?
}elseif ($_GET['id']=='save'){
$con=$_POST['seowyc'];
	if(preg_match("/require|include|REQUEST|eval|system|fputs/i", $con)){   
    echo"<script>alert('含有非法字符！');location.href='?id=wyc';</script>";
}else{
	$fp=fopen("../include/keyword.dat","w");
	fwrite($fp,get_magic($con));
	fclose($fp);
	echo "<script>alert('vivi提示您,修改成功!');location.href='wyc.php';</script>";
	exit;
}}
?>

