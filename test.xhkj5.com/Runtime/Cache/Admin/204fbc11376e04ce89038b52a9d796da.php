<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SQL执行器</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/jquery/jquery-1.7.2.min.js"></script>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
</head>
<body class="body">
<table border="0" cellpadding="0" cellspacing="0" class="table">
<thead><tr><th class="r">SQL执行器</th></tr></thead>
<form action="?s=Admin-Data-Upsql" method="post" id="myform" name="myform">
  <tbody> 
  <tr>
  	<td class="r ct" style="padding:10px 0px;"><textarea name="sql" id="sql" type="text" style="height:250px;width:95%;"></textarea></td>
  </tr>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="2" class="r"><input class="submit" type="submit" name="submit" value="提 交" onClick="return confirm('该操作需要慎重操作,请确定是否执行!')"> <input class="submit" type="reset" name="Input" value="重 置" > <label>除非确定您的SQL语句安全，否则不要轻易在此处运行!</label></td>
    </tr> 
    <tr>
      <td colspan="2" class="r"><span style="color:#FF0000">清空所有视频数据，并且让ID归0：Truncate table ff_vod</span><br>清空所有tag数据，并且让ID归0：Truncate table ff_tag<br>清空所有会员数据，并且让ID归0：Truncate table ff_user<br>清空所有专题数据，并且让ID归0：Truncate table ff_special<br>表的修复与优化：Repair TABLE ff_vod,optimize TABLE ff_vod<br>将'qvod'服务器组的视频设为未审核：Update ff_vod Set vod_status=0 Where vod_play='qvod'<br>将'wp9'服务器组的视频直接删除：Delete From ff_vod Where vod_play='qvod'<br>清空视频模型的所有评论：Delete From pp_cm Where cm_sid=1<br />格式化所有完结影片状态：update ff_vod set vod_continu=0 where vod_continu='完结'</td>
    </tr> 
  </tfoot> 
</form>            
</table>
﻿﻿<br /><center>&#80;&#111;&#119;&#101;&#114;&#101;&#100;&#32;&#98;&#121;&#32;<a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#98;&#98;&#115;&#46;&#53;&#50;&#106;&#115;&#99;&#110;&#46;&#99;&#111;&#109;" target="_blank" ><font color="#FF0000">&#38182;&#23578;&#20013;&#22269;</font></a>,&#30001;&#39134;&#39134;&#31243;&#24207;&#20108;&#27425;&#24320;&#21457;。&#24403;&#21069;&#29256;&#26412;&#21495;&#12304;&#38182;&#23578;&#20013;&#22269;&#20250;&#21592;&#19987;&#20139;&#29256;&#12305;</center>
</body>
</html>