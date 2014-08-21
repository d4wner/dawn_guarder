
<?php include($this->view_path('check_login'));?>
<?php include($this->view_path('header'));?>

<script>
	
          var myDate = new Date();
	  p = myDate.getHours();
	  $(function(){
		run();
		rate();
	  });
	  function rate(){
		
		rates.innerHTML = Math.round(p*100/24)+"%";	

	}
	  function run(){
			
			$("div[class=bar]").css("width",p/24*100+"%");
			if(p/24*100<100){
				var timer=setTimeout("run()",900000);
			}else{
				alert("今日网站安全监控完成！");
			}
	   }

</script>
<body background="<?php echo $site_url;?>app/views/img/background3.jpg">
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container-fluid">
						<a class="btn btn-navbar" data-target=".navbar-responsive-collapse" data-toggle="collapse"></a> <a class="brand" href="javascript:void(0);" onClick="AJAX('<?php echo $site_url;?>index.php?home.ajax&action=base_pic');">Web安全监控系统</a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							<ul class="nav">
								<li class="active">
									<a href="javascript:void(0);" onClick="AJAX('<?php echo $site_url;?>index.php?home.ajax&action=base_pic');">主页</a>
								</li>
								<li>
									<a href="<?php echo $site_url;?>readme.html" target='blank'>说明文档</a>
								</li>
								<li>
									<a href="http://www.dawner.info" target='blank'>联系作者</a>
								</li>
								<!--
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">下拉菜单</a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">下拉导航1</a>
										</li>
										<li>
											<a href="#">下拉导航2</a>
										</li>
										<li>
											<a href="#">其他</a>
										</li>
										<li class="divider">
										</li>
										<li class="nav-header">
											标签
										</li>
										<li>
											<a href="#">链接1</a>
										</li>
										<li>
											<a href="#">链接2</a>
										</li>-->

									</ul>
								</li>
							</ul>
							<ul class="nav pull-right">
								<li>
									<a href="#"><?php if (!empty($_SESSION['name'])){ echo $_SESSION['name'];}?></a> 
								</li>
								<li class="divider-vertical">
								</li>
								<li class="dropdown">
									<a href="<?php echo $site_url;?>index.php?home.logout" >登出</a>
									<!--<ul class="dropdown-menu">
										<li>
											<a href="#">用户登出</a>
										</li>
										<li>
											<a href="#">更换账户</a>
										</li>
									
										<!-- 
										<li class="divider">
										</li>
										<li>
											<a href="#">链接3</a>
										</li>
										-->
									</ul>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span3">
			<ul class="nav nav-list well">
				<li class="nav-header">
					==用户相关==
				</li>
				<!--<li class="active">-->
				<li>
					<a href="javascript:void(0);" onClick="AJAX('<?php echo $site_url;?>index.php?home.ajax&action=user_manage');">用户管理</a>
				</li>

				<li class="nav-header">
					==人工审计==
				</li>
				<!--<li class="active">-->
				<li>
					<a href="javascript:void(0);" onClick="AJAX('<?php echo $site_url;?>index.php?home.ajax&action=folder');">文件管理</a>
				</li>
				<li>
					<a href="javascript:void(0);" onClick="AJAX('<?php echo $site_url;?>index.php?home.ajax&action=backdoor');">后门扫描</a>
				</li>
				<li>
					<a href="javascript:void(0);" onClick="AJAX('<?php echo $site_url;?>index.php?home.ajax&action=seclog');">安全日志</a>
				</li>
				<li class="nav-header">
					==监控报表==
				</li>
				<li>
					<a href="javascript:void(0);" onClick="AJAX('<?php echo $site_url;?>index.php?home.ajax&action=sql');">SQL敏感记录</a>
				</li>
				<li>
					<a href="javascript:void(0);" onClick="AJAX('<?php echo $site_url;?>index.php?home.ajax&action=telnet');">服务器登陆</a>
				</li>
				<li>
					<a href="javascript:void(0);" onClick="AJAX('<?php echo $site_url;?>index.php?home.ajax&action=login');">平台登入记录</a>
				</li>
				<!--
				<li>
					<a href="javascript:void(0);" onClick="AJAX('<?php echo $site_url;?>index.php?home.ajax&action=exception');">异常访问来源</a>
				</li>
				-->
				<li class="divider">
				</li>
				<li>
					<a href="javascript:void(0);" onClick="AJAX('<?php echo $site_url;?>index.php?home.ajax&action=feedback');">问题上报区</a>
				</li>
			</ul>
			<form class="form-search" target='_blank'  action="<?php echo $site_url;?>index.php?home.ajax&action=search" method="post" id="search_value" name="search_value">
				<input class="input-medium search-query" type="text"  id="search_value" name="search_value"/> 
			<button type="submit" class="btn">IP定位</button>
			</form>
		</div>
		<div class="span9" id="span9">
			<?php include($this->view_path('base_pic'));?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span5">
			<p>
				<span class="badge">今日安全监控完成度</span>
			</p>
			<div class="progress progress-striped active progress-warning">
				<div class="bar">
					
				</div>
<span class="badge" id="rates"></span>
			</div>
		</div>
		<div class="span2">
		</div>
		<div class="span5">
			<div class="alert">
				 <button type="button" class="close" data-dismiss="alert">×</button>
				<h4>
					亲爱的用户!
				</h4> <strong>请保证你的用户平台密码的安全。</strong> 
			</div>
		</div>
	</div>
</div>

<?php include($this->view_path('footer'));?>
</body>

