<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>好看的<?=$title[1]?>_最新<?=$title[1]?>_<?=$webtitle?></title>
<meta name="keywords" content="最新<?=$title[1]?>,<?=$title[1]?>" />
<meta name="description" content="最新<?=$title[1]?>专栏：2012年最新<?=$title[1]?>在线观看尽在<?=$webtitle?>，我们诚挚的欢迎所有喜欢看<?=$title[1]?>的朋友的到来，我们每天会第一时间更新" />
<link href="<?=VV_SKIN?>/css/comm.css" rel="stylesheet" type="text/css" />
<link href="<?=VV_SKIN?>/css/list.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include_once('header.tpl');
?>
<div id="classpage">
<div id="classpage1">
<div class="top2a1178"><div class="top2a15_h"><span>评分</span><p>热门影片</p></div>
<ul>
<?=$hot[1]?>
</ul>
<script src="<?=VV_URL?>js/list_r.js" type="text/javascript"></script>
</div>
</div>	
<div id="classpage2">
<div class="middle2aa1"><div class="middle2aa1_h"><h2><span></span><b><?=$title[1]?></b></h2>
</div><div class="box3">
<div class="box3_mid">
<ul>
<?=$list[1]?>
</ul></div></div></div><div id="classpage10"><div class="pagebox">
<?=$fenye[1]?>
</div></div>
<div style="margin-top: 5px;"></div>
</div>
</div>
<div id="mimi">
<center>
<script src="<?=VV_URL?>js/list_down.js" type="text/javascript"></script>
</center>
<?php
include_once('footer.tpl');
?>
</body>
</html> 