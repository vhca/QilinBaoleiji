<?php /* Smarty version 3.1.27, created on 2017-05-19 11:28:45
         compiled from "/opt/freesvr/web/htdocs/freesvr/audit/template/admin/resource_group_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:739861883591e666d924e50_13895043%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c966e56312826642abff1fc4004af041f3d18c31' => 
    array (
      0 => '/opt/freesvr/web/htdocs/freesvr/audit/template/admin/resource_group_edit.tpl',
      1 => 1485105638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '739861883591e666d924e50_13895043',
  'variables' => 
  array (
    'title' => 0,
    'template_root' => 0,
    'ginfo' => 0,
    'ip' => 0,
    'hostname' => 0,
    'username' => 0,
    'allmethod' => 0,
    'lm' => 0,
    'allmem' => 0,
    'resource' => 0,
    'res2' => 0,
    'res' => 0,
    'language' => 0,
    'usergroup' => 0,
    'id' => 0,
    'sessionlgroup' => 0,
    'sessionluser' => 0,
    '_config' => 0,
    'changelevelstr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591e666da8e589_22031842',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591e666da8e589_22031842')) {
function content_591e666da8e589_22031842 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '739861883591e666d924e50_13895043';
?>
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="generator" content="editplus">
<meta name="author" content="nuttycoder">
<link href="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/all_purpose_style.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="./template/admin/cssjs/global.functions.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/cssjs/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/cssjs/_ajaxdtree.js"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/cssjs/dtree.css" rel="stylesheet" type="text/css" />
</head>
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
<?php echo '<script'; ?>
 type="text/javascript">

<?php echo '</script'; ?>
>
<body>


	<table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr><td valign="middle" class="hui_bj"><div class="menu">
<ul>
    <li class="me_a"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an1.jpg" align="absmiddle"/><a href="admin.php?controller=admin_pro&action=resource_group">系统用户组</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an3.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_app&action=app_group">应用用户组</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_pro&action=dev_priority_search">系统权限</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an33.jpg" align="absmiddle"/></li>
    <li class="me_b"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_pro&action=app_priority_search">应用权限</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an33.jpg" align="absmiddle"/></li>
</ul><span class="back_img"><A href="admin.php?controller=admin_pro&action=resource_group&back=1"><IMG src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/back1.png" 
      width="80" height="30" border="0"></A></span>
</div></td></tr>
 <style>
.ul{list-style-type:none; margin:0;width:100%; }
.ul li{ width:80px; float:left;}
</style>

  <tr>
	<td class="">

        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          
 <TR>
<TD >
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="main_content">
  <tr>
   <td >	
	<form name="f1" method=post action="admin.php?controller=admin_pro&action=resource_group_edit&id=<?php echo $_smarty_tpl->tpl_vars['ginfo']->value['id'];?>
"  enctype="multipart/form-data" >
		<?php echo $_smarty_tpl->getSubTemplate ("select_sgroup_ajax.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		&nbsp;&nbsp;&nbsp;
		IP:<input type=text name="ip" width="8" id="ip" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
">&nbsp;&nbsp;&nbsp;
		主机名:<input type=text name="hostname" size="8" id="hostname" value="<?php echo $_smarty_tpl->tpl_vars['hostname']->value;?>
">&nbsp;&nbsp;&nbsp;
		用户名:<input type=text name="username" size="8" id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">&nbsp;&nbsp;&nbsp;
		<select name="lm" id="lm" >
		<option value="0">选择协议</option>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['allmethod']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['allmethod']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['allmethod']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'] == $_smarty_tpl->tpl_vars['lm']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['allmethod']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['login_method'];?>
</option>
		<?php endfor; endif; ?>
		</select>
		<input type='submit' value='确定' onclick='return changegroup();' />
		<select name="selected[]" id="selected" style="display:none" multiple="multiple" />
		</select>
		</form>
					</td>
  </tr>
</table>
</TD>
                  </TR>
				  
            <td align="center">
	<table border=0 width=100% cellpadding=5 cellspacing=1 bgcolor="#FFFFFF" valign=top class="BBtable">
	<tr><th class="list_bg">未选设备</th><th class="list_bg"></th><th class="list_bg">已选设备</th></tr>

	<form name="f1" method=post action="admin.php?controller=admin_pro&action=resource_group_save"  enctype="multipart/form-data" >
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ginfo']->value['id'];?>
">
<input type="hidden" name="oldgname" value="<?php echo $_smarty_tpl->tpl_vars['ginfo']->value['groupname'];?>
">
	  <tr>
  <td align="right" colspan="1">系统用户组:<input type=text size="50" name="gname" id="gname" value="<?php echo $_smarty_tpl->tpl_vars['ginfo']->value['groupname'];?>
"> </td><td align="left" colspan="2">描述:<input type=text size="50" name="desc" id="desc" value="<?php echo $_smarty_tpl->tpl_vars['ginfo']->value['desc'];?>
">
  <?php if ($_SESSION['ADMIN_LEVEL'] == 1) {?>&nbsp;&nbsp;用户<select name="createuser" >
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['g'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['g']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['name'] = 'g';
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['allmem']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total']);
?>
  <?php if ($_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['level'] == 1 || $_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['level'] == 3) {?>
  <option value="<?php echo $_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['username'];?>
" <?php if ((!$_smarty_tpl->tpl_vars['ginfo']->value && $_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['username'] == $_SESSION['ADMIN_USERNAME']) || ($_smarty_tpl->tpl_vars['ginfo']->value && $_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['username'] == $_smarty_tpl->tpl_vars['ginfo']->value['user'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['username'];?>
(<?php echo $_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['realname'];?>
)</option>
  <?php }?>
  <?php endfor; endif; ?>
  </select>
  <?php }?>
  </td>
  <tr>
	  <tr>
	  <td width="45%" align=right>
		<select  class="wbk"  style="width:400;height:400;"  name="first" size="30" id="first" multiple="multiple" ondblclick="moveRight()">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ra'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ra']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['name'] = 'ra';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['resource']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ra']['total']);
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['resource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ra']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['resource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ra']['index']]['device_ip'];?>
_<?php echo $_smarty_tpl->tpl_vars['resource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ra']['index']]['hostname'];?>
_<?php echo $_smarty_tpl->tpl_vars['resource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ra']['index']]['lmname'];?>
_<?php echo $_smarty_tpl->tpl_vars['resource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ra']['index']]['port'];?>
_<?php echo $_smarty_tpl->tpl_vars['resource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ra']['index']]['username'];?>
_<?php echo $_smarty_tpl->tpl_vars['resource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ra']['index']]['ep'];?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ra']['index']]['device_ip'];?>
_<?php echo $_smarty_tpl->tpl_vars['resource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ra']['index']]['hostname'];?>
_<?php echo $_smarty_tpl->tpl_vars['resource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ra']['index']]['lmname'];?>
_<?php echo $_smarty_tpl->tpl_vars['resource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ra']['index']]['port'];?>
_<?php echo $_smarty_tpl->tpl_vars['resource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ra']['index']]['username'];?>
_<?php echo $_smarty_tpl->tpl_vars['resource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ra']['index']]['ep'];?>
</option>
		<?php endfor; endif; ?>
		</select>
		</td>
		<td width="10%" align="">
		<div class="select_move_2">		
				
				<?php $_smarty_tpl->tpl_vars['checkbox'] = new Smarty_Variable(1, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['multipleselect'] = new Smarty_Variable(1, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['addgroup'] = new Smarty_Variable(1, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['popsize'] = new Smarty_Variable(45, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['select_group_id'] = new Smarty_Variable('agroupid', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['inputtype'] = new Smarty_Variable(' 组操作 ', null, 0);?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("select_sgroup_ajax.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<br /><br /><br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="button" value=" 添加--> " onclick="moveRight()"/><br /><br /><br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="button" value=" <--删除 "  onclick="moveLeft()"/><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
          </div>
         </td>
         <td>
		<select  class="wbk"   style="width:400;height:400;" size="30" id="secend" name="secend[]" multiple="multiple">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['r2'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['r2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['name'] = 'r2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['res2']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['r2']['total']);
?>
		<option value="groupid_<?php echo $_smarty_tpl->tpl_vars['res2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r2']['index']]['groupid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['res2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r2']['index']]['groupname'];?>
_<?php echo $_smarty_tpl->tpl_vars['res2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r2']['index']]['groupid'];?>
" selected>设备组_<?php echo $_smarty_tpl->tpl_vars['res2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r2']['index']]['groupname'];?>
_<?php echo $_smarty_tpl->tpl_vars['res2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r2']['index']]['groupid'];?>
</option>
		<?php endfor; endif; ?>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['r'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['r']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['name'] = 'r';
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['res']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total']);
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['device_ip'];?>
_<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['hostname'];?>
_<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['lmname'];?>
_<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['port'];?>
_<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['username'];?>
_<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['ep'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['device_ip'];?>
_<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['hostname'];?>
_<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['lmname'];?>
_<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['port'];?>
_<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['username'];?>
_<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['ep'];?>
</option>
		<?php endfor; endif; ?>
   		</select>
	  </td>
	</tr>
	<tr>
	<td colspan="3">
<table >
  <tr>
	  <td width="10%" align="right" valign=top>授权<?php echo $_smarty_tpl->tpl_vars['language']->value['group'];?>

	  <table border=0 width="100%" style="border:0px;">
	  <tr><td align="right" style="border-bottom:0px;border-top:0px;border-left:0px;border-right:0px;">只显示已授权<input type="checkbox" name='showcheckeduser' <?php if ($_GET['bindgroup'] == 1) {?>checked<?php }?> onclick="reload('bindgroup=1','bindgroup=0',this.checked);"></td></tr>
	  <tr><td align="right" style="border-bottom:0px;border-top:0px;border-left:0px;border-right:0px;">只显示未授权<input type="checkbox" name='showuncheckeduser' <?php if ($_GET['bindgroup'] == 2) {?>checked<?php }?> onclick="reload('bindgroup=2','bindgroup=0',this.checked);"></td></tr>
	  </table></td>
	  <td >
	  <table><tr>
	  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['u'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['u']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['name'] = 'u';
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['usergroup']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total']);
?>
	  <?php if (!$_GET['bindgroup'] || ($_GET['bindgroup'] == 2 && $_smarty_tpl->tpl_vars['usergroup']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['check'] == '') || ($_GET['bindgroup'] == 1 && $_smarty_tpl->tpl_vars['usergroup']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['check'] == 'checked')) {?>
		<td width="180"><input type="checkbox" name='Group<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['u']['index'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['usergroup']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['id'];?>
'  <?php echo $_smarty_tpl->tpl_vars['usergroup']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['check'];?>
><a onclick="window.open ('admin.php?controller=admin_pro&action=resourcegrp_selgroup&gid=<?php echo $_smarty_tpl->tpl_vars['usergroup']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['id'];?>
&sid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&sessionlgroup=<?php echo $_smarty_tpl->tpl_vars['sessionlgroup']->value;?>
', 'newwindow', 'height=600, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=yes,location=no, status=no');return false;"  href="#" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['usergroup']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['groupname'];?>
</a></td><?php if (($_smarty_tpl->getVariable('smarty')->value['section']['u']['index']+1)%5 == 0) {?></tr><tr><?php }?>
		<?php }?>
		<?php endfor; endif; ?>
		</tr></table>
	  </td>
	  </tr>
	  <tr><td></td><td></td></tr>
		<tr>
		<td align=right valign=top>
		授权<?php echo $_smarty_tpl->tpl_vars['language']->value['User'];?>

		<table border=0 width="100%" style="border:0px;">
	  <tr><td align="right" style="border-bottom:0px;border-top:0px;border-left:0px;border-right:0px;">只显示已授权<input type="checkbox" name='showcheckeduser' <?php if ($_GET['binduser'] == 1) {?>checked<?php }?> value=1 onclick="reload('binduser=1','binduser=0',this.checked);"></td></tr>
	  <tr><td align="right" style="border-bottom:0px;border-top:0px;border-left:0px;border-right:0px;">只显示未授权<input type="checkbox" name='showuncheckeduser' <?php if ($_GET['binduser'] == 2) {?>checked<?php }?> value=2 onclick="reload('binduser=2','binduser=0',this.checked);"></td></tr>
	  <tr><td align="right" style="border-bottom:0px;border-top:0px;border-left:0px;border-right:0px;"><input type="button" name='batchselect' class="an_06" value="批量选择" onclick="window.open('admin.php?controller=admin_pro&action=xzuser', 'newwindow','height=650, width=700, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=yes,location=no, status=no');" ></td></tr>
	  <tr><td align="right" style="border-bottom:0px;border-top:0px;border-left:0px;border-right:0px;">全选<input type="checkbox" value=2 onclick="checkAll(this.checked);"></td></tr>
	  </table>
		</td>
		<td>
		<table><tr>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['g'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['g']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['name'] = 'g';
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['allmem']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total']);
?>
		<?php if (!$_GET['binduser'] || ($_GET['binduser'] == 2 && $_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['check'] == '') || ($_GET['binduser'] == 1 && $_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['check'] == 'checked')) {?>
		<td width="180"><input type="checkbox" id="uid_<?php echo $_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['uid'];?>
" name='Check<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['g']['index'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['uid'];?>
'  <?php echo $_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['check'];?>
><a onclick="window.open ('admin.php?controller=admin_pro&action=resourcegrp_seluser&uid=<?php echo $_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['uid'];?>
&sid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&sessionluser=<?php echo $_smarty_tpl->tpl_vars['sessionluser']->value;?>
', 'newwindow', 'height=600, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=yes,location=no, status=no');return false;" href="#" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['username'];?>
(<?php if ($_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['realname']) {
echo $_smarty_tpl->tpl_vars['allmem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['realname'];
} else { ?>未设置<?php }?>)</a></td><?php if (($_smarty_tpl->getVariable('smarty')->value['section']['g']['index']+1)%5 == 0) {?></tr><tr><?php }?>
		<?php }?>
		<?php endfor; endif; ?>
		</tr></table>
	  </td>
	  </tr>
</table>
	</td>
	</tr>
	</table>
<br>
<input type="submit"  value="保存" onclick="return fsave();" class="an_02">&nbsp;&nbsp;<input type="button" onclick='window.location="admin.php?controller=admin_pro&action=resource_group&back=1"'  value="退出" class="an_02">

<input type="hidden" name="sessionlgroup" value="<?php echo $_smarty_tpl->tpl_vars['sessionlgroup']->value;?>
" />
<input type="hidden" name="sessionluser" value="<?php echo $_smarty_tpl->tpl_vars['sessionluser']->value;?>
" />
</form>
	</td>
  </tr>
</table>

<?php echo '<script'; ?>
 language="javascript">
var changed = false;
function my_confirm(str){
	if(!confirm(str + "？"))
	{
		window.event.returnValue = false;
	}
}

function changeport() {
	if(document.getElementById("ssh").selected==true)  {
		f1.port.value = 22;
	}
	if(document.getElementById("telnet").selected==true)  {
		f1.port.value = 23;
	}
}

function changegroup(){
	
	var s  = document.getElementById('secend');
	var ss = document.getElementById('selected');
	for(var i=0; i<s.options.length; i++){
		ss.options[ss.options.length]=new Option(s.options[i].value, s.options[i].Text);
	}
	checkall('selected');
	return true;
/*
	var ip = document.getElementById('ip').value;
	var ldapid1 = 0;
	var ldapid2 = 0;
	var gid=0;
	<?php if ($_smarty_tpl->tpl_vars['_config']->value['LDAP']) {?>
	<?php if ($_smarty_tpl->tpl_vars['_config']->value['TREEMODE']) {?>
	var obj1=document.getElementById('groupiddh');	
	gid=obj1.value;
	<?php } else { ?>
	for(var i=1; true; i++){
		var obj=document.getElementById('groupid'+i);
		if(obj!=null&&obj.options.selectedIndex>-1){
			gid=obj.options[obj.options.selectedIndex].value;
			continue;
		}
		break;
	}
	<?php }?>
	<?php }?>
	var gname = document.getElementById('gname').value;
	var desc = document.getElementById('desc').value;
	var hostname = document.getElementById('hostname').value;
	var username = document.getElementById('username').value;
	var lm = document.getElementById('lm').options[document.getElementById('lm').options.selectedIndex].value;
	if(changed){
		if(confirm('确定要放弃更改?')){
			window.location='admin.php?controller=admin_pro&action=resource_group_edit&groupid='+gid+'&gname='+gname+'&desc='+desc+'&id=<?php echo $_smarty_tpl->tpl_vars['ginfo']->value['id'];?>
&ip='+ip+'&hostname='+hostname+'&lm='+lm+'&username='+username+'&ldapid1='+ldapid1+'&ldapid2='+ldapid2;
		}
	}else{
		window.location='admin.php?controller=admin_pro&action=resource_group_edit&groupid='+gid+'&gname='+gname+'&desc='+desc+'&id=<?php echo $_smarty_tpl->tpl_vars['ginfo']->value['id'];?>
&ip='+ip+'&hostname='+hostname+'&lm='+lm+'&username='+username+'&ldapid1='+ldapid1+'&ldapid2='+ldapid2;
	}
	return false;
*/
}

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" >
function checkAll(c){
	var targets = document.getElementsByTagName('input');
	for(var j=0; j<targets.length; j++){
		if(targets[j].name.substring(0,5)=='Check'){
			targets[j].checked=c;
		}
	}
}
function reload(p1,p2,check){
	window.location=window.location+'&'+(check ? p1 : p2);
}
	
	/**选中的元素向右移动**/
 	function moveRight()
	{
		
			//得到第一个select对象
		var selectElement = document.getElementById("first");
		var optionElements = selectElement.getElementsByTagName("option");
		var len = optionElements.length;
		var selectElement2 = document.getElementById("secend");

		if(!(selectElement.selectedIndex==-1))   //如果没有选择元素，那么selectedIndex就为-1
		{
			
			//得到第二个select对象
			
	
				// 向右移动
				for(var i=0;i<len ;i++)
				{
					if(selectElement.selectedIndex>=0)
					selectElement2.appendChild(optionElements[selectElement.selectedIndex]);
				}
				changed = true;
		} else
		{
			alert("您还没有选择需要移动的元素！");
		}
	}
	

	
	//移动选中的元素到左边
	function moveLeft()
	{
		//首先得到第二个select对象
		var selectElement = document.getElementById("secend");
		
		var optionElement = selectElement.getElementsByTagName("option");
		var len = optionElement.length;
		var firstSelectElement = document.getElementById("first");
		
		
		//再次得到第一个元素
		if(!(selectElement.selectedIndex==-1))
		{
			
			for(i=0;i<len;i++)
			{
				if(selectElement.selectedIndex>=0){
					if(selectElement.options[selectElement.selectedIndex].value.substring(0,7)=='groupid'){
						selectElement.options.remove(selectElement.selectedIndex);//被选中的那个元素的索引
					}else{
						firstSelectElement.appendChild(optionElement[selectElement.selectedIndex]);//被选中的那个元素的索引
					}
				}
			}
			changed = true;
		}else
		{
			alert("您还没有选中要移动的项目!");
		}
	}

	function selectgroup(groupid,groupname){
		checkall("secend");
		//deletegroup();
		if(groupid>0)
		for(var i=0; i<document.getElementById("secend").options.length; i++){
			if(document.getElementById("secend").options[i].value=='groupid_'+groupid){
				alert('组已经存在');
				return ;
			}
		}
		var inputs = document.getElementsByTagName("input");
		selectedgroup.length=0;
		for(var i=0; i<inputs.length; i++){
			if(inputs[i].name=='agroupidd_group[]'&&inputs[i].checked){
				groupid = inputs[i].getAttribute("gid");
				groupname = inputs[i].getAttribute("gname");
				selectedgroup[selectedgroup.length]=groupid
				var found = 0;
				for(var j=0; j<document.getElementById("secend").options.length; j++){
					if(document.getElementById("secend").options[j].value=='groupid_'+groupid){
						found=1 ;
					}
				}
				if(found==1) continue;
				document.getElementById("secend").options[document.getElementById("secend").options.length]=new Option('设备组'+'_'+groupname+'_'+groupid, 'groupid_'+groupid);
			}
		}
		
	}

	function deletegroup(groupid,groupname){
		var selectElement = document.getElementById("secend");
		var len = selectElement.options.length;
		
		
		//再次得到第一个元素
		if(!(selectElement.selectedIndex==-1))
		{
			
			for(i=0;i<len;i++)
			{
				if(selectElement.selectedIndex>=0&&selectElement.options[selectElement.selectedIndex].value.substring(0,7)=='groupid')
					selectElement.options.remove(selectElement.selectedIndex);//被选中的那个元素的索引
			}
			changed = true;
		}
	}
	
	function checkall(selectID){
		var obj = document.getElementById(selectID);
		var len = obj.options.length;
		for(var i=0; i<len; i++){
			obj.options[i].selected = true;
		}
		return true;
	}

	function fsave(){
		//document.getElementById('fgname').value=document.getElementById('gname').value;
		checkall('secend');
		return true;
	}
	<?php if ($_smarty_tpl->tpl_vars['_config']->value['LDAP']) {?>
	<?php echo $_smarty_tpl->tpl_vars['changelevelstr']->value;?>

	<?php }?>

	var selectedgroup = new Array();
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['res2']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
	selectedgroup[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
] = <?php echo $_smarty_tpl->tpl_vars['res2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['groupid'];?>
;
	<?php endfor; endif; ?>
	function checkS(pre){
		var inputs = document.getElementsByTagName("input");
		for(var i=0; i<inputs.length; i++){
			if(inputs[i].name=='agroupidd_group[]'){
				inputs[i].checked=agroupidd.GetChecked(inputs[i].getAttribute("gid"));
			}
		}
		var selectElement = document.getElementById("secend");
		for(var i=0; i<selectElement.options.length; i++){
			if(selectElement.options[i].value.substring(0,7)=='groupid'){
				var _id = selectElement.options[i].value.split('_');
				if(document.getElementById('group_'+pre+_id[1])!=null){
					document.getElementById('group_'+pre+_id[1]).checked = true;
					agroupidd.SetChecked(_id[1],true);
				}
			}
		}
	}
	checkS("");
<?php echo '</script'; ?>
>
</body>
<iframe name="hide" height="0" frameborder="0" scrolling="no"></iframe>
</html>


<?php }
}
?>