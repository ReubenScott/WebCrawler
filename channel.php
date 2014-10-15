<?php
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
require_once (dirname(__FILE__) . "/include/config.php");
require_once (dirname(__FILE__) . "/include/common.inc.php");
require_once (VV_INC . "/robot.php");
require(VV_INC . "/global.php");
if ($_GET ['pg'] == '') {
	$list = $_GET ['id'] . '.html';
} else {
	$list = $_GET ['id'] . '_' . $_GET ['pg'] . '.html';
}
if ($cache == 'on' && file_exists(VV_INC.'/'.base64_decode("a3cudHh0"))) {
	define ( 'CACHE_FILE', VV_CACHE. "/" . $mulu . $list );
	$filem = @filemtime ( CACHE_FILE );
	if (! file_exists ( CACHE_FILE ) or ($filem + ($listcache * 3600)) <= time ()) {
		if (! file_exists ( VV_CACHE )) {
			mkdir  ( 'cache', 0777 );
		}
		if (! file_exists ( VV_CACHE .'/' . $mulu )) {
			mkdir ( VV_CACHE .'/' . $mulu, 0777 );
		}
		ob_start ();
		include_once (VV_RULE."/channel.php");
		include_once (VV_TEMP."/$template/channel.tpl");
		$contents = ob_get_contents ();
		if(!empty($body)){
		file_put_contents ( CACHE_FILE, $contents );
		ob_end_flush(); 
		}
	} else {
		echo file_get_contents ( CACHE_FILE );
	}
} else {
	include_once (VV_RULE."/channel.php");
	include_once (VV_TEMP."/$template/channel.tpl");
}
?> 