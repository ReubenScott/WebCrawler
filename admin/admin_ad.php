<?
/*--------------------------
vivi小偷网站系统
qq:996948519
---------------------------*/
require_once('data.php');
require_once('../include/common.inc.php');
if($_COOKIE['x_Cookie']!=$adminname or $_COOKIE['y_Cookie']!=$password){
	echo"<script>location.href='index.php';</script>";
	exit;
}
?>
<html>
<head>
<title>vivi网站后台管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
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
if($_GET['id']=='ad'){
?>
	<div class="right">
  <? include "welcome.php"; ?>
  <div class="right_main">
<table width="98%" cellspacing="1" cellpadding="4" border="0" class="tableoutline"><tbody><tr class="tb_head">  <td><h2>操作导航：</h2></td></tr><tr class="firstalt">  <td>
<ul class="do_nav">
<li><a onClick="tab(1,6);" href="javascript:">首页广告</a></li>
<li><a onClick="tab(2,6);" href="javascript:">列表页广告</a></li>
<li><a onClick="tab(3,6);" href="javascript:">内容页广告</a></li> 
 <li><a onClick="tab(4,6);" href="javascript:">播放页广告</a></li> 
  <li><a onClick="tab(5,6);" href="javascript:">全站广告</a></li>
  </ul></td></tr>    </tbody></table>
	
    <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
	<form action="?action=add" method="post">
      <tbody id="config1">
<tr  class="tb_head">
          <td colspan="2"><h2>首页广告：</h2></td>
        </tr>
		<tr class="firstalt">
          <td width="200"><b>首页中部广告</b><br><font color="#666666">(960*n)</font></td>
		  <input type="hidden" name="js_file" value="index.js" />
          <td ><textarea name="js1" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/index.js')?></textarea>
          </td>
        </tr>
        <tr class="firstalt">
          <td width="200"><b>首页底部广告</b><br><font color="#666666">(960*n)</font></td>
		  <input type="hidden" name="js_file" value="index_down.js" />
          <td ><textarea name="js2" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/index_down.js')?></textarea>
          </td>
        </tr>
</tbody>

      <tbody id="config2" style="display:none">
<tr  class="tb_head">
          <td colspan="2"><h2>列表页广告：</h2></td>
        </tr>
<tr class="firstalt">
          <td width="200"><b>列表页底部广告</b><br><font color="#666666">(960*N)</font></td>
		  <input type="hidden" name="js_file" value="list_down.js" />
          <td ><textarea name="js3" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/list_down.js')?></textarea>
          </td>
        </tr>
<tr class="firstalt">
          <td width="200"><b>列表页右侧广告</b><br><font color="#666666">(200*200)</font></td>
		  <input type="hidden" name="js_file" value="list_r.js" />
          <td ><textarea name="js4" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/list_r.js')?></textarea>
          </td>
        </tr>
<tr class="firstalt">
          <td width="200"><b>搜索页右侧广告</b><br><font color="#666666">(220*N)</font></td>
		  <input type="hidden" name="js_file" value="s_r.js" />
          <td ><textarea name="js16" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/s_r.js')?></textarea>
          </td>
        </tr>
</tbody>

<tbody id="config3" style="display:none">
<tr  class="tb_head">
          <td colspan="2"><h2>内页广告：</h2></td>
        </tr>
        <tr class="firstalt">
          <td width="200"><b>内容页左侧广告</b><br><font color="#666666">(410*N)</font></td>
		  <input type="hidden" name="js_file" value="html_left.js" />
          <td ><textarea name="js5" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/html_left.js')?></textarea>
          </td>
        </tr>
		<tr class="firstalt">
          <td width="200"><b>内容页右侧广告</b><br><font color="#666666">(300*300)</font></td>
		  <input type="hidden" name="js_file" value="html_right.js" />
          <td ><textarea name="js6" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/html_right.js')?></textarea>
          </td>
        </tr>
	<tr class="firstalt">
          <td width="200"><b>内容页底部广告</b><br><font color="#666666">(960*N)</font></td>
		  <input type="hidden" name="js_file" value="html_down.js" />
          <td ><textarea name="js7" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/html_down.js')?></textarea>
          </td>
        </tr>

</tbody>
<tbody id="config4" style="display:none">
<tr  class="tb_head">
          <td colspan="2"><h2>播放页广告：</h2></td>
        </tr>
        <tr class="firstalt">
          <td width="200"><b>右侧广告1</b><br><font color="#666666">(300*250)</font></td>
		  <input type="hidden" name="js_file" value="p_r1.js" />
          <td ><textarea name="js12" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/p_r1.js')?></textarea>
          </td>
        </tr>
		<tr class="firstalt">
          <td width="200"><b>右侧广告2</b><br><font color="#666666">(300*250)</font></td>
		  <input type="hidden" name="js_file" value="p_r2.js" />
          <td ><textarea name="js13" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/p_r2.js')?></textarea>
          </td>
        </tr>
	<tr class="firstalt">
          <td width="200"><b>中部广告</b><br><font color="#666666">(960*N)</font></td>
		  <input type="hidden" name="js_file" value="p_c.js" />
          <td ><textarea name="js14" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/p_c.js')?></textarea>
          </td>
        </tr>
<tr class="firstalt">
          <td width="200"><b>影片加载中广告</b><br><font color="#666666">(400*250)</font></td>
		  <input type="hidden" name="js_file" value="zz.js" />
          <td ><textarea name="js15" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/playad.js')?></textarea>
          </td>
        </tr>
</tbody>
<tbody id="config5" style="display:none">
<tr  class="tb_head">
          <td colspan="2"><h2>全站广告：</h2></td>
        </tr>
        <tr class="firstalt">
          <td width="200"><b>顶部广告</b><br><font color="#666666">(720*N)</font></td>
		  <input type="hidden" name="js_file" value="top.js" />
          <td ><textarea name="js8" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/top.js')?></textarea>
          </td>
        </tr>
		<tr class="firstalt">
          <td width="200"><b>导航下广告</b><br><font color="#666666">(960*N)</font></td>
		  <input type="hidden" name="js_file" value="dh.js" />
          <td ><textarea name="js9" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/dh.js')?></textarea>
          </td>
        </tr>
	<tr class="firstalt">
          <td width="200"><b>漂浮广告</b><br><font color="#666666">(N*N)</font></td>
		  <input type="hidden" name="js_file" value="piaofu.js" />
          <td ><textarea name="js10" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/piaofu.js')?></textarea>
          </td>
        </tr>
<tr class="firstalt">
          <td width="200"><b>分享代码</b><br><font color="#666666">(N*N)</font></td>
		  <input type="hidden" name="js_file" value="share.js" />
          <td ><textarea name="js11" cols="80" style="height:120px"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" ><?=file_get_contents('../js/share.js')?></textarea>
          </td>
        </tr>
</tbody>
<tr class="firstalt">
          <td colspan="2" align="center"><input type="hidden" name="action" value="setting">
            <input class="bginput" type="submit" name="submit" value=" 提交 " >
            <input class="bginput" type="reset" name="Input" value=" 重置 " >
          </td>
        </tr>
      </form>
    </table>

  </div>
</div>
<? include "footer.php"; ?>
</body>
</html>

<?
}elseif ($_GET['action']=="add"){

file_put_contents('../js/index.js',get_magic($_POST['js1']));
file_put_contents('../js/index_down.js',get_magic($_POST['js2']));
file_put_contents('../js/list_down.js',get_magic($_POST['js3']));
file_put_contents('../js/list_r.js',get_magic($_POST['js4']));
file_put_contents('../js/html_left.js',get_magic($_POST['js5']));
file_put_contents('../js/html_right.js',get_magic($_POST['js6']));
file_put_contents('../js/html_down.js',get_magic($_POST['js7']));
file_put_contents('../js/top.js',get_magic($_POST['js8']));
file_put_contents('../js/dh.js',get_magic($_POST['js9']));
file_put_contents('../js/piaofu.js',get_magic($_POST['js10']));
file_put_contents('../js/share.js',get_magic($_POST['js11']));
file_put_contents('../js/p_r1.js',get_magic($_POST['js12']));
file_put_contents('../js/p_r2.js',get_magic($_POST['js13']));
file_put_contents('../js/p_c.js',get_magic($_POST['js14']));
file_put_contents('../js/playad.js',get_magic($_POST['js15']));
file_put_contents('../js/s_r.js',get_magic($_POST['js16']));

	echo "<script>alert('vivi提示您,修改成功！');location.href='?id=ad';</script>";
}
?>