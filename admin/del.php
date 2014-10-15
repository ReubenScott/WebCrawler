<?
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
require_once('data.php');
require_once('../include/config.php');
require_once('../include/common.inc.php');
if($_COOKIE['x_Cookie']!=$adminname or $_COOKIE['y_Cookie']!=$password){
	echo"<script>location.href='index.php';</script>";
	exit;
}
$mulud=str_replace("/","",$mulu);
$newsd=str_replace("/","",$news); 
$playd=str_replace("/","",$playc); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link href="css/jquery.css" rel="stylesheet" type="text/css">
<link href="css/base.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/sqm.js"></script>
</head>
<body>
<?
if($_GET['id']=='del'){
	?>
<div class="right">
   <? include "welcome.php";?>
  <div class="right_main">

      <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
        <tr class="tb_head">
          <td colspan="5"><h2>清除缓存：</h2></td>
        </tr>
        <tr align=center class="firstalt">
          <td width="30%" >缓存说明</td>
          <td width="30%" >缓存目录</td>
          <td width="20%" nowrap>缓存文件个数</td>
          <td width="20%" nowrap>操作</td>
        </tr>
        <tr align=center class="firstalt">
          <td > 首页缓存</td>
          <td >../cache/index.html</td>
          <td style="color: #FF0000;"><? if(file_exists("../cache/index.html")){echo "1";}else{echo "空";}?></td>
          <td style="text-align:center"><input type="button" class="bginput" style="height:19px; font-size:12px" value="清除" onClick="javascript:location.href='?action=delfile&del=index';" name="Input"></td>
        </tr>
        <tr align=center class="firstalt">
          <td > 列表页缓存</td>
          <td ><? echo "../cache/".$mulu;?></td>
          <td style="color: #FF0000;"><? $l=count(scandir("../cache/".$mulud))-2; if ($l < 0){echo "空";}else{echo $l;}?></td>
          <td style="text-align:center"><input type="button" class="bginput" style="height:19px; font-size:12px" value="清除" onClick="javascript:location.href='?action=delfile&del=<?=$mulud;?>';" name="Input"></td>
        </tr>
        <tr align=center class="firstalt">
          <td > 内容页缓存</td>
          <td ><? echo "../cache/".$news;?></td>
          <td style="color: #FF0000;"><? $nr=count(scandir("../cache/".$newsd))-2; if ($nr < 0){echo "空";}else{echo $nr;}?></td>
          <td style="text-align:center"><input type="button" class="bginput" style="height:19px; font-size:12px" value="清除" onClick="javascript:location.href='?action=delfile&del=<?=$newsd;?>';" name="Input"></td>
        </tr>
		<tr align=center class="firstalt">
          <td > 播放页缓存</td>
          <td ><?="../cache/".$playc?></td>
          <td style="color: #FF0000;"><? $nr=count(scandir("../cache/".$playd))-2; if ($nr < 0){echo "空";}else{echo $nr;}?></td>
          <td style="text-align:center"><input type="button" class="bginput" style="height:19px; font-size:12px" value="清除" onClick="javascript:location.href='?action=delfile&del=<?=$playd?>';" name="Input"></td>
        </tr>
		<tr align=center class="firstalt">
          <td > 图片缓存</td>
          <td ><?="../cache/img/"?></td>
          <td style="color: #FF0000;"><? $nr=count(scandir("../cache/img"))-2; if ($nr < 0){echo "空";}else{echo $nr;}?></td>
          <td style="text-align:center"><input type="button" class="bginput" style="height:19px; font-size:12px" value="清除" onClick="javascript:location.href='?action=delfile&del=img';" name="Input"></td>
        </tr>
		<tr align=center class="firstalt">
          <td > 蜘蛛记录</td>
          <td >../zhizhu.txt</td>
          <td style="color: #FF0000;"><? if(file_exists("../zhizhu.txt")){echo "1";}else{echo "空";}?></td>
          <td style="text-align:center"><input type="button" class="bginput" style="height:19px; font-size:12px" value="清除" onClick="javascript:location.href='?action=delfile&del=zhizhu';" name="Input"></td>
        </tr>
		<tr align=center class="firstalt">
          <td >一键清除全部缓存</td>
          <td >../cache/</td>
          <td style="color: #FF0000;"><? $nr=count(scandir("../cache/"))-2; if ($nr < 0){echo "空";}else{echo $nr;}?></td>
          <td style="text-align:center"><input type="button" class="bginput" style="height:19px; font-size:12px" value="清除" onClick="javascript:location.href='?action=delfile&del=all';" name="Input"></td>
        </tr>
      </table>
<?
}elseif ($_GET['action']=='delfile'){
	echo "请稍候，正在清除缓存...<br />";

if($_GET['del']=='index')
 {
@unlink("../cache/index.html");
}
 elseif($_GET['del']==kw){
@unlink("../include/kw.txt");
}elseif($_GET['del']=='zhizhu')
 {
@unlink("../zhizhu.txt");
}elseif($_GET['del']==$mulud)
 {
@removedir("../cache/".$mulud);
}
 elseif($_GET['del']==$newsd)
 {
@removedir("../cache/".$newsd);
}elseif($_GET['del']==$playd)
 {
@removedir("../cache/".$playd);
}
elseif($_GET['del']=='img')
 {
@removedir("../cache/img/");
}
 elseif($_GET['del']=='all'){
@removedir("../cache/");
@unlink("../zhizhu.txt");
}
echo "<script>alert('vivi提示您,清除成功！');location.href='?id=del';</script>";
}
?>
  </div>
</div>
<? include "footer.php"; ?>
</body>
</html>