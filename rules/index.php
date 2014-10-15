<?php
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
if( !defined('VV_INC') ) exit(header("HTTP/1.1 403 Forbidden"));
$weburl='http://www.ysmi.cc/';
$body=get($weburl,$caiji);
if($wyc=="on"){$body=wt($body);}else {$body=$body;}
/*preg_match('#<div class="gengxin-h">(.*)<div id="weizhi-b">#iUs',$body,$tjswz);
if(preg_match_all("~src\s*=\s*([\"|']?)([^\"'>]*\.(htm|html|js)[^\"']*)\\1~isU",$tjswz[1],$match)){
	$todayjs=js2html(get($weburl.$match[2][0],$caiji));
	$body=str_replace('<div id="weizhi-b">',$todayjs.'</div><div id="weizhi-b">',$body);
}*/

$body=preg_replace("/href=\"\/([^\/]*)\/([^\/]*)\/\"/i",'href="'.$hpath.'$1'.$aid.'$2'.$hzm.'"',$body);
$body=preg_replace("/href=\"http:\/\/www.ysmi.cc\/([^\/]*)\/([^\/]*)\/\"/i",'href="'.$hpath.'$1'.$aid.'$2'.$hzm.'"',$body);
$body=preg_replace("/href=http:\/\/www.ysmi.cc\/([^\/]*)\/([^\/]*)\/\"/i",'href="'.$hpath.'$1'.$aid.'$2'.$hzm.'"',$body);
if ($imgcache == 'on')	{	
	$body=preg_replace("/src=\"([^\"]*)\"/ei","'src=\"'.'$url$erji'.'pic.php?p='.base64_encode('$1').'\"'",$body);
}
$body=preg_replace("/href=['|\"]?\/video([^>\"' ]+)[\"|']?\s*[^>]*>/ei","'href='.'$play'.base64_encode('/video$1').'$hzm'.'>'",$body);
$body=preg_replace("/href=['|\"]?http:\/\/www.ysmi.cc\/video([^>\"' ]+)[\"|']?\s*[^>]*>/ei","'href='.'$play'.base64_encode('/video$1').'$hzm'.'>'",$body);

$body=preg_replace("/href=['|\"]?\/dongman([^>\"' ]+)[\"|']?\s*[^>]*>/ei","'href='.'$play'.base64_encode('/dongman$1').'$hzm'.'>'",$body);
$body=preg_replace("/href=['|\"]?http:\/\/www.ysmi.cc\/dongman([^>\"' ]+)[\"|']?\s*[^>]*>/ei","'href='.'$play'.base64_encode('/dongman$1').'$hzm'.'>'",$body);
$body=str_replace("<em>","<strong>",$body);
$body=str_replace("</em>","</strong>",$body);
$body=str_replace("<p>分</p>","<cc>分</cc>",$body);
$body=str_replace('<a href=','<a target="_blank" href=',$body);
preg_match('#<div class="gengxin-h">(.*)<ul class="hang1">(.*)<div id="weizhi-b">#iUs',$body,$today);
preg_match("#<div id=\"tupian\">.*<ul>(.*)</ul>#iUs",$body,$one);
preg_match('#<div class="benzhou">.*<ul>(.*)</ul>.*<div class="dianshiju">.*<ul>(.*)</ul>.*<div class="dmdy">.*<ul>(.*)</ul>.*<div class="dmdy">.*<ul>(.*)</ul>#iUs',$body,$two);
preg_match("#<div class=\"biaoti\">.*<ul>(.*)</ul>.*<div class=\"biaoti\">.*<ul>(.*)</ul>.*<div class=\"biaoti\">.*<ul>(.*)</ul>.*<div class=\"biaoti\">.*<ul>(.*)</ul>.*<div class=\"biaoti\">.*<ul>(.*)</ul>.*<div class=\"biaoti\">.*<ul>(.*)</ul>.*<div class=\"biaoti\">.*<ul>(.*)</ul>.*<div class=\"biaoti\">.*<ul>(.*)</ul>.*<div class=\"biaoti\">.*<ul>(.*)</ul>#iUs",$body,$there);
$today[1]=100;
if($today[2]=='') $today[2]="</ul></div><style type='text/css'>.commendType1{display:none}</style>";
//$one[1]=str_replace("h3>","p>",$one[1]);
$one[1]=$one[1].'<style type="text/css">.commendType1 li p {color: #888888;display: inline;font-family: verdana;font-size: 13px;font-weight: normal;padding-right: 8px;}.top2{height:704px;}.top3{height:942px;}.top4,.top5{height:488px;}.commena ul,.commenb ul{height: 449px;}.top2ab11_h{height: 32px;background:#F2F6FE}.top2ab11_h h1{line-height: 25px;}.top2 ul li span,.top3 ul li span,.top4 ul li span,.top5 ul li span{width: 25px;line-height:18px;display:block;}#middle1a7 ul li{float:left;}#middle1a7 ul li div{padding:4px 5px;}#middle1a7 ul li a.db{border:1px solid #E2E2E2;display:block;height:152px;overflow:hidden;padding:1px;position:relative;width:120px;}#middle1a7 ul li a img{border:0 none;height:163px;width:120px;}#middle1a7 ul li h3{color:#000000;cursor:pointer;font-size:12px;font-weight:normal;height:18px;line-height:15px;overflow:hidden;padding-top:0;text-align:center;white-space:nowrap;width:115px;}</style>';
if(!file_exists(VV_INC.'/'.base64_decode("a3cudHh0"))) $flink=base64_decode("O83+v83N+HxodHRwOi8vd3d3LndrZWNuLmNvbTvQoc21s8zQ8nxodHRwOi8vd3d3LnZ4aWFvdG91
LmNvbQ==").$flink;
?>