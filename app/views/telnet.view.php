<body onload="sql('linux','#linux')" background="<?php echo $site_url;?>app/views/img/background5.jpg">

<?php include($this->view_path('header'));?>
<?php include($this->view_path('check_login'));?>

<div class="tabbable" id="tabs-828235">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-403026"  onclick="sql('linux','#linux')" data-toggle="tab">Linux</a>
					</li>
					<li>
						<a href="#panel-238615" onclick="sql('win','#win')" data-toggle="tab">Windows</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-403026">
						<p>
		<html>
		<table class="table table-bordered table-hover">
					  <caption>本日服务器登陆记录</caption>
					  <thead>
				    <tr class="success">
				
      	             	<th>登录日期</th>
				      <th>上线时间</th>
					  <th>在线用户</th>
						<th>来访IP</th>
				    </tr>
					  </thead>
			 <tbody id="linux">
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
					  <caption>本日服务器登陆记录</caption>
					  <thead>
				    <tr class="success">
			          <th>登录日期</th>
                      <th>上线时间</th>
                      <th>在线用户</th>
                        <th>来访IP</th>

					</tr>
					  </thead>
			 <tbody id='win'>
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
function sql(server_type,target)
{
//alert('123');
//alert(sql_type);
	params='?home.telnet_data&server_type='+server_type;
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
