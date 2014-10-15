<?php
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
if( !defined('VV_INC') ) exit(header("HTTP/1.1 403 Forbidden"));
if(isset($_GET['pg'])){$pg=$_GET['pg'];}else{$pg='1';}
$getid=isset($_GET['id'])?$_GET['id']:die('not id~');

//if($getid=='zuixingangju'){$getid='gangju';}
//if($getid=='dianshiju'){$getid='daludianshiju';}
//if($getid=='ouxiangju'){$getid='taiwan';}
//if($getid=='zuixinmeiju'){$getid='meiju';}
//if($getid=='zuixinhanju'){$getid='hanju';}
//if($getid=='zuixinriju'){$getid='riju';}
//if($getid=='Anime'){$getid='dongman';}
//if($getid=='taiguodianshiju'){$getid='taiju';}
//if($getid=='zongyijiemu'){$getid='zongyiyule';}
//if($getid=='xijudianying'){$getid='xijupian';}
//if($getid=='dongzuodianying'){$getid='dongzuopian';}
//if($getid=='aiqingdianying'){$getid='aiqingpian';}
//if($getid=='juqingdianying'){$getid='juqingpian';}
//if($getid=='kehuandianying'){$getid='kehuanpian';}
//if($getid=='kongbudianying'){$getid='kongbupian';}
//if($getid=='zhanzhengdianying'){$getid='zhanzhengpian';}

$weburl='http://www.ysmi.cc/'.$getid.'/chart/'.$pg.'.html';
//die($weburl);
$body=get($weburl,$caiji);
if ($imgcache == 'on') $body=preg_replace("/src=\"([^\"]*)\"/ei","'src=\"'.'$url$erji'.'pic.php?p='.base64_encode('$1').'\"'",$body);
if($wyc=="on"){$body=wt($body);}else {$body=$body;}
$body=preg_replace("/href=\"\/([^\/]*)\/([^\/]*)\/\"/i",'href="'.$hpath.'$1'.$aid.'$2'.$hzm.'"',$body);
$body=preg_replace('#href="http://www.ysmi.cc/([^\/]*)/([^\/]*)/"#i','href="'.$hpath.'$1'.$aid.'$2'.$hzm.'"',$body);
$body=preg_replace('#href="http://www.shuangtv.net/([^\/]*)/([^\/]*)/"#i','href="'.$hpath.'$1'.$aid.'$2'.$hzm.'"',$body);
$body=preg_replace("/href=['|\"]?\/video([^>\"' ]+)[\"|']?\s*[^>]*>/ei","'href='.'$play'.base64_encode('video$1').'$hzm'.'>'",$body);
$body=preg_replace("/href=['|\"]?http:\/\/www.ysmi.cc\/tv([^>\"' ]+)[\"|']?\s*[^>]*>/ei","'href='.'$play'.base64_encode('video$1').'$hzm'.'>'",$body);

$body=preg_replace("/href=['|\"]?\/dongman([^>\"' ]+)[\"|']?\s*[^>]*>/ei","'href='.'$play'.base64_encode('/dongman$1').'$hzm'.'>'",$body);
$body=preg_replace("/href=['|\"]?http:\/\/www.ysmi.cc\/dongman([^>\"' ]+)[\"|']?\s*[^>]*>/ei","'href='.'$play'.base64_encode('/dongman$1').'$hzm'.'>'",$body);
$body=str_replace('<a href=','<a target="_blank" href=',$body);
preg_match("#<h2><span>.*</span>.*<b>(.*)</b></a>#iUs",$body,$title);
preg_match("#<div class=\"box3_mid\">.*<ul>(.*)</ul>#iUs",$body,$list);
preg_match("#<div id=\"classpage\">.*<ul>(.*)</ul>#iUs",$body,$hot);
preg_match("#<div class=\"pagebox\">(.*)<input#iUs",$body,$fenye);

$fenye[1]=preg_replace("/href=\"([^.]*).html/i",'href="'.$lpath.$_GET['id'].$fy.'$1'.$hzm,$fenye[1]);
$fenye[1]=str_replace('<span><script language=javascript src=http://js.515tv.net/js/page.js></script>','',$fenye[1]);
$fenye[1]=str_replace('<a target="_blank" ','<a ',$fenye[1]);
?>