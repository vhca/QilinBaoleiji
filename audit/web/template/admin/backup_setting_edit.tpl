<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title>{{$language.Master}}{{$language.page}}面</title>
<meta name="generator" content="editplus">
<meta name="author" content="nuttycoder">
<link href="{{$template_root}}/all_purpose_style.css" rel="stylesheet" type="text/css" />

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
<td width="84%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td valign="middle" class="hui_bj"><div class="menu">
<ul>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_eth&action=serverstatus">服务状态</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_status&action=latest">系统状态</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_config&action=ha">双机配置</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
   <li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_backup">配置备份</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_a"><img src="{{$template_root}}/images/an1.jpg" align="absmiddle"/><a href="admin.php?controller=admin_backup&action=backup_setting">数据同步</a><img src="{{$template_root}}/images/an3.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_backup&action=upgrade">软件升级</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_backup&action=cronjob">定时任务</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_index&action=changelogo">图标上传</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_config&action=notice">系统通知</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
</ul><span class="back_img"><A href="admin.php?controller=admin_backup&action=backup_setting&back=1"><IMG src="{{$template_root}}/images/back1.png" 
      width="80" height="30" border="0"></A></span>
</div></td></tr>
  <tr><td><table bordercolor="white" cellspacing="0" cellpadding="5" border="0" width="100%" class="BBtable">
<form name="f1" method=post OnSubmit='return check()' action="admin.php?controller=admin_backup&action=backup_setting_save&id={{$bs.seq}}">
	<tr><th colspan="2" class="list_bg"></th></tr>
	<tr><td align="right" width="33%">描述</td>
		<td align="left"  width="66%">&nbsp;
		<input type="text" class="wbk" name="desc" value="{{$bs.desc}}" >
		</td>
		
	</tr>
	<tr bgcolor="f7f7f7"><td align="right">同步模式:</td>
		<td align=left>&nbsp;
		<select  class="wbk"  name="session_flag" onchange="chgmode(this.value);">
		<option value="0" {{if $bs.session_flag eq '0'}}selected{{/if}}>审计日志</option>
		<option value="100" {{if $bs.session_flag eq '100'}}selected{{/if}}>资产权限</option>
		<option value="1" {{if $bs.session_flag eq '1'}}selected{{/if}}>主从数据</option>
		<option value="2" {{if $bs.session_flag eq '2'}}selected{{/if}}>密码文件</option>
		</select>
		</td>
		
	</tr>
	<tr><td align="right">同步地址</td>
		<td align=left>&nbsp;
		<input type="text" class="wbk" name="ip" value="{{$bs.ip}}" />
		</td>
		
	</tr>
	<tr bgcolor="f7f7f7"><td align="right">同步端口:</td>
		<td align=left>&nbsp;
		<input type="text" class="wbk" name="port" id="port" value="{{$bs.port}}" />
		</td>
		
	</tr>
	<tr bgcolor="" id="db_synchro"><td align="right">数据库同步:</td>
		<td align=left>&nbsp;
		<select  class="wbk"  name="dbactive" >
		<option value="0" {{if $bs.dbactive eq '0'}}selected{{/if}}>不做同步</option>
		<option value="1" {{if $bs.dbactive eq '1'}}selected{{/if}}>完全同步</option>
		<option value="2" {{if $bs.dbactive eq '2'}}selected{{/if}}>配置同步</option>
		</select>
		</td>
		
	</tr>
	<tr bgcolor="f7f7f7" id="file_synchro"><td align="right">审计文件同步:</td>
		<td align=left>&nbsp;
		<select  class="wbk"  name="fileactive" >
		<option value="0" {{if $bs.fileactive eq '0'}}selected{{/if}}>否</option>
		<option value="1" {{if $bs.fileactive eq '1'}}selected{{/if}}>是</option>
		</select>
		</td>
		
	</tr>

	<tr bgcolor="" id="user_synchro"><td align="right">系统用户:</td>
		<td align=left>&nbsp;
		<input type="text" name="user" id="user" value="{{$bs.user}}" />
		</td>
		
	</tr>
	<tr bgcolor="f7f7f7" id="passwd_synchro"><td align="right">系统用户密码:</td>
		<td align=left>&nbsp;
		<input type="password" class="wbk" name="passwd" value="{{$bs.passwd}}" />
		</td>
		
	</tr>
	<tr bgcolor="" id="passwdc_synchro"><td align="right">确认系统用户密码:</td>
		<td align=left>&nbsp;
		<input type="password" class="wbk" name="passwdc" value="{{$bs.passwd}}" />
		</td>
		
	</tr>
	<tr bgcolor="f7f7f7"  id="mysqluser_synchro"><td align="right">数据库用户:</td>
		<td align=left>&nbsp;
		<input type="text" name="mysqluser" value="{{$bs.mysqluser}}" />
		</td>
		
	</tr>
	<tr bgcolor="" id="mysqlpasswd_synchro"><td align="right">数据库用户密码:</td>
		<td align=left>&nbsp;
		<input type="password" class="wbk" name="mysqlpasswd" value="{{$bs.mysqlpasswd}}" />
		</td>
		
	</tr>
	<tr bgcolor="f7f7f7" id="mysqlpasswdc_synchro"><td align="right">确认数据库用户密码:</td>
		<td align=left>&nbsp;
		<input type="password" class="wbk" name="mysqlpasswdc" value="{{$bs.mysqlpasswd}}" />
		</td>
		
	</tr>
	<tr bgcolor="" id="dbname_synchro"><td align="right">目标数据库名称:</td>
		<td align=left>&nbsp;
		<input type="text" name="dbname" value="{{$bs.dbname}}" />
		</td>
		
	</tr>
	<tr bgcolor="f7f7f7" id="path_synchro"><td align="right">备份目录:</td>
		<td align=left>&nbsp;
		<input type="text" class="wbk" name="path" value="{{$bs.path}}" />
		</td>
		
	</tr>
	<tr bgcolor="" id="type_synchro"><td align="right">同步协议:</td>
		<td align=left>&nbsp;
		<select  class="wbk"  name="protocol" id="protocol" onchange="chgtype(this.value);">
		<option value="sftp" {{if $bs.protocol eq 'sftp'}}selected{{/if}}>sftp</option>
		<option value="ftp" {{if $bs.protocol eq 'ftp'}}selected{{/if}}>ftp</option>
		</select>
		</td>
		
	</tr>
	<tr bgcolor="f7f7f7">
			<td colspan="2" align="center"><input type="submit"  value="{{$language.Save}}" class="an_02">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="手动同步" class="an_02"></td>
		</tr>

	</table>
	<input type="hidden" name="ac" value="{{if $alarm}}edit{{else}}new{{/if}}" />
