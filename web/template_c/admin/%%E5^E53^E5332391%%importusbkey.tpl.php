<?php /* Smarty version 2.6.18, created on 2014-05-15 16:03:39
         compiled from importusbkey.tpl */ ?>
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title><?php echo $this->_tpl_vars['site_title']; ?>
</title>
<meta name="generator" content="editplus">
<meta name="author" content="nuttycoder">
<link href="<?php echo $this->_tpl_vars['template_root']; ?>
/all_purpose_style.css" rel="stylesheet" type="text/css" />
<script>
function resto()
{
 if(document.getElementById('filesql').value=='' ){
   alert("<?php echo $this->_tpl_vars['language']['UploadFile']; ?>
");
   return false;
  }
  return true;
}
</script>
</head>

<body>
<style type="text/css">
a {
    color: #003499;
    text-decoration: none;
} 
a:hover {
    color: #000000;
    text-decoration: underline;
}
</style>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td valign="middle" class="hui_bj"><div class="menu">
<ul>

	<li class="me_a"><img src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/an1.jpg" align="absmiddle"/><a href="admin.php?controller=admin_backup">USBKEY列表</a><img src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/an3.jpg" align="absmiddle"/></li>
</ul><span class="back_img"><A href="admin.php?controller=admin_pro&action=dev_index&gid=<?php echo $this->_tpl_vars['gid']; ?>
&back=1"><IMG src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/back1.png" 
      width="80" height="30" border="0"></A></span>
</div></td></tr>
  <tr>
	<td class=""><table width="100%" border="0" cellspacing="0" cellpadding="0"  class="BBtable">
              <form action="admin.php?controller=admin_member&action=doimportusbkey" method="post" enctype="multipart/form-data" >
			  <tr><th colspan="3" class="list_bg">导入USBKEY</th></tr>
		<tr >
			<td width="10%" height="16" align="center" ><b>文件</b></td>
			<td align="left" width="30%">
			<input type="file" name="usbkey" />
			</td>
		</tr>	
		<tr >
			<td  align="center" colspan=2>
			<input type="submit" name="submit"  value="提交" class="an_02">
			</td>
		</tr>		
		
	</form>

        </table>
	</td>
  </tr> 
</table>
</body>
</html>

