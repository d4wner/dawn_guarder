<?php
ob_end_clean();
ob_start();
include($this->view_path('header'));
include($this->view_path('check_login'));

?>
<html>
<body background="<?php echo $site_url;?>app/views/img/background5.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<table width="678" align="center">
<tr>
<td colspan="2"><h1>异常提交区</h1></td>
</tr>
<tr>
<td width="586"><a href="<?php echo $site_url;?>index.php?home.message">历史反馈</a> | <a href="<?php echo $site_url;?>index.php?home.feedback">提交</a></td>
</tr>
</table>
<table align="center" width="678">
<tr>
<td>
<form name="form1" method="post" action="<?php echo $site_url;?>index.php?home.feedback">
<p>
Name：
<input name="name" type="text" id="name">
</p>
<p>Title：<input type="test" name="title" id="title"></p>
<p>
留言：
</p>
<p>
<textarea name="content" id="content" cols="45" rows="5"></textarea>
</p>
<p>
<input type="submit" name="button" id="button" value="提交">
<input type="reset" name="button2" id="button2" value="重置">
</p>
</form>
</td>
</tr>
</table>
</body>
</html>

