<?php
ob_end_clean();
ob_start();
include($this->view_path('header'));
include($this->view_path('check_login'));
#echo $resule;



?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body background="<?php echo $site_url;?>app/views/img/background5.jpg">
<table width="678" align="center">
<tr>
<td colspan="2"><h1>异常提交区</h1></td>
</tr>
<tr>
<td width="586"><a href="<?php echo $site_url;?>index.php?home.message">历史反馈</a> | <a href="<?php echo $site_url;?>index.php?home.feedback">提交</a></td>
</tr>
</table>
<p>
<?
#

if ($resule->num_rows() > 0)
{
   foreach ($resule->result() as $row)
   {

#while($row=mysql_fetch_array($resule))
#{
?>
</p>
<table width="678" border="1" align="center" cellpadding="1" cellspacing="1">
<tr>
<td width="178">Name:<? echo $row->name;?></td>
<td width="223">Title:<? echo $row->title;?></td>
</tr>
<tr>
<td colspan="5"><? echo $row->content;?></td>
</tr>
<tr>
</table>
<?
   }
} 

#}
?>
</body>
</html>

