<?
/*--------------------------
vivi小偷网站系统
QQ:996948519
---------------------------*/
error_reporting(0);
require_once('data.php');
require_once('../include/common.inc.php');
require_once('../include/config.php');
if ($_COOKIE ['x_Cookie'] != $adminname or $_COOKIE ['y_Cookie'] != $password) {
	echo"<script>location.href='index.php';</script>";
	exit;
}
$edit = !empty( $_GET['e'] ) ? trim( $_GET['e'] ) : "";
$act = !empty( $_POST['action'] ) ? trim( $_POST['action'] ) : "";
$filen = !empty( $_POST['filename'] ) ? trim( $_POST['filename'] ) : "";
$contents = !empty( $_POST['content'] ) ? trim( $_POST['content'] ) : "";
$temp = "../templets/".$template."/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>模板管理面版</title>
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
if (!empty($filen))
{
	$filen = str_replace('.tpl','',$filen).".tpl";
	$filen = str_replace('..','',$filen);
	$filen = str_replace('/','',strip_tags($filen));
	if (file_exists($temp.$filen))
	{
		file_put_contents($temp.$filen,get_magic($contents));
		echo "<script>alert('vivi提示您,修改成功！');location.href='template.php';</script>";
		exit;
	}
	else
	{
		echo"<script>alert('编辑失败，没有找到模板！');window.location='template.php';</script>";
		exit;
	}
}
?>
<div class="right">
   <? include_once "welcome.php";?>
  <div class="right_main">
<?
if (empty($edit))
{
?>
      <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
        <tr class="tb_head">
          <td colspan="5"><h2>模板管理：</h2></td>
        </tr>
        <tr align=center class="firstalt">
          <td width="30%" >文件名</td>
          <td width="30%" >文件描述</td>
          <td width="20%" nowrap>修改时间</td>
          <td width="20%" nowrap>操作</td>
        </tr>
        <tr align=center class="firstalt">
          <td ><img src="img/top13.gif"> index.tpl</td>
          <td >首页模板</td>
          <td ><? echo filedate($temp."index.tpl");?></td>
          <td style="text-align:center"><a href="?e=index.tpl">编辑</a></td>
        </tr>
        <tr align=center class="firstalt">
          <td ><img src="img/top13.gif"> header.tpl</td>
          <td >全站顶部模板</td>
          <td ><? echo filedate($temp."header.tpl");?></td>
          <td style="text-align:center"><a href="?e=header.tpl">编辑</a></td>
        </tr>
        <tr align=center class="firstalt">
          <td ><img src="img/top13.gif"> footer.tpl</td>
          <td >全站底部模板</td>
          <td ><? echo filedate($temp."footer.tpl");?></td>
          <td style="text-align:center"><a href="?e=footer.tpl">编辑</a></td>
        </tr>
        <tr align=center class="firstalt">
          <td ><img src="img/top13.gif"> channel.tpl</td>
          <td >列表页模板</td>
          <td ><? echo filedate($temp."channel.tpl");?></td>
          <td style="text-align:center"><a href="?e=channel.tpl">编辑</a></td>
        </tr>
                <tr align=center class="firstalt">
          <td ><img src="img/top13.gif"> article.tpl</td>
          <td >内容页模板</td>
          <td ><? echo filedate($temp."article.tpl");?></td>
          <td style="text-align:center"><a href="?e=article.tpl">编辑</a></td>
        </tr>
		<tr align=center class="firstalt">
          <td ><img src="img/top13.gif"> play.tpl</td>
          <td >播放页模板</td>
          <td ><? echo filedate($temp."play.tpl");?></td>
          <td style="text-align:center"><a href="?e=play.tpl">编辑</a></td>
        </tr>
		 <tr align=center class="firstalt">
          <td ><img src="img/top13.gif"> search.tpl</td>
          <td >搜索页模板</td>
          <td ><? echo filedate($temp."search.tpl");?></td>
          <td style="text-align:center"><a href="?e=search.tpl">编辑</a></td>
        </tr>
      </table>
<?
}
else
{
$edit = str_replace('.tpl','',$edit).".tpl";
$edit = str_replace('..','',$edit);
$edit = str_replace('/','',strip_tags($edit));
if (file_exists($temp.$edit))
{
$content = file_get_contents($temp.$edit);
?>
  <form name="update" action="template.php" method="post">
	<table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
        <tr class="tb_head"><td colspan="2"><h2>模板编辑：<input name="filename" type="text" value="<? echo $edit; ?>">（不允许用 “..” 形式的路径）</h2></td></tr>
        <tr align=center><td ><textarea name="content" style="width:100%;height:450px"><? echo $content; ?></textarea></td></tr>
        <tr align=center><td ><input class="bginput" type="submit" name="submit" value=" 提交 " > <input class="bginput" type="reset" name="Input" value=" 重置 " ></td></tr>
      </table> 
  </form> 
<?
}
else
{
		echo"<script>alert('读取失败，请检查模板是否存在！');window.location='template.php';</script>";
exit;
}
}
?>
  </div>
</div>
<? include "footer.php"; ?>
</body>
</html>