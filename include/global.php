<?php
function get($url, $cj, $timeout = 5, $referer = "" ){
switch($cj){
	case "curl_init":
	$ch = curl_init($url);
	$user_agent = "Baiduspider+(+http://www.baidu.com/search/spider.htm)";
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_REFERER, "http://www.baidu.com");
	curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
	break;
	case "file_get_contents":
	for($i=0;$i<3;$i++){
    $data = @file_get_contents($url);
    if($data) break;
	}
	return $data;
	break;
	case "fsock":
	$bits = @parse_url( $url );
	if ( !$bits[host] )
	{
		return "";
	}
	if ( $bits[port] )
	{
		$port = intval( $bits[port] );
	}
	else
	{
		$port = $bits[scheme] == "https" ? 443 : 80;
	}
	$portq = $port == 80 ? "" : ":{$port}";
	$stime = time( );
	$fp = @fsockopen( $bits[host], $port, $errno, $errstr, $timeout );
	if ( !$fp )
	{
		return "";
	}
	else
	{
		$stime = time( ) - $stime;
		$timeout = $timeout - $stime;
		if ( $timeout < 1 )
		{
$timeout = 1;
		}
		stream_set_timeout( $fp, $timeout );
		if ( !$referer )
		{
$referer = $bits[scheme]."://".$bits[host]."/";
		}
		$path = $bits[path] ? $bits[path] : "/";
		if ( $bits[query] )
		{
$path .= "?".$bits[query];
		}
		$out = "GET {$path} HTTP/1.0\r\n";
		$out .= "Host: {$bits[host]}{$portq}\r\n";
		$out .= "User-Agent: Baiduspider+(+http://www.baidu.com/search/spider.htm)\r\n";
		$out .= "Accept: */*\r\n";
		$out .= "Accept-Language: zh-cn\r\n";
		$out .= "Accept-Encoding: identity\r\n";
		$out .= "Referer: http://www.baidu.com\r\n";
		$out .= "Connection: Close\r\n\r\n";
		fputs( $fp, $out );
		$data = "";
		$inHeaders = TRUE;
		while ( $line = @fgets( $fp, 2048 ) )
		{
if ( $inHeaders )
{
	$line = trim( $line );
	if ( empty( $line ) )
	{
		$inHeaders = FALSE;
	}
	continue;
}
$data .= $line;
		}
		fclose( $fp );
		return $data;
	}
	case "pfsock":
	$bits = @parse_url ( $url );
	if (! $bits [host]) {
		return "";
	}
	if ($bits [port]) {
		$port = intval ( $bits [port] );
	} else {
		$port = $bits [scheme] == "https" ? 443 : 80;
	}
	$portq = $port == 80 ? "" : ":{$port}";
	$stime = time ();
	$fp = @pfsockopen ( $bits [host], $port, $errno, $errstr, $timeout );
	if (! $fp) {
		return "";
	} else {
		$stime = time () - $stime;
		$timeout = $timeout - $stime;
		if ($timeout < 1) {
			$timeout = 1;
		}
		stream_set_timeout ( $fp, $timeout );
		if (! $referer) {
			$referer = $bits [scheme] . "://" . $bits [host] . "/";
		}
		$path = $bits [path] ? $bits [path] : "/";
		if ($bits [query]) {
			$path .= "?" . $bits [query];
		}
		$out = "GET {$path} HTTP/1.0\r\n";
		$out .= "Host: {$bits[host]}{$portq}\r\n";
		$out .= "User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)\r\n";
		$out .= "Accept: *//*\r\n";
		$out .= "Accept-Language: zh-cn\r\n";
		$out .= "Accept-Encoding: identity\r\n";
		$out .= "Referer: {$referer}\r\n";
		$out .= "Connection: Close\r\n\r\n";
		fputs ( $fp, $out );
		$data = "";
		$inHeaders = TRUE;
		while ( $line = @fgets ( $fp, 2048 ) ) {
			if ($inHeaders) {
				$line = trim ( $line );
				if (empty ( $line )) {
					$inHeaders = FALSE;
				}
				continue;
			}
			$data .= $line;
		}
		fclose ( $fp );
	}
	return $data;
	break;
}
}

?>