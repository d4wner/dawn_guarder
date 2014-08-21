<body onload="sql('mysql','#my')" background="<?php echo $site_url;?>app/views/img/background5.jpg">

<?php include($this->view_path('header'));?>
<?php include($this->view_path('check_login'));?>

<div class="tabbable" id="tabs-828235">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-403026"  onclick="sql('mysql','#my')" data-toggle="tab">Mysql</a>
					</li>
					<li>
						<a href="#panel-238615" onclick="sql('mssql','#ms')" data-toggle="tab">Mssql</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-403026">
						<p>
		<html>
		<table class="table table-bordered table-hover">
					  <caption>本日sql异常记录</caption>
					  <thead>
				    <tr class="success">
				
      	             		      <th>sql执行时间</th>
				      <th>当前执行用户</th>
				      <th>可疑sql语句</th>
				    </tr>
					  </thead>
			 <tbody id="my">
		   	    <!-- <tr class="warning">
			      <td>body_test</td>
			      <td>body_test2</td>
			      <td>body_test2</td>
    			    </tr> -->
  			</tbody>
		</table>

		</html>
						</p>
					</div>
					<div class="tab-pane" id="panel-238615">
						<p>
		<html>
		<table class="table table-bordered table-hover" >
					  <caption>本日sql异常记录</caption>
					  <thead>
				    <tr class="success">
      	             		      <th>sql执行时间</th>
				      <th>当前执行用户</th>
				      <th>可疑sql语句</th>
				    </tr>
					  </thead>
			 <tbody id='ms'>
			<!--
		   	     <tr class="warning">
			      <td>body_test</td>
			      <td>body_test2</td>
			      <td>body_test2</td>
    			    </tr> -->
  			</tbody>
		</table>

		</html>
						</p>
					</div>
				</div>
			</div>


<script type="text/javascript">
function sql(sql_type,target)
{
//alert('123');
//alert(sql_type);
	params='?home.sql_data&sql_type='+sql_type;
	//alert(params);
	$.get(params, function(result)
	{

     	//alert(result);
       //result=result.replace('&gt;','>');
	    //result=result.replace('&lt;','<');

	  //alert("123");
		$(target).html(result);
		$(target).tab('show');
		//alert('hehe');
		//alert(result);
	});

};
</script>

</body>
