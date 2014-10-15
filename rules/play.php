<?php
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
if( !defined('VV_INC') ) exit(header("HTTP/1.1 403 Forbidden"));
$getid=isset($_GET['id'])?$_GET['id']:die('not id~');

$weburl='http://www.ysmi.cc/'.base64_decode($getid);
//die($weburl);
$body=get($weburl,$caiji);

$body=preg_replace("/href=\"\/([^\/]*)\/([^\/]*)\/\"/i",'href="'.$hpath.'$1'.$aid.'$2'.$hzm.'"',$body);
$body=preg_replace("/href=\"http:\/\/www.niniys.com\/([^\/]*)\/([^\/]*)\/\"/i",'href="'.$hpath.'$1'.$aid.'$2'.$hzm.'"',$body);
$body=preg_replace("/href=\"http:\/\/www.ysmi.cc\/([^\/]*)\/([^\/]*)\/\"/i",'href="'.$hpath.'$1'.$aid.'$2'.$hzm.'"',$body);
preg_match("#<title>(.*) - #iUs",$body,$title);
preg_match("#<h3><span>.*</span>(.*)</h3>#iUs",$body,$wz);
preg_match("#<div class=\"movienews41a\">(.*)</div>#iUs",$body,$list);
preg_match("#url =\"([^>]*)\"#iUs",$body,$purl);
if(preg_match("/bdhd/i",$purl[1])) $bfq[1]=VV_URL."js/by.js";
elseif(is_numeric($purl[1])) $bfq[1]=VV_URL."js/tudou.js";
else $bfq[1]=VV_URL."js/youku.js";
$list[1]=preg_replace("/href=\"([^\"]*)\"/ei","'href=\"'.'$play'.base64_encode('$1').'$hzm'.'\"'",$list[1]);
$wz[1]=dellink($wz[1]);

?>