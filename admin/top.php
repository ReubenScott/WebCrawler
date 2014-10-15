<?
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
<html>
<head>
<title>小偷后台管理系统 管理面版 v</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td background="img/top7.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="600"><img src="img/top6.gif" width="600" height="90"></td>
          <td valign="top"><a href="../" target="_blank"><img src="img/top20.gif" width="70" height="63" border="0"></a>
		  <a href="http://www.vxiaotou.com" target="_blank"><img src="img/top21.gif" width="70" height="63" border="0"></a>
		  <a href="updata.php" target="content"><img src="img/top22.gif" width="70" height="63" border="0"></a>
		  <a href="http://www.vxiaotou.com/plugin.php?id=vivi_accr:accr" target="_blank"><img src="img/top24.gif" width="70" height="63" border="0"></a>
		  <a href="logout.php" onClick="return confirm('确定退出?')" target="_top"><img src="img/top23.gif" width="70" height="63" border="0"></a>
		 </td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>