</form>

		</table>
	</td>
  </tr>
</table>


<script language="javascript">
<!--
function check()
{
/*
   if(!checkIP(f1.ip.value) && f1.netmask.value != '32' ) {
	alert('地址为{{$language.HostName}}时，掩码应为32');
	return false;
   }   
   if(checkIP(f1.ip.value) && !checknum(f1.netmask.value)) {
	alert('请{{$language.Input}}正确掩码');
	return false;
   }
*/
   return true;

}//end check
// -->

function checkIP(ip)
{
	var ips = ip.split('.');
	if(ips.length==4 && ips[0]>=0 && ips[0]<256 && ips[1]>=0 && ips[1]<256 && ips[2]>=0 && ips[2]<256 && ips[3]>=0 && ips[3]<256)
		return ture;
	else
		return false;
}

function checknum(num)
{

	if( isDigit(num) && num > 0 && num < 65535)
		return ture;
	else
		return false;

}

function isDigit(s)
{
var patrn=/^[0-9]{1,20}$/;
if (!patrn.exec(s)) return false;
return true;
}

function chgmode(v){
	if(v==0){
		document.getElementById('db_synchro').style.display='';
		document.getElementById('file_synchro').style.display='';
		document.getElementById('passwd_synchro').style.display='';
		document.getElementById('passwdc_synchro').style.display='';
		document.getElementById('mysqluser_synchro').style.display='';
		document.getElementById('mysqlpasswd_synchro').style.display='';
		document.getElementById('mysqlpasswdc_synchro').style.display='';
		document.getElementById('dbname_synchro').style.display='';
		document.getElementById('path_synchro').style.display='';
		document.getElementById('type_synchro').style.display='';
	}else if(v==1){
		document.getElementById('db_synchro').style.display='none';
		document.getElementById('file_synchro').style.display='none';
		document.getElementById('passwd_synchro').style.display='none';
		document.getElementById('passwdc_synchro').style.display='none';
		document.getElementById('mysqluser_synchro').style.display='none';
		document.getElementById('mysqlpasswd_synchro').style.display='none';
		document.getElementById('mysqlpasswdc_synchro').style.display='none';
		document.getElementById('dbname_synchro').style.display='none';
		document.getElementById('path_synchro').style.display='none';
		document.getElementById('type_synchro').style.display='none';
		document.getElementById('port').value='2288';
		document.getElementById('user').value='root';
	}else{
		document.getElementById('db_synchro').style.display='none';
		document.getElementById('file_synchro').style.display='none';
		document.getElementById('passwd_synchro').style.display='';
		document.getElementById('passwdc_synchro').style.display='';
		document.getElementById('mysqluser_synchro').style.display='none';
		document.getElementById('mysqlpasswd_synchro').style.display='none';
		document.getElementById('mysqlpasswdc_synchro').style.display='none';
		document.getElementById('dbname_synchro').style.display='none';
		document.getElementById('path_synchro').style.display='';
		document.getElementById('type_synchro').style.display='';
	}
}

function chgtype(v){
	if(v=='sftp'){
		document.getElementById('port').value='22';
	}else if(v=='ftp'){
		document.getElementById('port').value='21';
	}
}

{{if $bs.seq}}
chgmode({{$bs.session_flag}});
{{else}}
chgtype(document.getElementById('protocol').options[document.getElementById('protocol').options.selectedIndex].value);
{{/if}}
</script>
</body>
</html>


