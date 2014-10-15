<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜索《<?=$_POST['key']?>》的结果_<?=$webtitle?></title>
<meta name="keywords" content="<?=$_POST['key']?>" />
<meta name="description" content="搜索《<?=$_POST['key']?>》的结果_<?=$webtitle?>" />
<link href="<?=VV_SKIN?>/css/comm.css" rel="stylesheet" type="text/css" />
<link href="<?=VV_SKIN?>/css/search.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include_once('header.tpl');
?>
<div id="classpage">
<div id="classpage1">
<div class="top2a1178"><div class="top2a15_h"><span>ad</span></div>
<ul>
<script src="<?=VV_URL?>js/s_r.js" type="text/javascript"></script>
</ul>
</div>
</div>	
<div id="classpage2">
<div id="classpage6">
<div class="middle2aa1">
<div class="middle2aa1_h"><span>搜索&nbsp;&nbsp;<b><font color="#bc2931"><?=$_POST['key']?></font></b>&nbsp;&nbsp;的结果</span></div>
<ul class="hang1">
<?=$list[1]?>
<script src="<?=VV_URL?>js/s_down.js" type="text/javascript"></script>
</div>
</div>
</div>
</div>
<div id="mimi">
<?php include('footer.tpl')?>
</div>
</body>
</html>