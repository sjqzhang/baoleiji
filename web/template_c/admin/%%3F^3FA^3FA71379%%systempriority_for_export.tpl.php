<?php /* Smarty version 2.6.18, created on 2014-07-01 13:12:27
         compiled from systempriority_for_export.tpl */ ?>
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<title>Audit<?php echo $this->_tpl_vars['language']['List']; ?>
</title>
<style type="text/css">
BODY {
	TEXT-ALIGN: center; MARGIN-TOP: 0px; FONT-SIZE: 12px
}
TD {
	FONT-SIZE: 12px
}
TH {
	BACKGROUND-COLOR: #d9ecfa
}
A {
	COLOR: #FFFFFF; TEXT-DECORATION: none
}
A:hover {
	COLOR: #00000; TEXT-DECORATION: underline
}
DIV {
	PADDING-BOTTOM: 0px; MARGIN: 1px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-SIZE: 12px; PADDING-TOP: 0px
}
FORM {
	MARGIN: 0px
}
INPUT {
	BORDER-BOTTOM: #6699cc 1px solid; BORDER-LEFT: #6699cc 1px solid; MARGIN: 1px 0px; FONT: 12px/1.3em Arial, Helvetica, sans-serif; BACKGROUND: #ffffff; COLOR: #006699; BORDER-TOP: #6699cc 1px solid; BORDER-RIGHT: #6699cc 1px solid
}
TEXTAREA {
	BORDER-BOTTOM: #6699cc 1px solid; BORDER-LEFT: #6699cc 1px solid; MARGIN: 1px 0px; FONT: 12px/1.3em Arial, Helvetica, sans-serif; BACKGROUND: #ffffff; COLOR: #006699; BORDER-TOP: #6699cc 1px solid; BORDER-RIGHT: #6699cc 1px solid
}
SELECT {
	BORDER-BOTTOM: #6699cc 1px solid; BORDER-LEFT: #6699cc 1px solid; MARGIN: 1px 0px; FONT: 12px/1.3em Arial, Helvetica, sans-serif; BACKGROUND: #ffffff; COLOR: #006699; BORDER-TOP: #6699cc 1px solid; BORDER-RIGHT: #6699cc 1px solid
}
#div_header {
	BORDER-BOTTOM: #799ae1 1px solid; BORDER-LEFT: #799ae1 1px solid; PADDING-BOTTOM: 0px; MARGIN-TOP: 2px; PADDING-LEFT: 0px; WIDTH: 98%; PADDING-RIGHT: 0px; BORDER-TOP: #799ae1 1px solid; BORDER-RIGHT: #799ae1 1px solid; PADDING-TOP: 0px
}
#div_main {
	BORDER-BOTTOM: #799ae1 1px solid; BORDER-LEFT: #799ae1 1px solid; PADDING-BOTTOM: 0px; MARGIN-TOP: 20px; PADDING-LEFT: 0px; WIDTH: 98%; PADDING-RIGHT: 0px; BORDER-TOP: #799ae1 1px solid; BORDER-RIGHT: #799ae1 1px solid; PADDING-TOP: 0px
}
.div_title_box {
	TEXT-ALIGN: center; BACKGROUND-COLOR: #799ae1; HEIGHT: 25px; COLOR: #ffffff; FONT-WEIGHT: bold
}
.div_content_box {
	BACKGROUND-COLOR: #cad7f7
}
.input_shorttext {
	WIDTH: 150px; HEIGHT: 20px
}
.div_content_box TD {
	BORDER-BOTTOM: white 1px solid; BORDER-LEFT: white 1px solid; COLOR: black; BORDER-TOP: white 1px solid; BORDER-RIGHT: white 1px solid
}
.div_content_box TH {
	BACKGROUND-IMAGE: url(../images/Th_Bg.gif); HEIGHT: 30px; FONT-SIZE: 12px
}
#guestbook_edit {
	
}
#guestbook_edit TEXTAREA {
	WIDTH: 500px; HEIGHT: 100px
}
#guestbook_reply TEXTAREA {
	WIDTH: 500px; HEIGHT: 100px
}
.main_title {
	PADDING-LEFT: 3px; COLOR: #ffffff; FONT-SIZE: 14px; FONT-WEIGHT: bold; PADDING-TOP: 5px
}
.main_content {
	BORDER-BOTTOM: #3a6ea7 1px solid; BORDER-LEFT: #3a6ea7 1px solid; PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; BORDER-RIGHT: #3a6ea7 1px solid; PADDING-TOP: 10px
}
.td_line {
	BORDER-BOTTOM: #adadad 1px dashed
}
.btn1 {
	BACKGROUND-IMAGE: url(../images/btn1.gif); BORDER-BOTTOM: 0px; BORDER-LEFT: 0px; WIDTH: 64px; HEIGHT: 24px; COLOR: #ffffff; FONT-SIZE: 12px; BORDER-TOP: 0px; BORDER-RIGHT: 0px
}
.btn2 {
	BACKGROUND-IMAGE: url(../images/btn2.gif); BORDER-BOTTOM: 0px; BORDER-LEFT: 0px; WIDTH: 125px; HEIGHT: 24px; COLOR: #ffffff; FONT-SIZE: 12px; BORDER-TOP: 0px; BORDER-RIGHT: 0px
}



