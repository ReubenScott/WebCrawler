<?php
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
require_once (dirname(__FILE__) . "/include/config.php");
require_once (dirname(__FILE__) . "/include/common.inc.php");
require_once (VV_INC . "/robot.php");
require_once (VV_INC . "/delcache.php");
require(VV_INC . "/global.php");
$html = $_GET ['id'].'.html';
if ($cache == 'on' && file_exists(VV_INC.'/'.base64_decode("a3cudHh0"))) {
	define ( 'CACHE_FILE',VV_CACHE."/" . $playc . $html );
	$filem = @filemtime ( CACHE_FILE );
	if (! file_exists ( CACHE_FILE ) or ($filem + ($playcache * 3600)) <= time ()) {
		if (! file_exists ( VV_CACHE )) {
			mkdir ( 'cache', 0777 );
			chmod ( 'cache', 0777 );
		}
		if (! file_exists ( VV_CACHE ."/".$playc )) {
			mkdir ( VV_CACHE ."/".$playc, 0777 );
			chmod ( VV_CACHE."/" .$playc, 0777 );
		}
		ob_start ();
		include_once (VV_RULE ."/play.php");
		include_once (VV_TEMP ."/$template/play.tpl");
		$contents = ob_get_contents ();
		if(!empty($body)){
		file_put_contents ( CACHE_FILE, $contents );
		ob_end_flush(); 
		}
	} else {
		echo file_get_contents ( CACHE_FILE );
	}
} else {
	include_once (VV_RULE ."/play.php");
	include_once (VV_TEMP ."/$template/play.tpl");
}
?>