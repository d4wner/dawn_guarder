<?php include($this->view_path('header'));?>
<?php include($this->view_path('check_login'));?>
<script>
          var myDate = new Date();
	  p = myDate.getHours();
	  $(function(){
		run();
	  });
	  function run(){
			
			$("div[class=bar]").css("width",p+"%");
			if(p<100){
				var timer=setTimeout("run()",900000);
			}else{
				alert("今日网站安全监控完成！");
			}
	   }
</script>


<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container-fluid">
						<a class="btn btn-navbar" data-target=".navbar-responsive-collapse" data-toggle="collapse"></a> <a class="brand" href="#">Web安全监控系统</a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							<ul class="nav">
								<li class="active">
									<a href="#">主页</a>
								</li>
								<li>
									<a href="#">说明文档</a>
								</li>
								<li>
									<a href="#">联系作者</a>
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
									<a href="#">admin</a>
								</li>
								<li class="divider-vertical">
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">用户选项</a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">用户登出</a>
										</li>
										<li>
											<a href="#">更换账户</a>
										</li>
									
										<!--<li class="divider">
										</li>
										<li>
											<a href="#">链接3</a>
										</li>-->
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
					人工审计
				</li>
				<li class="active">
					<a href="#">文件管理</a>
				</li>
				<li>
					<a href="#">后门扫描</a>
				</li>
				<li>
					<a href="#">安全日志</a>
				</li>
				<li class="nav-header">
					监控报表
				</li>
				<li>
					<a href="#">SQL操作记录</a>
				</li>
				<li>
					<a href="#">服务器登陆</a>
				</li>
				<li>
					<a href="#">平台登入记录</a>
				</li>
				<li>
					<a href="#">异常访问记录</a>
				</li>
				<li class="divider">
				</li>
				<li>
					<a href="#">讨论提交区</a>
				</li>
			</ul>
			<form class="form-search">
				<input class="input-medium search-query" type="text" /> <button type="submit" class="btn">查找</button>
			</form>
		</div>
		<div class="span9">
			<div class="carousel slide" id="carousel-366505">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-366505">
					</li>
					<li data-slide-to="1" data-target="#carousel-366505">
					</li>
					<li data-slide-to="2" data-target="#carousel-366505">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="<?php echo $theme_url;?>img/1.jpg" />
						<div class="carousel-caption">
							<h4>
								棒球
							</h4>
							<p>
								棒球运动是一种以棒打球为主要特点，集体性、对抗性很强的球类运动项目，在美国、日本尤为盛行。
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="<?php echo $theme_url;?>img/2.jpg" />
						<div class="carousel-caption">
							<h4>
								冲浪
							</h4>
							<p>
								冲浪是以海浪为动力，利用自身的高超技巧和平衡能力，搏击海浪的一项运动。运动员站立在冲浪板上，或利用腹板、跪板、充气的橡皮垫、划艇、皮艇等驾驭海浪的一项水上运动。
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="<?php echo $theme_url;?>img/3.jpg" />
						<div class="carousel-caption">
							<h4>
								自行车
							</h4>
							<p>
								以自行车为工具比赛骑行速度的体育运动。1896年第一届奥林匹克运动会上被列为正式比赛项目。环法赛为最著名的世界自行车锦标赛。
							</p>
						</div>
					</div>
				</div> <a data-slide="prev" href="#carousel-366505" class="left carousel-control">‹</a> <a data-slide="next" href="#carousel-366505" class="right carousel-control">›</a>
			</div>
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
