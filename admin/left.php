<?
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
require_once('data.php');
require_once('../include/common.inc.php');
if($_COOKIE['x_Cookie']!=$adminname or $_COOKIE['y_Cookie']!=$password){
	echo"<script>location.href='index.php';</script>";
	exit;
}
?>
 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<script language="JavaScript" charset="utf-8" type="text/javascript" src="js/left.js"></script>
</head>
<body background="img/top10.gif">
<div style="width:170px"> <img src="img/top11.gif">

  <div id="main1" onclick=expandIt(1) class="expand">
    <div class="expand_title">系统设置</div>
  </div>
  <div id="sub1" class="expand_sub">
    <ul>
      <li><a href="admin_index.php" target="content">网站状态</a> </li>
      <li><a href="admin_main.php" target="content">系统设置</a></li>
		<li><a href="template.php" target="content">模板设置</a></li>
      <li><a href="del.php" target="content">清除缓存</a></li>
      <li><a href="admin_pass.php" target="content">修改密码</a></li>
	  <li><a href="updata.php" target="content">在线升级</a></li>
    </ul>
  </div> 
</div>

<div id="main2" onclick=expandIt(2) class="expand">
    <div class="expand_title">seo优化设置</div>
</div>
  <div id="sub2" class="expand_sub">
    <ul>
<li><a href="seorlink.php" target="content">关键词内链</a></li>
<li><a href="sift.php" target="content">内容过滤</a></li>
<li><a href="wyc.php" target="content">伪原创词汇</a></li>
    </ul>
  </div>
  
  <div id="main3" onclick=expandIt(3) class="expand">
    <div class="expand_title">广告设置</div>
  </div>
  <div id="sub3" class="expand_sub">
    <ul>
      <li><a href="admin_ad.php" target="content">广告设置</a>
	  <li><a href="html2js.html" target="content">html转js</a>

    </ul>
  </div> 
 
  
<div id="main4" onclick=expandIt(4) class="expand">
    <div class="expand_title">蜘蛛访问</div>
  </div>
  <div id="sub4" class="expand_sub">
    <ul>
<li><a href="zhizhu.php" target="content">蜘蛛访问记录</a></li>

    </ul>
  </div>

<div id="main5" onclick=expandIt(5) class="expand">
    <div class="expand_title">技术支持</div>
  </div>
  <div id="sub5" class="expand_sub">
    <ul>
<li>客服QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=996948519&site=qq&menu=yes" target="_blank"><font color=#FF6600>996948519</font></a> </li>
<li>官网：<a href="http://www.vxiaotou.com" target="_blank"><font color=#FF6600>vxiaotou</font></a></li>

    </ul>
  </div>

</body>
</html>