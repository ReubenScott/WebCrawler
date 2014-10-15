<?php
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
if( !defined('VV_INC') ) exit(header("HTTP/1.1 403 Forbidden"));
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


$weburl='http://www.ysmi.cc/'.$getid.'/'.$_GET['aid'].'/';
$body=get($weburl,$caiji);
if($wyc=="on"){$body=s(wt($body));}else {$body=s($body);}
$body=preg_replace("/href=\"\/([^\/]*)\/([^\/]*)\/\"/i",'href="'.$hpath.'$1'.$aid.'$2'.$hzm.'"',$body);
$body=preg_replace("/href=\"http:\/\/www.ysmi.cc\/([^\/]*)\/([^\/]*)\/\"/i",'href="'.$hpath.'$1'.$aid.'$2'.$hzm.'"',$body);
$body=preg_replace("/href=\"\/([^\/]*)\/\"/i",'href="'.$lpath.'$1'.$hzm.'"',$body);
$body=preg_replace("/href=\"http:\/\/www.ysmi.cc\/([^\/]*)\/\"/i",'href="'.$lpath.'$1'.$hzm.'"',$body);
if ($imgcache == 'on') $body=preg_replace("/src=\"([^\"]*)\"/ei","'src=\"'.'$url$erji'.'pic.php?p='.base64_encode('$1').'\"'",$body);
preg_match("#<b>(.*)</b>#iUs",$body,$title);
preg_match("# - (.*) - #iUs",$body,$fl);
preg_match("#<div class=\"zhuyan\">.*<ul>(.*)</ul>#iUs",$body,$zyan);
preg_match("#<h2><span>.*</span>(.*)</h2>#iUs",$body,$wz);
preg_match("#<div class=\"haibao\">(.*)</div>#iUs",$body,$pic);
preg_match("#<div class=\"neirong\">.*<p>(.*)</p>#iUs",$body,$jj);
preg_match('#<div id="liebiao">(.*)<script#iUs',$body,$list);
preg_match("#<div class=\"shengji\">.*<h2><span>(.*)</span></h2>#iUs",$list[1],$ad);
preg_match("#<div id=\"paihangbang\">.*<ul>(.*)</ul>#iUs",$body,$hot);

$hot[1]='<div id="lmt"><h3>本分类本周排行榜</h3></div><div id="tu"><ul>'.$hot[1];
$list[1]=str_replace($ad[1],'',$list[1]);
$list[1]=str_replace('bofangqi','lk',$list[1]);
$list[1]=str_replace('shengji','title',$list[1]);
$list[1]=str_replace('jishu','jk',$list[1]);
$list[1]=str_replace('guankan','jc',$list[1]);
$list[1]=preg_replace("/href=\"([^\"]*)\"/ei","'href=\"'.'$play'.base64_encode('$1').'$hzm'.'\"'",$list[1]);
$wz[1]=preg_replace("/href=\"\/chart\/([^\/]*)\/1.html/i",'href="'.$lpath.'$1'.$hzm,$wz[1]);
$jj[1]=str_replace('shuangtv.net','',$jj[1]);
$jj[1]=str_replace('ysmi.cc','',$jj[1]);
$jj[1]=str_replace('www.ysmi.cc','',$jj[1]);
$jj[1]=SL(dellink($jj[1]),2);
$jj[1]=str_replace("www.影视迷",$webtitle,$jj[1]);
$wz[1]='<style type="text/css">.htk h3 p{display: inline;}</style>'.$wz[1];
?>