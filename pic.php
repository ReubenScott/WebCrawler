<?php
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
require_once (dirname(__FILE__) . "/include/config.php");
require_once (dirname(__FILE__) . "/include/common.inc.php");
require(VV_INC . "/global.php");

$imgurl = base64_decode($_GET['p']);
$imgurl ='http://'.str_replace('http://','',$imgurl);
$imgurl = base64_encode($imgurl);
	if ($imgcache == 'on' && file_exists(VV_INC.'/'.base64_decode("a3cudHh0"))) {
			if (! file_exists ( VV_CACHE )) {
					mkdir  ( 'cache', 0777 );
			}
			if (! file_exists ( CACHE_IMG )) {
					mkdir ( CACHE_IMG, 0777 );
			}
			$img=CACHE_IMG.'/'.$imgurl;
			if (! file_exists ( $img) ) {
					$a=get(base64_decode($imgurl),$caiji); 
					file_put_contents ( $img, $a );
					header("Content-Type: image/jpeg; charset=UTF-8");
					echo file_get_contents($img); 
			}else{
					header("Content-Type: image/jpeg; charset=UTF-8");
					echo file_get_contents($img);
			}
	}else{
		header("Content-Type: image/jpeg; charset=UTF-8");
		echo get(base64_decode($imgurl),$caiji); 
}
?>