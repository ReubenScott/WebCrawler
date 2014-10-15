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
<title>帐户管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link href="css/jquery.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/sqm.js"></script>
<script>
function chk(){
	if(form1.adminname.value==''){
		alert('管理员账号不能为空');
		return false;
	}
	if(form1.password.value=='' || form1.password1.value==''){
		alert('密码不能为空');
		return false;
	}
	if(form1.password.value!=form1.password1.value){
		alert('2次输入的密码不一致');
		return false;
}
}
</script>
</head>
<body> 
<?
$id=$_GET['id'];
if($id=='edit'){
	
?>

<div class="right">
  <? include "welcome.php"; ?>
  <div class="right_main">
  
  
  <form action="?id=save" name="form1"  method="post" onsubmit="return chk()">
    <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">  
        <tr nowrap  class="tb_head">
          <td colspan="2"><h2>修改密码：</h2></td>
        </tr>
        <tr nowrap class="firstalt">
          <td width="260"><b>用户名</b><br><font color="#666666">不修改，请保留</font></td>
          <td><input  type="text" id="adminname" name="adminname" size="33" value="<?=$adminname; ?>"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" >
          </td>
        </tr>
		<tr nowrap class="firstalt">
          <td width="260"><b>新密码</b><br><font color="#666666">输入新的密码</font></td>
          <td><input  type="password" id="password" name="password" size="37"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" >
          </td>
        </tr>
        <tr nowrap class="firstalt">
          <td width="260"><b>重复新密码</b><br><font color="#666666">重复输入新的密码</font></td>
          <td><input  type="password" id="password1" name="password1" size="37"onFocus="this.style.borderColor='#00CC00'" onBlur="this.style.borderColor='#dcdcdc'" >
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
</body>
</html>

<?
}elseif ($id=='save'){
	$con='<?'."\r\n".'$adminname='.'"'.$_POST['adminname'].'"'.";\r\n".'$password='.'"'.md5($_POST['password1']).'"'.";\r\n?>";
	if(preg_match("/{|}|fputs|fopen/i", $con)){   
    echo"<script>alert('含有非法字符！');location.href='?id=edit';</script>";
}   
else{
	$fp=fopen("data.php","w");
	fwrite($fp,$con);
	fclose($fp);
	echo base64_decode ( 'PHNjcmlwdD5hbGVydCgndml2aczhyr7E+izQ3rjEs8m5pqOhJyk7d2luZG93LmxvY2F0aW9uPSdh
ZG1pbl9wYXNzLnBocD9pZD1lZGl0Jzs8L3NjcmlwdD4=');
}
}
?>

