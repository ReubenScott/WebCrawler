<?php
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
require_once (dirname(__FILE__) . "/include/config.php");
require_once (dirname(__FILE__) . "/include/common.inc.php");
require(VV_INC . "/global.php");
include_once (VV_RULE ."/search.php");
ob_start(); 
include_once (VV_TEMP ."/$template/search.tpl");
ob_end_flush(); 
?>