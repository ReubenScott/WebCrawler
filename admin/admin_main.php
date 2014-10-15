<?
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
require_once('data.php');
require_once('../include/config.php');
require_once('../include/common.inc.php');
if ($_COOKIE ['x_Cookie'] != $adminname or $_COOKIE ['y_Cookie'] != $password) {
	echo "<script>location.href='index.php';</script>";
	exit ();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link href="css/jquery.css" rel="stylesheet" type="text/css">
<link href="css/base.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/sqm.js"></script>
<script type="text/javascript">
function tab(no,n){
	for(var i=1;i<=n;i++){
		$('#config'+i).hide();
	}
	$('#config'+no).show();
} 
</script>
</head>
<body> 
<?
if ($_GET ['id'] == 'man') {
?>
<div class="right">
 <? include "welcome.php";?>
  <div class="right_main">
<div id="settingp"></div>
<table width="98%" border="0" cellpadding="4" cellspacing="1"
	class="tableoutline">
	<form action="?id=save" method="post">
	<tbody id="config1">
		<tr nowrap class="tb_head">
			<td colspan="2">
			<h2>网站信息：</h2>
			</td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>网站标题</b><br>
			</td>
			<td><input type="text" name="webtitle" size="25" maxlength="50" value="<?=$webtitle;?>" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>
<!--<tr nowrap class="firstalt">
			<td width="260"><b>网站地址</b><br>
			<font color="#666666"><font color="red">斜杠"/"</font>结尾，保持默认即可</font></td>
			<td><input type="text" name="url" size="25" maxlength="50" value="<?=$url;?>" onFocus="this.style.borderColor='#00CC00'" readonly onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>-->
		<tr nowrap class="firstalt">
			<td width="260"><b>二级目录</b><br>
			<font color="#666666">注意以<font color="red">斜杠"/"</font>结尾,<font color="red">根目录请留空</font></font></td>
			<td><input type="text" name="erji" size="25" maxlength="50" value="<?=$erji;?>" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>默认风格</b><br>
			<font color="#666666">网站风格文件夹.位于templets目录下,一般默认</font></td>
			<td><input type="text" name="template" size="25" maxlength="50" value="<?=$template?>" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>

		<tr nowrap class="firstalt">
			<td width="260"><b>关键字</b><br>
			<font color="#666666">SEO关键字描述</font></td>
			<td><input name="keywords" type="text" value="<?=$keywords?>"
				size="55" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>网站描述</b><br>
			<font color="#666666">SEO网页内容信息描述</font></td>
			<td><textarea name="description" cols="80"
				style="height: 70px; width: 350px" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=$description?></textarea></td>
		</tr>
		<tr class="firstalt">
			<td width="260" valign="top"><b>统计代码</b><br>
			<font color="#666666">流量统计代码(html代码)<br><!--<font color="red">注意：把代码中的双引号改成单引号</font>--></font></td>
			<td><textarea name="tongji" cols="80"
				style="height: 70px; width: 350px" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=$tongji?></textarea></td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>备案信息</b><br>
			<font color="#666666">填写贵站的ICP备案信息</font></td>
			<td><input type="text" name="beian" size="25" value="<?=$beian?>" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>
		<tr nowrap class="tb_head">
			<td colspan="2">
			<h2>页面设置：</h2>
			</td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>伪原创开关</b><img src="img/vip.gif" title="vip功能" width="23" height="12" /><br>
			<font color="#666666">开启伪原创有利于seo</font></td>
			<td><select name="wyc">
				<option value="on" <?
	if ($wyc == "on")
		echo " selected";?>>开启</option>
				<option value="off" <?
	if ($wyc == "off")
		echo " selected";?>>关闭</option>
			</select></td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>采集方式</b><br>
			<font color="#666666">服务器不支持采集的时候,可以尝试更换采集方式</font><br>
			<font color="#666666">推荐使用curl_init方式</font></td>
			<td><select name="caiji">
				<option value="curl_init" <?
	if ($caiji == "curl_init")
		echo " selected";?>>curl_init</option>
				<option value="fsock" <?
	if ($caiji == "fsock")
		echo " selected";?>>fsockopen</option>
				<option value="pfsock" <?
	if ($caiji == "pfsock")
		echo " selected";?>>pfsockopen</option>
				<option value="file_get_contents" <?
	if ($caiji == "file_get_contents")
		echo " selected";?>>file_get_contents</option>
			</select></td>
		</tr>
	</tbody>

	<tbody id="config2" style="display: none">
		<tr nowrap class="tb_head">
			<td colspan="3">
			<h2>友情链接：</h2>
			</td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260" align="center"><b>网站名称</b><br>
			</td>
			<td style="padding-left: 120px;"><b>网站地址</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>顺序</b></td>
		</tr>
		<?
	$flink = preg_replace ( '/;/', "", $flink, 1 );
	$flink = explode ( ";", $flink );
	$coulink = count ( $flink );
	$n = 0;
	for($i = 0; $i < $coulink; $i ++) {
		if (! empty ( $flink [$i] )) {
			$sitelink = explode ( "|", $flink [$i] );
		}
		?>
        <tr nowrap class="firstalt">
			<td width="260" align="center"><input
				name="link_name[<?=$n;?>]" type="text" value="<?=str_replace ( "\r\n", "", $sitelink [0] );?>"
				maxlength="50" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
			<td style="padding-left: 70px;"><input
				name="link_url[<?=$n;?>]" type="text" value="<?
		if (empty ( $sitelink [0] ) && empty ( $sitelink [1] )) {
			echo "http://";
		} else {
		}
		?><?=str_replace ( "\r\n", "", $sitelink [1] );?>"
				size="30" maxlength="250" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
				name="link_order[<?=$n;?>]" type="text" value="<?=$n;?>"
				size="5" maxlength="5" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>
<?
		$n ++;
	}
	?>
<?php

	if (! empty ( $sitelink [0] ) && ! empty ( $sitelink [1] )) {
		?>
<tr nowrap class="firstalt">
			<td width="260" style="padding-left: 32px;">添加&nbsp;&nbsp;&nbsp;&nbsp;<input
				name="link_name_sub" type="text" maxlength="50" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
			<td style="padding-left: 70px;"><input name="link_url_sub"
				type="text" size="30" value="http://" maxlength="250" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
				name="link_order_sub" type="text" size="5" value="50" maxlength="5" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>
<?php
	} else {
	}
	?>
      </tbody>

	<tbody id="config3" style="display: none">
		<tr nowrap class="tb_head">
			<td colspan="2">
			<h2>伪静态设置：</h2>
			</td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>列表目录</b><br>
			<font color="#666666">以<font color="red">斜杠"/"</font>结尾，例如&nbsp;&nbsp;list/</font><br>
			</td>
			<td><input type="text" name="mulu" size="25" maxlength="50" value="<?=$mulu;?>" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>内容页目录</b><br>
			<font color="#666666">以<font color="red">斜杠"/"</font>结尾，例如&nbsp;&nbsp;html/</font><br>
			</td>
			<td><input type="text" name="news" size="25" maxlength="50" value="<?=$news;?>" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>播放页目录</b><br>
			<font color="#666666">以<font color="red">斜杠"/"</font>结尾，例如&nbsp;&nbsp;play/</font><br>
			</td>
			<td><input type="text" name="playc" size="25" maxlength="50" value="<?=$playc?>" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>
				<tr nowrap class="firstalt">
			<td width="260"><b>浏览模式</b><br>
			<font color="#666666">动态与静态的切换</font></td>
			<td><select name="rewrite">
				<option value="on" <?
	if ($rewrite == "on")
		echo " selected";?>>伪静态</option>
				<option value="off" <?
	if ($rewrite == "off")
		echo " selected";?>>动态浏览</option>
			</select></td>
		</tr>
	</tbody>
<tbody id="config4" style="display: none">
<tr nowrap class="tb_head">
			<td colspan="2">
			<h2>缓存设置：</h2>
			</td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>首页缓存保存时间</b><br>
			<font color="#666666">小时为单位,1为1小时</font></td>
			<td><input type="text" name="indexcache" size="25" maxlength="50" value="<?=$indexcache;?>" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>列表页缓存保存时间</b><br>
			<font color="#666666">小时为单位,1为1小时</font></td>
			<td><input type="text" name="listcache" size="25" maxlength="50" value="<?=$listcache;?>" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>内容页缓存保存时间</b><br>
			<font color="#666666">小时为单位,1为1小时</font></td>
			<td><input type="text" name="htmlcache" size="25" maxlength="50" value="<?=$htmlcache;?>" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>播放页缓存保存时间</b><br>
			<font color="#666666">小时为单位,1为1小时</font></td>
			<td><input type="text" name="playcache" size="25" maxlength="50" value="<?=$playcache;?>" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>缓存自动清理</b><br>
			<font color="#666666">超过设定值自动清除缓存,单位为 MB</font></td>
			<td><input type="text" name="delcache" size="25" maxlength="50" value="<?=$delcache;?>" onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ></td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>图片缓存开关</b><img src="img/vip.gif" title="vip功能" width="23" height="12" /><br>
			<font color="#666666">开启图片缓存，保存远程图片到本地</font></td>
			<td><select name="imgcache" >
				<option value="on" <?
	if ($imgcache == "on")
		echo "selected";?>>开启</option>
				<option value="off" <? if ($imgcache == "off")
	echo "selected";?>>关闭</option>
			</select></td>
		</tr>
		<tr nowrap class="firstalt">
			<td width="260"><b>页面缓存开关</b><img src="img/vip.gif" title="vip功能" width="23" height="12" /><br>
			<font color="#666666">开启页面缓存，节省服务器CPU资源</font></td>
			<td><select name="cache">
				<option value="on" <?
	if ($cache == "on")
		echo "selected";?>>开启</option>
				<option value="off" <? if ($cache == "off")
	echo "selected";?>>关闭</option>
			</select></td>
		</tr>
</tbody>
	<tr class="firstalt">
		<td colspan="2" align="center"><input type="hidden" name="action" value="setting"> <input class="bginput" type="submit" name="submit" value=" 提交 "> <input class="bginput" type="reset" name="Input" value=" 重置 "></td>
	</tr>
	</form>
</table>
</div>
</div>
<? include "footer.php";?>
</body>
</html>

<?php
} elseif ($_GET ['id'] == 'save') {	
	$linkname = $_POST ['link_name'];
	$linkurl = $_POST ['link_url'];
	$linkorder = $_POST ['link_order'];
	$linkname_sub = ! empty ( $_POST ['link_name_sub'] ) ? trim ( $_POST ['link_name_sub'] ) : "";
	$linkurl_sub = ! empty ( $_POST ['link_url_sub'] ) ? trim ( $_POST ['link_url_sub'] ) : "";
	$linkorder_sub = ! empty ( $_POST ['link_order_sub'] ) ? trim ( $_POST ['link_order_sub'] ) : "";
	for($i = 0; $i < count ( $linkname ); $i ++) {
		if ($linkname [$i] != "") {
			$linkstr [$i] = $linkname [$i] . "|" . $linkurl [$i];
		}
	}
	if ($linkname_sub != "") {
		$linkstr [$linkorder_sub] = $linkname_sub . "|" . $linkurl_sub;
	}
	ksort ( $linkstr );
	while ( list ( $key, $value ) = each ( $linkstr ) ) {
		$linkstrs .= ";".$value;
	}
$word = '<?php
$webtitle=' . '"' . $_POST ['webtitle'] . '"'.";\r\n".
'$url=' . '"/"'.";\r\n".
'$erji=' . '"' . $_POST ['erji'] . '"'.";\r\n".
'$tongji=' . '"' . str_replace('"',"'",stripslashes($_POST ['tongji'])) . '"' .";\r\n".
'$beian=' . '"' . $_POST ['beian'] . '"' .";\r\n".
'$cache=' . '"' . $_POST ['cache'] . '"'.";\r\n".
'$imgcache=' . '"' . $_POST ['imgcache'] . '"'.";\r\n".
'$indexcache=' . '"' . $_POST ['indexcache'] . '"' .";\r\n".
'$listcache=' . '"' . $_POST ['listcache'] . '"' .";\r\n".
'$htmlcache=' . '"' . $_POST ['htmlcache'] . '"' .";\r\n".
'$playcache=' . '"' . $_POST ['htmlcache'] . '"' .";\r\n".
'$delcache=' . '"' . $_POST ['delcache'] . '"' .";\r\n".
'$wyc=' . '"' . $_POST ['wyc'] . '"' .";\r\n".
'$rewrite=' . '"' . $_POST ['rewrite'] . '"' .";\r\n".
'$caiji='."'".$_POST ['caiji']."'".";\r\n".
'$mulu=' . '"' . $_POST ['mulu'] . '"' .";\r\n".
'$news=' . '"' . $_POST ['news'] . '"' .";\r\n".
'$playc=' . '"' . $_POST ['playc'] . '"' .";\r\n".
'$keywords=' . '"' . $_POST ['keywords'] . '"' .";\r\n".
'$description=' . '"' . $_POST ['description'] . '"' .";\r\n".
'$flink=' . '"' . $linkstrs . '"' .";\r\n".
'$template=' . '"' . $_POST ['template'] . '"'. ";\r\n"."?>";
$htaccess = "RewriteEngine On\r\n
RewriteBase /\r\n\r\n
RewriteRule ^(.*)" . $_POST ['erji'] . $_POST ['playc'] . "(.*)\.html$ $1/" . $_POST ['erji'] . "play\.php\?id=$2
RewriteRule ^(.*)" . $_POST ['erji'] . $_POST ['mulu'] . "([0-9,a-z,A-Z]*)\.html$ $1/" . $_POST ['erji'] . "channel\.php\?id=$2
RewriteRule ^(.*)" . $_POST ['erji'] . $_POST ['mulu'] . "([0-9,a-z,A-Z]*)_([0-9]+)\.html$ $1/" . $_POST ['erji'] . "channel\.php\?id=$2&pg=$3
RewriteRule ^(.*)" . $_POST ['erji'] . $_POST ['news'] . "([0-9,a-z,A-Z]*)-([0-9,a-z,A-Z]*)\.html$ $1/" . $_POST ['erji'] . "article\.php\?id=$2&aid=$3";

$httpd = "[ISAPI_Rewrite]\r\n
RepeatLimit 32\r\nRewriteRule ^(.*)" . $_POST ['erji'] . $_POST ['playc'] . "(.*)\.html$ $1/" . $_POST ['erji'] . "play\.php\?id=$2
RewriteRule ^(.*)" . $_POST ['erji'] . $_POST ['mulu'] . "([0-9,a-z,A-Z]*)\.html$ $1/" . $_POST ['erji'] . "channel\.php\?id=$2
RewriteRule ^(.*)" . $_POST ['erji'] . $_POST ['mulu'] . "([0-9,a-z,A-Z]*)_([0-9]+)\.html$ $1/" . $_POST ['erji'] . "channel\.php\?id=$2&pg=$3
RewriteRule ^(.*)" . $_POST ['erji'] . $_POST ['news'] . "([0-9,a-z,A-Z]*)-([0-9,a-z,A-Z]*)\.html$ $1/" . $_POST ['erji'] . "article\.php\?id=$2&aid=$3";

	if (preg_match ( "/require|include|REQUEST|eval|system|fputs/i", $word )) {
		echo "<script>alert('含有非法字符！');location.href='?id=man';</script>";
		exit ();
	} else {

		file_put_contents("../include/config.php",$word);
		file_put_contents("../.htaccess",$htaccess);
		file_put_contents("../httpd.ini",$httpd);
		file_put_contents("../include/install_lock.txt",'viviok');
		echo base64_decode ( 'PHNjcmlwdD5hbGVydCgndml2aczhyr7E+izQ3rjEs8m5pqOhJyk7d2luZG93LmxvY2F0aW9uPSdh
ZG1pbl9tYWluLnBocD9pZD1tYW4nOzwvc2NyaXB0Pg==');
		exit ();
	}
}
?>