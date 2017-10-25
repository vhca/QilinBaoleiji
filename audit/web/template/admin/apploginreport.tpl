<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title>Audit{{$language.List}}</title>
<meta name="generator" content="editplus">
<meta name="author" content="nuttycoder">
<link href="{{$template_root}}/all_purpose_style.css" rel="stylesheet" type="text/css" />
<script src="./template/admin/cssjs/global.functions.js"></script>
<script type="text/javascript" src="{{$template_root}}/cssjs/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="{{$template_root}}/cssjs/_ajaxdtree.js"></script>
<link href="{{$template_root}}/cssjs/dtree.css" rel="stylesheet" type="text/css" />


<link type="text/css" rel="stylesheet" href="{{$template_root}}/cssjs/border-radius.css" />
<link type="text/css" rel="stylesheet" href="{{$template_root}}/cssjs/jscal2.css" />
<script src="{{$template_root}}/cssjs/jscal2.js"></script>
<script src="{{$template_root}}/cssjs/cn.js"></script>
<script src="./template/admin/cssjs/global.functions.js"></script>
<script type="text/javascript">
function changetype(sid){
document.getElementById(sid).checked=true;
}
function searchit(){
	url = "admin.php?controller=admin_reports&action=apploginreport";
	url += "&f_rangeStart="+document.search.elements.f_rangeStart.value;
	url += "&f_rangeEnd="+document.search.elements.f_rangeEnd.value;
	{{if $_config.LDAP}}
	{{if $_config.TREEMODE}}
	var obj1=document.getElementById('groupiddh');	
	gid=obj1.value;
	{{else}}
	for(var i=1; true; i++){
		var obj=document.getElementById('groupid'+i);
		if(obj!=null&&obj.options.selectedIndex>-1){
			gid=obj.options[obj.options.selectedIndex].value;
			continue;
		}
		break;
	}
	{{/if}}	
	url += "&groupid="+gid;
	{{/if}}
	document.search.action = url;
	//alert(document.search.elements.action);
	//return false;
	return true;
}
</script>

<script>

var foundparent = false;
var servergroup = new Array();
var usergroup = new Array();
var alluser = new Array();
var allserver = new Array();

var i=0;
{{section name=au loop=$alluser}}
alluser[i++]={uid:{{$alluser[au].uid}},username:'{{$alluser[au].username}}',realname:'{{$alluser[au].realname}}',groupid:{{$alluser[au].groupid}},level:{{$alluser[au].level}}};
{{/section}}
var i=0;
{{section name=as loop=$allserver}}
allserver[i++]={hostname:'{{$allserver[as].hostname}}',device_ip:'{{$allserver[as].device_ip}}',groupid:{{$allserver[as].groupid}}};
{{/section}}

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
<td width="84%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td valign="middle" class="hui_bj"><div class="menu">
<ul>
 

    <li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_reports&action=loginacct">授权明细</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_reports&action=logintims">登录统计</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_reports&action=loginfailed">登录尝试</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_reports&action=devloginreport">系统登录报表</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_a"><img src="{{$template_root}}/images/an1.jpg" align="absmiddle"/><a href="admin.php?controller=admin_reports&action=apploginreport">应用登录报表</a><img src="{{$template_root}}/images/an3.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_reports&action=workflow_approve">审批报表</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
</ul>
</div></td></tr>
  <tr>
    <td class="main_content">
<form action="{{$curr_url}}" method="post" name="search" >

		{{include file="select_sgroup_ajax.tpl" }} 
{{$language.Starttime}}：<input type="text" class="wbk"  name="f_rangeStart" size="13" id="f_rangeStart" value="{{$f_rangeStart|date_format:'%Y-%m-%d'}}" />
 <input type="button" onclick="changetype('timetype3')" id="f_rangeStart_trigger" name="f_rangeStart_trigger" value="{{$language.Edittime}}"  class="wbk">


 {{$language.Endtime}}：
<input  type="text" class="wbk" name="f_rangeEnd" size="13" id="f_rangeEnd"  value="{{$f_rangeEnd|date_format:'%Y-%m-%d'}}" />
 <input type="button" onclick="changetype('timetype3')" id="f_rangeEnd_trigger" name="f_rangeEnd_trigger" value="{{$language.Edittime}}"  class="wbk">
 &nbsp;&nbsp;<input type="submit" height="35" align="middle" onClick="return searchit();" border="0" value=" 确定 " class="bnnew2"/>
</form> 
	  </td>
  </tr>
  <script type="text/javascript">
