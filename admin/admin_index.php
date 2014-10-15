<?
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
error_reporting(0);
require_once('data.php');
require_once('../include/common.inc.php');
if($_COOKIE['x_Cookie']!=$adminname or $_COOKIE['y_Cookie']!=$password){
	echo"<script>location.href='index.php';</script>";
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>vivi网站后台管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/admin.css">


</head>
<body>

<div class="right">
  <iframe id="show_upload_iframe" frameborder=0 scrolling="no" style="display:none; position:absolute;"></iframe><div id="show_upload" style="height:350px;overflow:auto">nothing...</div>
  <div id="body_loading" onClick="loaded();"><img src="img/body_load.gif"></div>
  <? include "welcome.php"; ?>
  
  <div class="right_main">
    <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
      <tr class=tb_head>
        <td colspan="2" class="tbhead"><h2> 系统信息：</h2></td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">主机名 (IP：端口)：</td>
        <td width="75%"><?=$_SERVER['SERVER_NAME']?>&nbsp;&nbsp;(<? echo $_SERVER['SERVER_ADDR'].":".$_SERVER['SERVER_PORT'];?>)</td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">程序目录：</td>
        <td width="75%"><?=dirname(dirname($_SERVER['SCRIPT_FILENAME']));?></td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">Web服务器：</td>
        <td width="75%"><?=$_SERVER['SERVER_SOFTWARE']?></td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">PHP 运行方式：</td>
        <td width="75%"><?=PHP_SAPI?></td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">PHP版本：</td>
        <td width="75%"><?=PHP_VERSION?>&nbsp;&nbsp;<span style="color: #999999;">(>5.20)</span></td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">Zend Optimizer：</td>
        <td width="75%"><?=defined("OPTIMIZER_VERSION")?OPTIMIZER_VERSION: '<span style="color:red">未安装</span>'?>&nbsp;&nbsp; <span style="color: #999999;"></span></td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">最大上传限制：</td>
        <td width="75%"><?=ini_get('file_uploads') ? ini_get('upload_max_filesize') : '<span style="color:red">Disabled</span>';?></td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">最大执行时间：</td>
        <td width="75%"><?=ini_get('max_execution_time')?> seconds</td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">支持的采集方式：</td>
        <td width="75%"><?=function_exists('curl_init') && function_exists('curl_exec') ? '<span style="color:green">curl_init</span>，' : '<span style="color:red">curl_init</span>，'?><?=function_exists('fsockopen') ? '<span style="color:green"> fsockopen</span>，' : '<span style="color:red"> fsockopen</span>，'?><?=function_exists('pfsockopen') ? '<span style="color:green"> pfsockopen</span>，' : '<span style="color:red"> pfsockopen</span>，'?><?=function_exists('file_get_contents') ? '<span style="color:green"> file_get_contents</span>' : '<span style="color:red"> file_get_contents</span>'?>&nbsp;&nbsp;&nbsp;<span style="color: #999999;">(<span style="color:red">红色的</span>为不支持的方式)</span></td>
      </tr>      
    </table>
    <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
      <tr  class=tb_head>
        <td colspan="2"><h2>产品说明：</h2></td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">站内新闻：</td>
        <td><iframe src="http://www.vxiaotou.com/news.html"; name="express" width="300" height="20" marginwidth="0" marginheight="0" frameborder="0" scrolling="no"></iframe></td>
      </tr>
	  <tr nowrap class="firstalt">
        <td width="25%">当前版本：</td>
        <td><font class="normalfont"><?=$version;?></font> </td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">技术支持：</td>
        <td>QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=996948519&site=qq&menu=yes" target="_blank">996948519</a> &nbsp;&nbsp;&nbsp;官网 : <a href="http://www.vxiaotou.com" target="_blank">www.vxiaotou.com</a></td>
      </tr>
     
    </table>
  </div>
</div>
<? include "footer.php"; ?>
</body>
</html>