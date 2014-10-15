<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$title[1]?>_<?=$fl[1]?>_<?=$webtitle?></title>
<meta name="keywords" content="<?=$title[1]?>在线观看,<?=$title[1]?>全集,<?=$title[1]?>百度影音" />
<meta name="description" content=<?=$title[1]?>在线观看,<?=$title[1]?>全集,<?=$title[1]?>百度影音,<?=substring(DeleteHtml($jj[1]),0,200);?> />
<link href="<?=VV_SKIN?>/css/comm.css" rel="stylesheet" type="text/css" />
<link href="<?=VV_SKIN?>/css/html.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include_once('header.tpl');
?>
<div class="htk">
<h3><span><script src="<?=VV_URL?>js/share.js" type="text/javascript"></script></span>
<?=$wz[1]?></h3>
<div class="zckz">
<div class="zcx">
<div class="zka">
<?=$pic[1]?>
</div>
<div class="zkb">
<ul>
<?=$zyan[1]?>
</ul>
<p>
<script src="<?=VV_URL?>js/html_left.js" type="text/javascript"></script>
</p>
</div>
<div id="pfk">
<p align="left"><b style="color: #666666">简介：</b><br>
<?=$jj[1]?></p>
</div>
</div>
<div id="yckz">
<script src="<?=VV_URL?>js/html_right.js" type="text/javascript"></script>
</div>
</div>
</div>


<div id="classbo">
<?=$list[1]?>
<script src="<?=VV_URL?>js/html_down.js" type="text/javascript"></script>

<div id="tka">
<?=$hot[1]?>
</ul>

</div>
</div>
<?php
include_once('footer.tpl');
?>
</body>
</html> 