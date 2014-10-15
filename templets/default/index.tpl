<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$webtitle?></title>
<meta name="keywords" content="<?=$keywords?>" />
<meta name="description" content="<?=$description?>" />
<link href="<?=VV_SKIN?>/css/comm.css" rel="stylesheet" type="text/css" />
<link href="<?=VV_SKIN?>/css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include('header.tpl')?>
<div class="commendType11">
<div class="top2ab113_h">
<h4>今日看点</h4></div>
<div id="middle1a7">
<ul>
<?=$one[1]?>
</ul>
</div>
</div>
<div class="commendType1">
<div class="top2ab1133_h">
<h4><span>今天到目前已更新<strong><?=$today[1]?></strong>部</span>最近更新</h4>
</div>
<ul class="hang1">
<?=$today[2]?>
<center><script src="<?=VV_URL?>js/index.js" type="text/javascript"></script></center>
<div id="middle1">
<div class="middle2aa">
<div class="top2"><div class="top2a1_h6"><h2><span>总排行</span>本周</h2></div>
<ul>
<?=$two[1]?>
</ul></div>
<div class="top3"><div class="top2a1_h6"><h2><span>月排行</span>电视剧</h2></div>
<ul>
<?=$two[2]?>
</ul></div>
<div class="top5"><div class="top2a1_h6"><h2><span>月排行</span>动漫</h2></div>
<ul>
<?=$two[3]?>
</ul></div>
<div class="top4"><div class="top2a1_h6"><h2><span>月排行</span>电影</h2></div>
<ul>
<?=$two[4]?>
</ul></div>
</div>
<div class="middle2ab">
<div class="commendType">
<div class="top2ab11_h">
<h1><span><a href="<?=$lpath.'zuixinhanju'.$hzm?>">查看更多</a></span><a href="<?=$lpath.'zuixinhanju'.$hzm?>">韩国电视剧</a></h1>
</div>
<ul>
<?=$there[1]?>
</ul>
</div>
<div class="commendType">
<div class="top2ab11_h">
<h1><span><a href="<?=$lpath.'zuixinmeiju'.$hzm?>">查看更多</a></span><a href="<?=$lpath.'zuixinmeiju'.$hzm?>">美国电视剧</a></h1>
</div>
<ul>
<?=$there[2]?>
</ul>
</div>
<div class="commendType">
<div class="top2ab11_h">
<h1><span><a href="<?=$lpath.'zuixingangju'.$hzm?>">查看更多</a></span><a href="<?=$lpath.'zuixingangju'.$hzm?>">香港电视剧</a></h1>
</div>
<ul>
<?=$there[3]?>
</ul>
</div>
<div class="commendType">
<div class="top2ab11_h">
<h1><span><a href="<?=$lpath.'dianshiju'.$hzm?>">查看更多</a></span><a href="<?=$lpath.'dianshiju'.$hzm?>">大陆电视剧</a></h1>
</div>
<ul>
<?=$there[4]?>
</ul>
</div>
<div class="commendType">
<div class="top2ab11_h">
<h1><span><a href="<?=$lpath.'ouxiangju'.$hzm?>">查看更多</a></span><a href="<?=$lpath.'ouxiangju'.$hzm?>">台湾电视剧</a></h1>
</div>
<ul>
<?=$there[5]?>
</ul>
</div>
<div class="commendType">
<div class="top2ab11_h">
<h1><span><a href="<?=$lpath.'zuixinriju'.$hzm?>">查看更多</a></span><a href="<?=$lpath.'zuixinriju'.$hzm?>">日本电视剧</a></h1>
</div>
<ul>
<?=$there[6]?>
</ul>
</div>
<div class="commendType">
<div class="top2ab11_h">
<h1><span><a href="<?=$lpath.'zongyijiemu'.$hzm?>">查看更多</a></span><a href="<?=$lpath.'zongyijiemu'.$hzm?>">综艺娱乐</a></h1>
</div>
<ul>
<?=$there[7]?>
</ul>
</div>

<div class="commena">
<div class="top2ab11_h"><h1><span><a href="<?=$lpath.'Anime'.$hzm?>">查看更多</a></span><a href="<?=$lpath.'Anime'.$hzm?>">动漫天堂</a></h1></div>
<ul>
<?=$there[8]?>
</ul>
</div>
<div class="commenb">
<div class="top2ab11_h"><h1><span><a href="#top">电影类型</a></span><a href="<?=VV_URL?>">电影天堂</a></h1></div>
<ul>
<?=$there[9]?>
</ul>
</div>
</div>
</div>
<script src="<?=VV_URL?>js/index_down.js" type="text/javascript"></script>
<div class="footer">
<div class="fter">
<h4><span>申请链接</span>友情链接</h4>
</div>
<div class="Links">
<?php
$flink = preg_replace ( '/;/', "", $flink, 1 );
$arr = explode(';', $flink);
foreach ($arr as $value) {
list($name,$flinks)=split('[|]',$value);
echo "<a href=\"".$flinks."\" target=\"_blank\">".$name."</a>";
}
?>
</div>
</div>
<?php include('footer.tpl')?>
</body>
</html> 