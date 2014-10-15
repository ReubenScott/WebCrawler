<?php
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
if( !defined('VV_INC') ) exit(header("HTTP/1.1 403 Forbidden"));
if($_POST['key']==''){
echo "<script>alert('请输入关键词');history.go(-1);</script>"; 
exit;
}
$keys=isset($_POST['key'])?htmlspecialchars($_POST['key']):die('关键词不能为空！');
$weburl='http://so.ysmi.cc/so.asp?keyword='.$keys;
//$getUrl='http://tool.114la.com/?ct=site&ac=wapview_api&Method=get&URL='.urlencode($weburl);
$body=get($weburl,$caiji);
//$body=iconv("UTF-8","GBK",$body);
if($wyc=="on"){$body=wt($body);}else {$body=$body;}
$body=preg_replace("/href=\"\/([^\/]*)\/([^\/]*)\/\"/i",'href="'.$hpath.'$1'.$aid.'$2'.$hzm.'"',$body);
$body=preg_replace("/href=\"http:\/\/www.shuangtv.net\/([^\/]*)\/([^\/]*)\/\"/i",'href="'.$hpath.'$1'.$aid.'$2'.$hzm.'"',$body);
$body=preg_replace("/href=\"http:\/\/www.ysmi.cc\/([^\/]*)\/([^\/]*)\/\"/i",'href="'.$hpath.'$1'.$aid.'$2'.$hzm.'"',$body);
preg_match("#<ul class=\"hang1\">(.*)</div>#iUs",$body,$list);
$list[1]=preg_replace("#<script[^>]*>(.*)</script>#i",'',$list[1]);
if (stripos ( $list[1], "没有搜索到" ) > - 1){
unset($list[1]);
$list[1]='<div class="classpage33"><br><br>非常抱歉，没有搜索到您要的结果，请参考下面的搜索帮助：<br><br><font color=Black><br>1、请使用简化搜索，比如搜索：大话西游，只需要输入：“大话”或者“西游”或者“话”，输入的关键词越少越全面。<br><br>2、你也可以通过搜索主演名字也能找到，比如：“周星驰”或者“朱茵”或者“吴孟达”。<br><br>3、本站的资源是非常丰富和优质的，观看的人越多播放越流畅，请把本站告诉您身边的朋友吧。</font><div style="text-align:center;padding-top:70px;"><form method="post" class="fmm" action="'.VV_URL.'search.php"><input class="i" maxlength="100" name="key" /><span class="btn_wr"><input type="submit"  value="搜索影片" class="btn" /></span></form></div></div><div style="padding-top:70px;"></div></ul>';
}
?>