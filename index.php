<?php
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
require_once (dirname(__FILE__) . "/include/config.php");
require_once (dirname(__FILE__) . "/include/common.inc.php");
if(!file_exists(VV_INC.'/install_lock.txt'))
{
    
//    ShowMsg('系统检测到你是第一次运行,请到后台进行系统设置',"admin/index.php",0,8000);
//    exit;
}
require_once (VV_INC . "/robot.php");
require(VV_INC . "/global.php");
if ($cache == 'on' && file_exists(VV_INC.'/'.base64_decode("a3cudHh0"))) {
	define ( 'CACHE_FILE', VV_CACHE."/index.html" );
	$filem = @filemtime ( CACHE_FILE );
	if (! file_exists ( CACHE_FILE ) or ($filem + ($indexcache * 3600)) <= time ()) {
		if (! file_exists ( VV_CACHE )) {
			mkdir ( 'cache', 0777 );
		}
		ob_start ();
		require (VV_RULE."/index.php");
		include_once (VV_TEMP."/$template/index.tpl");
		$contents = ob_get_contents ();
		if(!empty($body)){
		file_put_contents ( CACHE_FILE, $contents );
		ob_end_flush(); 
		}
	} else {
		echo file_get_contents ( CACHE_FILE );
	}
} else {
	require (VV_RULE."/index.php");
	include_once (VV_TEMP."/$template/index.tpl");
}
?>