var cal = Calendar.setup({
    onSelect: function(cal) { cal.hide() },
    showTime: false
});
cal.manageFields("f_rangeStart_trigger", "f_rangeStart", "%Y-%m-%d");
cal.manageFields("f_rangeEnd_trigger", "f_rangeEnd", "%Y-%m-%d");
</script>
  <tr><td><table bordercolor="white" cellspacing="0" cellpadding="5" border="0" width="100%" class="BBtable">
					<tr>
						<th class="list_bg"   width="5%">序号</th>
						<th class="list_bg"   width="8%"><a href="admin.php?controller=admin_reports&action=apploginreport&orderby1=user&orderby2={{$orderby2}}" >运维用户</a></th>
						<th class="list_bg"   width="8%"><a href="admin.php?controller=admin_reports&action=apploginreport&orderby1=user&orderby2={{$orderby2}}" >别名</a></th>
						<th class="list_bg"   width="8%"><a href="admin.php?controller=admin_reports&action=apploginreport&orderby1=user&orderby2={{$orderby2}}" >运维组</a></th>
						<th class="list_bg"   width="8%"><a href="admin.php?controller=admin_reports&action=apploginreport&orderby1=serverip&orderby2={{$orderby2}}" >服务器IP</a></th>							
						<th class="list_bg"   width="8%"><a href="admin.php?controller=admin_reports&action=apploginreport&orderby1=appname&orderby2={{$orderby2}}" >应用名称</a></th>
						<th class="list_bg"   width="8%"><a href="admin.php?controller=admin_reports&action=apploginreport&orderby1=apppath&orderby2={{$orderby2}}" >程序路径</a></th>
						<th class="list_bg"   width="8%"><a href="admin.php?controller=admin_reports&action=apploginreport&orderby1=url&orderby2={{$orderby2}}" >URL</a></th>
						<th class="list_bg"   width="8%"><a href="admin.php?controller=admin_reports&action=apploginreport&orderby1=ct&orderby2={{$orderby2}}" >命令次数</a></th>
						<th class="list_bg"  width="8%"><a href="admin.php?controller=admin_reports&action=apploginreport&orderby1=mstart&orderby2={{$orderby2}}" >开始日期</a></th>
						<th class="list_bg"  width="8%"><a href="admin.php?controller=admin_reports&action=apploginreport&orderby1=mend&orderby2={{$orderby2}}" >结束日期</a></th>
					
					</tr>
					{{section name=t loop=$reports}}
					<tr {{if $smarty.section.t.index % 2 == 0}}bgcolor="f7f7f7"{{/if}}>
						<td width="10%">{{$smarty.section.t.index+1}}</td>
						<td width="10%">{{$reports[t].user}}</td>
						<td width="10%">{{$reports[t].realname}}</td>						
						<td width="10%">{{$reports[t].groupname}}</td>						
						<td width="10%">{{$reports[t].serverip}}</td>						
						<td width="10%">{{$reports[t].appname}}</td>
						<td width="10%">{{$reports[t].apppath}}</td>
						<td width="10%">{{$reports[t].url}}</td>
						<td width="10%">{{$reports[t].ct}}</td>
						<td width="10%">{{$reports[t].mstart|date_format:'%Y-%m-%d'}}</td>
						<td width="10%">{{$reports[t].mend|date_format:'%Y-%m-%d'}}</td>
					</tr>
					{{/section}}
					<tr>
						<td colspan="12" align="right">
							{{$language.all}}{{$session_num}}{{$language.Session}}  {{$page_list}}  {{$language.Page}}：{{$curr_page}}/{{$total_page}}{{$language.page}}  {{$items_per_page}}{{$language.item}}{{$language.Log}}/{{$language.page}}  {{$language.Goto}}<input name="pagenum" type="text" class="wbk" size="2" onKeyPress="if(event.keyCode==13) window.location='{{$curr_url}}&page='+this.value;">{{$language.page}} <!--当前数据表: {{$now_table_name}}-->   导出：<a href="{{$curr_url}}&derive=1" target="hide"><img src="{{$template_root}}/images/excel.png" border=0></a>  <a href="{{$curr_url}}&derive=2" ><img src="{{$template_root}}/images/html.png" border=0></a>  <a href="{{$curr_url}}&derive=3" ><img src="{{$template_root}}/images/word.png" border=0></a>  <a href="{{$curr_url}}&derive=4" ><img src="{{$template_root}}/images/pdf.png" border=0></a> {{if $admin_level == 1}}<a href="{{$curr_url}}&delete=1"></a>{{/if}}
						<!--
						<select  class="wbk"  name="table_name">
						{{section name=t loop=$table_list}}
						<option value="{{$table_list[t]}}" {{if $table_list[t] == $now_table_name}}selected{{/if}}>{{$table_list[t]}}</option>
						{{/section}}
						</select>
						-->
						</td>
					</tr>
				</table>
	</td>
  </tr>
  {{if $data}}
  <tr><td class="main_content"><img src="include/pChart/graphgenerate.php?{{$data}}{{$info}}graphtype=pie"</td></tr>
  <tr><td class="main_content"><img src="include/pChart/graphgenerate.php?{{$data}}{{$info}}graphtype=bar"</td></tr>
  {{/if}}
</table>
<script>
{{if $_config.LDAP}}
{{$changelevelstr}}
{{/if}}
</script>
<iframe name="hide" height="0" frameborder="0" scrolling="no"></iframe>
</body>
</html>


