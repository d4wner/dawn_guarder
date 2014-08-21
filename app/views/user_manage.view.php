<?php include($this->view_path('check_login'));?>
<?php include($this->view_path('header'));?>


<body  background="<?php echo $site_url;?>app/views/img/background5.jpg">

<table class="table table-bordered table-hover">

<thead>
	<tr class="success">

      	<th>用户名</th>
	<th>用户权限</th>
	<th>删除用户</th>
	</tr>
	</thead>
	<tbody>



<?php
foreach ($user_select->result() as $row)
{
	echo '<tr class="error"><td>'.$row->username.'</td>';

 if ($row->type == 1)
{
   echo '<td>超级管理员</td>';
}
else if($row->type == 0)
{
   echo '<td>普通用户</td>';
}
echo "<td><a href='".$site_url."index.php?home.user_edit&del_user=".$row->username."' >删除用户</a></td>";
echo '</tr>';
echo '</tbody>';
}
?>

</tbody>
</table>



<form action="<?php echo $site_url;?>index.php?home.user_edit"  method="post" id="user_edit">

<div><div class="form-item">
 <label for="edit-name">待更新用户名: </label>
<input type="textbox" maxlength="64" name="username" id="edit-user"  size="30" value="" class="form-text required" />
</div>
</brss>
<div class="form-item">
 <div class="description">密码(不修改密码请留空): </div>
 <input type="password" maxlength="64" name="password" id="edit-pass"  size="30" value="" class="form-text required" />
<div class="description">请再次输入您的密码。</div>
 <input type="password" maxlength="64" name="password2" id="edit-pass2"  size="30" value="" class="form-text required" />
 
</div>

<input type="button" name="op" value="更    新"  class="form-submit" onclick="check_form();"  />
<br /><br />
</div>

</form>


<script  type="text/javascript">
function check_form()
{
//alert('123');
password = document.getElementById("edit-pass").value;
password2 = document.getElementById("edit-pass2").value;
username = document.getElementById("edit-user").value;


if(password != password2) 
{
alert("两次输入密码不同.\n");
}

else if(username == ""||password == "")
{
alert("用户名或密码不能为空.\n");
}

else
  {

document.getElementById("user_edit").submit();
   }
}

</script>
</body>