*{ margin:0px; padding:0px; }
body{ font-size:12px; font-family:"宋体";}

.lj_hei a{text-decoration: none; color:#000000; }
.lj_hei a:visited{text-decoration: none; color:#000000;}
.lj_hei a:hover{text-decoration:;color:#000000;text-decoration: underline;}

.dlwb{ color:#FFFFFF; font-size:14px; font-weight:bold; margin-top:15px;}
.dlwb_01{ width:202px; height:32px; background-image:url(../images/wb_09.jpg);border:0px; line-height:32px; padding-left:40px; float:left;font-size:12px;}
.dlwb_02{ width:202px; height:32px; background-image:url(../images/wb_12.jpg);border:0px; line-height:32px; padding-left:40px; float:left;font-size:12px;}
.dlwb_03{ width:202px; height:32px; background-image:url(../images/wb_14.jpg);border:0px; line-height:32px; padding-left:40px; float:left;font-size:12px;}
.bq{ color:#FFFFFF; font-size:12px;  background-image:url(../images/an_09.jpg); padding-top:25px; }

.hui_bj{ background-image:url(../images/yw_44.jpg); background-repeat:repeat-x; height:42px;}
.zuo_bj{ background-image:url(../images/yw_41.jpg); background-repeat:repeat-y; }
.cj ul{ width:550px; margin:0 auto;}
.cj ul li{ width:110px; float:left; line-height:0px; padding:0px; margin:0px; display:inline;  list-style:none; color:#FFFFFF; font-weight:bold;font-size:14px;}
img{ border:0px;}
.cj_zi{ line-height:45px; float:left; padding-left:5px;}

.td5 a{width:53px; padding-left:5px; height:40px; padding-top:5px;   float:left; text-decoration: none; color:#ffffff; }
.td5 a:visited{width:53px; padding-left:5px; height:40px;padding-top:5px;      color:#ffffff;text-decoration: none;}
.td5 a:hover{width:53px; padding-left:5px; height:40px;padding-top:5px;         background-image: url(../images/yw_15.jpg); background-repeat:no-repeat; background-position:left;  float:left;  color:#ffffff; font-weight:bold;text-decoration: none;}
.td6 a{width:53px; padding-left:5px; height:40px;padding-top:5px;         background-image: url(../images/yw_15.jpg); background-repeat:no-repeat; background-position:left; float:left; color:#ffffff;text-decoration: none;}
.td6 a:visited{width:53px; padding-left:5px; height:40px;padding-top:5px;      color:#ffffff; font-weight:bold;text-decoration: none;}
.td6 a:hover{width:53px; padding-left:5px; height:40px;padding-top:5px;     background-image: url(../images/yw_15.jpg); background-repeat:no-repeat; background-position:left;  float:left; color:#ffffff;text-decoration: none;}

.bai{ color:#FFFFFF;}
.sy{ width:185px; height:110px; margin-top:10px; background-image:url(../images/yw_66.jpg); background-repeat:no-repeat;}
.bd{ color:#FFFFFF; font-size:14px;}
.anniu{ background-image:url(../images/yw_78.jpg); background-repeat:no-repeat; height:33px; background-position:center;  font-size:14px; font-weight:bold; padding-left:10px; cursor:'hand';}
.zcd01{height:25px; background-position:center; line-height:25px; padding-left:10px; color:#FFFFFF;}
.zcd{ background-image:url(../images/yw_81.jpg);background-repeat:no-repeat; height:25px; background-position:center; line-height:25px; padding-left:10px;color:#000000;}
.zcd A{ color:#000000;}
.menu{ width:600px; float:left;}
.menu ul li{ width:91px; height:28px; float:left; list-style:none; margin-top:12px; display:inline; line-height:28px; text-align:center; font-weight:bold; margin-right:5px;}
.td1{ background-image:url(../images/yw_48.jpg); color:#FFFFFF;}
.td2{ background-image:url(../images/yw_50.jpg);}
.ss{ background-image:url(../images/yw_72.jpg); background-repeat:repeat-x; border:1px solid #cccccc; height:41px;}
.wbk{ border:1px solid #52A1D4;}

.BBtable{ margin-top:10px; border:1px solid #417EB7; }
.BBtable th{ color:#FFFFFF; background-color:#7CB9F2; height:25px; line-height:25px; text-align:center; padding-left:5px; border-right:1px solid #ffffff;}
.BBtable td{ height:25px; line-height:25px; padding-left:5px;}
.th1{ background-color:#FFFFFF;}
.sz{ padding-left:5px; padding-top:2px; padding-right:5px; padding-bottom:2px; border:1px solid #0883C4;}
.sz1{ padding-left:5px; padding-top:2px; padding-right:5px; padding-bottom:2px; border:1px solid #cccccc; background-color:#0883C4; color:#FFFFFF;}

</style>

</head>

<body>


<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0" >
        <tr >
          
          <td height="35" bgcolor="#528AC7" class="main_title"><?php echo $this->_tpl_vars['language']['ReportManager']; ?>
——系统权限报表</td>         
          
        </tr>
      </table></td>
  </tr>

  <tr>
	<td class="main_content">
		<table bordercolor="white" cellspacing="1" cellpadding="5" border="0" width="100%"  class="BBtable">
					<tr>
					<th class="list_bg" >序号</TD>
					<?php if ($this->_tpl_vars['type'] == 'luser'): ?>
					 <th class="list_bg" >运维用户</TD>
					 <th class="list_bg" >别名</TD>
					 <?php elseif ($this->_tpl_vars['type'] == 'lgroup'): ?>
					  <th class="list_bg" ><?php echo $this->_tpl_vars['language']['UserGroup']; ?>
</TD>
					 <?php endif; ?>
					<?php if ($this->_tpl_vars['type'] == 'luser'): ?><th class="list_bg" >运维组</TD><?php endif; ?>
                    <th class="list_bg" ><?php echo $this->_tpl_vars['language']['device']; ?>
IP</TD>
                    <th class="list_bg" ><?php echo $this->_tpl_vars['language']['System']; ?>
<?php echo $this->_tpl_vars['language']['User']; ?>
</TD>
                    <th class="list_bg" ><?php echo $this->_tpl_vars['language']['Black']; ?>
</TD>
					<th class="list_bg" ><?php echo $this->_tpl_vars['language']['WeekTimepolicy']; ?>
</TD>
					<th class="list_bg" >来源IP</TD>
					<th class="list_bg" >自动为超级用户</TD>
					<th class="list_bg" >SYSLOG告警</TD>					
					<th class="list_bg" >Mail告警</TD>
					<th class="list_bg" >账号锁定</TD>
					<?php if ($this->_tpl_vars['type'] == 'user'): ?><th class="list_bg" ><?php echo $this->_tpl_vars['language']['Logintime']; ?>
</TD><?php endif; ?>
					<th class="list_bg" >协议</TD>
					</tr>
					<?php unset($this->_sections['t']);
$this->_sections['t']['name'] = 't';
$this->_sections['t']['loop'] = is_array($_loop=$this->_tpl_vars['alldev']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['t']['show'] = true;
$this->_sections['t']['max'] = $this->_sections['t']['loop'];
$this->_sections['t']['step'] = 1;
$this->_sections['t']['start'] = $this->_sections['t']['step'] > 0 ? 0 : $this->_sections['t']['loop']-1;
if ($this->_sections['t']['show']) {
    $this->_sections['t']['total'] = $this->_sections['t']['loop'];
    if ($this->_sections['t']['total'] == 0)
        $this->_sections['t']['show'] = false;
} else
    $this->_sections['t']['total'] = 0;
if ($this->_sections['t']['show']):

            for ($this->_sections['t']['index'] = $this->_sections['t']['start'], $this->_sections['t']['iteration'] = 1;
                 $this->_sections['t']['iteration'] <= $this->_sections['t']['total'];
                 $this->_sections['t']['index'] += $this->_sections['t']['step'], $this->_sections['t']['iteration']++):
$this->_sections['t']['rownum'] = $this->_sections['t']['iteration'];
$this->_sections['t']['index_prev'] = $this->_sections['t']['index'] - $this->_sections['t']['step'];
$this->_sections['t']['index_next'] = $this->_sections['t']['index'] + $this->_sections['t']['step'];
$this->_sections['t']['first']      = ($this->_sections['t']['iteration'] == 1);
$this->_sections['t']['last']       = ($this->_sections['t']['iteration'] == $this->_sections['t']['total']);
?>
					<tr <?php if ($this->_sections['t']['index'] % 2 == 0): ?>bgcolor="f7f7f7"<?php endif; ?>>
						<td><?php echo $this->_sections['t']['index']+1; ?>
</td>
						<?php if ($this->_tpl_vars['type'] == 'luser'): ?>
						<td><?php echo $this->_tpl_vars['alldev'][$this->_sections['t']['index']]['webuser']; ?>
</td>
						<td><?php echo $this->_tpl_vars['alldev'][$this->_sections['t']['index']]['webrealname']; ?>
</td>
						<?php elseif ($this->_tpl_vars['type'] == 'lgroup'): ?>
						<td><?php echo $this->_tpl_vars['alldev'][$this->_sections['t']['index']]['gname']; ?>
</td>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['type'] == 'luser'): ?><td><?php echo $this->_tpl_vars['alldev'][$this->_sections['t']['index']]['usergroup']; ?>
</td><?php endif; ?>
						<td><?php echo $this->_tpl_vars['alldev'][$this->_sections['t']['index']]['device_ip']; ?>
(<?php echo $this->_tpl_vars['alldev'][$this->_sections['t']['index']]['hostname']; ?>
)</td>
						<td><?php echo $this->_tpl_vars['alldev'][$this->_sections['t']['index']]['username']; ?>
</td>
						<td><?php echo $this->_tpl_vars['alldev'][$this->_sections['t']['index']]['forbidden_commands_groups']; ?>
</td>
						<td><?php echo $this->_tpl_vars['alldev'][$this->_sections['t']['index']]['policyname']; ?>
</td>
						<td><?php echo $this->_tpl_vars['alldev'][$this->_sections['t']['index']]['sourceip']; ?>
</td>
						<td><?php if ($this->_tpl_vars['alldev'][$this->_sections['t']['index']]['autosu']): ?>是<?php else: ?>否<?php endif; ?></td>
						<td><?php if ($this->_tpl_vars['alldev'][$this->_sections['t']['index']]['syslogalert']): ?>是<?php else: ?>否<?php endif; ?></td>
						<td><?php if ($this->_tpl_vars['alldev'][$this->_sections['t']['index']]['mailalert']): ?>是<?php else: ?>否<?php endif; ?></td>
						<td><?php if ($this->_tpl_vars['alldev'][$this->_sections['t']['index']]['loginlock']): ?>是<?php else: ?>否<?php endif; ?></td>
						<?php if ($this->_tpl_vars['type'] == 'user'): ?><td><?php echo $this->_tpl_vars['alldev'][$this->_sections['t']['index']]['lastdate']; ?>
</td><?php endif; ?>
						<td><?php echo $this->_tpl_vars['alldev'][$this->_sections['t']['index']]['login_method']; ?>
</td>
					</tr>
					<?php endfor; endif; ?>
					
				</table>
	</td>
  </tr>
</table>
</body>
</html>

