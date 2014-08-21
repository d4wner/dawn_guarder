<?php include($this->view_path('check_login'));?>
<?php include($this->view_path('header'));?>
<style type="text/css">
.name
{
color:#009900;
}
</style>

<body  background="<?php echo $site_url;?>app/views/img/background5.jpg">

<table class="table table-bordered table-hover table-striped">

<thead>
	<tr class="success">

      	<th>平台用户名</th>
	<th>最近登入IP</th>
	<th>最近登入时间</th>
	</tr>
	</thead>
	<tbody>


<?php
foreach ($backlogin_select->result() as $row)
{
	echo '<tr class="name"><td>'.$row->username.'</td>';
        echo '<td>'.$row->lastlogin_ip.'</td>';
	echo '<td>'.date('Y-m-d h:i:s',$row->lastlogin_times).'</td>';
	echo '</tr>';
	echo '</tbody>';
}
?>

</tbody>
</table>
