<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>数据库备份</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/jquery/jquery-1.7.2.min.js"></script>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
</head>
<body class="body">
<table border="0" cellpadding="0" cellspacing="0" class="table">
<form action="?s=Admin-Data-Insert" method="post" id="myform" name="myform">
  <thead>
    <tr>
      <th colspan="2" class="l">数据库分卷备份</th>
      </tr>
  </thead>
  <?php if(is_array($list_table)): $i = 0; $__LIST__ = $list_table;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><tbody> 
  <tr>
  	<td width="6%" class="l pd"><input type="checkbox" name="ids[]" value="<?php echo ($ppvod); ?>" style='border:none' checked><?php echo ($i); ?>、</td>
    <td class="r pd"><?php echo ($ppvod); ?></td>
  </tr>
  </tbody><?php endforeach; endif; else: echo "" ;endif; ?>
  <tfoot>
    <tr>
      <td colspan="2" class="r"><input type="button" value="全选" class="submit" onClick="checkall('all');"> <input name="" type="button" value="反选" class="submit" onClick="checkall();"> <label>每个分卷文件大小：</label><input type="text" name="filesize" value="2048" size="5" class="ct"> K <input type="submit" name="submit" value="开始备份" class="submit"> </td>
    </tr>  
  </tfoot> 
</form>            
</table>
﻿﻿<br /><center>&#80;&#111;&#119;&#101;&#114;&#101;&#100;&#32;&#98;&#121;&#32;<a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#98;&#98;&#115;&#46;&#53;&#50;&#106;&#115;&#99;&#110;&#46;&#99;&#111;&#109;" target="_blank" ><font color="#FF0000">&#38182;&#23578;&#20013;&#22269;</font></a>,&#30001;&#39134;&#39134;&#31243;&#24207;&#20108;&#27425;&#24320;&#21457;。&#24403;&#21069;&#29256;&#26412;&#21495;&#12304;&#38182;&#23578;&#20013;&#22269;&#20250;&#21592;&#19987;&#20139;&#29256;&#12305;</center>
</body>
</html>