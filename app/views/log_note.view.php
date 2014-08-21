<?php include($this->view_path('check_login'));?>
<?php include($this->view_path('header'));?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="hero-unit">
				<h3>
					Hello, manager!
				</h3>
				<p>
					这是一个关于本系统常用安全日志简介。
				<br>
					win系统登录日志：c:\windows\syssec.log
				<br>	
					linux下apache/tomcat/ngnix日志：/var/log
				<br>			
					iis6日志：C:\WINDOWS\system32\Logfiles\W3SVC1
				<br>
					本说明仅供参考和配置log.config里的路径之用。
										
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="http://www.dawner.info">参看更多 »</a>
				</p>
			</div>
		</div>
	</div>
</div>
