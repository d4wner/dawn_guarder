<?php 
          
class Home extends WoniuController {

	public function __construct() {
		parent::__construct(); 
	 }

	public function doHello(){
          echo 'Hello,world!';
      }
	  public function doSearch() {

		error_reporting(0);
		$search_value = $this->input->get_post('search_value');
		list($search_type,$search_ip) = explode(':',$search_value);
		if ($search_type==''||$search_ip=='')
		{
			echo '搜索参数格式错误！';
			echo '</br>';
			echo '搜索格式-->iis6:192.168.121.1';
			exit(0);
		
		}
		#$this->database();
		#var_dump($this->input->session('login_in'));
		$dbconfig=array(
			'hostname'=>'localhost'
			,'port'=>3306
			,'username'=>'root'
			,'password'=>'a123456'
			,'database'=>'dawn_guard_log'
			,'dbprefix'=>''
			,'pconnect'=>TRUE
			,'db_debug'=> TRUE
			,'char_set'=>'utf8'
			,'dbcollat'=>'utf8_general_ci'
			,'swap_pre'=>''
			,'autoinit'=>TRUE
			,'stricton'=>FALSE
		);
		$dbconfig['dbdriver'] = "mysql";
		$db_log=$this->database($dbconfig,true);
		$log_date_search="select log_date,count(1) from ".$search_type." where client_ip='".$search_ip."' group by log_date desc";
		$attack_type_search="select attack_type,count(1) from ".$search_type." where client_ip='".$search_ip."' group by attack_type desc";

		if ($log_date_search==''||$attack_type_search=='')
		{
			echo '搜索结果出错！';
			exit(0);
		
		}
		$log_date_query = $db_log->query($log_date_search);
		$attack_type_query = $db_log->query($attack_type_search);
		$data=array(
			'log_date_query'=>$log_date_query,
			'attack_type_query'=>$attack_type_query

			);
        $this->view('search',$data);

      }
	  public function doIndex() {
		#var_dump($this->input->session('login_in'));
        $data=array('value'=>'');
        $this->view('login',$data);

	  }


	  public function doUser_manage() {
		#var_dump($this->input->session('login_in'));
		if($_SESSION['name'] != 'demon')
		{
			echo 'Access  denied.';
			return 0;
		}
		global $site;
		$this->database();
		$query='select * from sys_user';
		$user_select = $this->db->query($query);

		$data=array(
			'site_url'=>$site['url'],
			'title'=>$site['title'],
			'theme_url' => $site['url'].'app/views/',
			'user_select'=> $user_select 
		);
        $this->view('user_manage',$data);

	  }


	  public function doUser_edit() {
		if($_SESSION['name'] != 'demon')
		{
			echo 'Access denied.';
			return 0;
		}
		#var_dump($this->input->session('login_in'));
		global $site;
		#$user = $this->input->get('del_user');
        #$username = $this->input->get_post('username');
		#$password = $this->input->get_post('password');
		$this->database();
		if($user = $this->input->get('del_user'))
		{
		$del_query='delete from sys_user where username != "demon" and username ="'.$user.'"';
		$this->db->query($del_query);
		}
		else if ($username = $this->input->get_post('username') and $password = $this->input->get_post('password'))
		{
		$exsit_q='select * from sys_user where username = "'.$username.'"';
		$exsit_query=$this->db->query($exsit_q);
		if ($exsit_query->num_rows() > 0)
		{
			$update_q='update sys_user set password = "'.$password.'" where username = "'.$username.'"';
			echo $update_q;
			$update_query=$this->db->query($update_q);
		}
		else
		{
			$insert_q='insert into sys_user (username,password,type) values("'.$username.'","'.$password.'",0)';
			echo $insert_q;
			$insert_query=$this->db->query($insert_q);
		}
		}


		$data=array(
			'site_url'=>$site['url'],
			'title'=>$site['title'],
			'theme_url' => $site['url'].'app/views/',
		);
        $this->view('user_edit',$data);

	  }


	  public function doBackdoor() {
		global $site;
		#var_dump($this->input->session('login_in'));
		$data=array(
			'backdoor_url'=>$site['url'].'index.php?home.backdoor',
			'site_url'=>$site['url']
		);
        $this->view('backdoor',$data);

	  }


	  public function doCheck_login() {
		#$this->input->session('login_in');
		global $site;
		$this->model('User');
		if(!$this->model->user->is_login())
			{
				echo 'Sorry sir,please login first.';
				$this->redirect($site['url'].'index.php?home.index','马上跳转首页...');
			}
		else if(!empty($_SESSION['name']))
		{
			$data=array(
				'name'=>$_SESSION['name'],
				'site_url'=>$site['url'],
				'title'=>$site['title']
			);
		$this->view('check_login',$data);
		$this->database();
		date_default_timezone_set('PRC');
		$lastlogin_times = time();
		$lastlogin_ip=$_SERVER["REMOTE_ADDR"];
		$query='update back_login set  lastlogin_times = "'.$lastlogin_times.'" ,lastlogin_ip = "'.$lastlogin_ip.'" where username = "'.$_SESSION['name'].'"';
		$this->db->query($query);
		#echo time();
		#echo date('Y-m-d h:i:s',time());
		#echo $query;
		$this->redirect($site['url'].'index.php?home.back','欢迎回来...正在登录');
		}
	  }

	  public function doFile($dirname='.'){
		global $site;
		$url = $site['url'].'index.php?home.file/';
		#$data=array('url'=>$url,'dir_name'=>$dirname);

		$data=array(
			'url'=>$url,
			'dir_name'=>$dirname,
			'site_url'=>$site['url'],
			'title'=>$site['title'],
			'theme_url' => $site['url'].'app/views/'
		);
        $this->view('file',$data);
	  }

	  public function doFile_read(){
		global $site;
		$url = $site['url'].'index.php?home.file/';

		if ($this->input->get('file_url')=='')
		{
		 $file_url_name = '';	
		}
		else
		{
		$file_url_name = $this->input->get('file_url');
		}
		#$file_handle = fopen($file_url_name, "r");
		if(file_exists($file_url_name)) 
		{
		$content=file_get_contents($file_url_name);
		echo $content;
		#return $content;
		}
		#fclose($file_handle);
        #$this->view('file_read',$data);
	  }




      public function doLogout() {
			
		  global $site;
		  session_destroy();
		  $this->redirect($site['url'].'index.php?home.index','用户正在登出...');
		  unset($_SESSION['name']);  
		  $data=array(
			'site_url'=>$site['url'],
			'title'=>$site['title'],
			'theme_url' => $site['url'].'app/views/',
			 );
       		$this->view('logout',$data);
      }

	  public function doLogin() {
		global $site;
		$this->database();
        $username = $this->input->get_post('username');
		$password = $this->input->get_post('password');
		$login_q='select * from sys_user where username = "'.$username.'" and password = "'.$password.'"';
		$query = $this->db->query($login_q);
		if ($query->num_rows() > 0)
			{
			echo 'Welcome,master!';
			$this->model('User');
			$this->model->user->add_session($username);
			echo $_SESSION['name'];
			$_SESSION['login_in'] = True;
			$this->redirect($site['url'].'index.php?home.check_login');
			#if($this->model->user->is_login())
			#	{
			#		echo 'nohello!';
			#	}
					
			}
		else
		{
			echo 'Sorry,try again.';
			$this->redirect($site['url'].'index.php?home.index');
		}
	}

	  public function doBack() {
		
		global $site;
		#var_dump($this->input->session('login_in'));
		$data=array(
			'site_url'=>$site['url'],
			'title'=>$site['title'],
			'theme_url' => $site['url'].'app/views/',
		);
       		$this->view('back',$data);
				


	  }

	  public function doMessage() {
		$this->database();
		global $site;
		#var_dump($this->input->session('login_in'));
		#header("content-Type: text/html; charset=utf-8");
		
		$content_sql = "select * from content"; //搜索数据表content
		#var_dump($this);
		$resule = $this->db->query($content_sql);
		#echo $resule;
		$data = array(

			'site_url'=>$site['url'],
			'title'=>$site['title'],
			'theme_url' => $site['url'].'app/views/',
			'resule' => $resule
		);
		$this->view('message',$data);
				

	  }

	public function doAjax() {
	global $site;
	$file_path = $site['url'].'index.php?home.file';
	$file_feedback_path = $site['url'].'index.php?home.feedback';
	$file_message_path = $site['url'].'index.php?home.message';
	$backdoor_path = $site['url'].'index.php?home.backdoor';
	$file_sql_path = $site['url'].'index.php?home.sql_show';
	$file_telnet_path = $site['url'].'index.php?home.telnet';
	$file_usermanage_path = $site['url'].'index.php?home.user_manage';
	$file_backlogin_path = $site['url'].'index.php?home.back_login';
	$act = $this->input->get('action');
	#echo $act[0];
	#echo $act;
	switch($act){
		case "folder":
			#include($this->view_path('file'));
			echo "<iframe height='400' width='900'  frameborder='0' src=$file_path></iframe>";
	
			break;
		case "backdoor":
			#include($this->view_path('backdoor'));
			#$this->doBackdoor();
			echo "<iframe height='400' width='900'  frameborder='0' src=$backdoor_path></iframe>";
			break;
		case "seclog":
			include($this->view_path('log_note'));
			break;
		case "sql":
			echo "<iframe height='400' width='900'  frameborder='0' src=$file_sql_path></iframe>";
			break;
		case "telnet":
			echo "<iframe height='400' width='900'  frameborder='0' src=$file_telnet_path></iframe>";
			#include($this->view_path('telnet'));
			break;
		case "login":
			#include($this->view_path('back_login'));
			echo "<iframe height='400' width='900'  frameborder='0' src=$file_backlogin_path></iframe>";
			break;
		#case "exception":
			#include($this->view_path('tab_show'));
			#break;
		case "feedback":
			#$this->doFeedback();
			#include($this->view_path('feedback'));
			echo "<iframe height='400' width='900'  frameborder='0' src=$file_feedback_path></iframe>";
			break;
		case "message":
			#$this->doMessage();
			echo "<iframe height='400' width='900'  frameborder='0' src=$file_message_path></iframe>";
			break;
		case "search":
			$this->doSearch();
			#echo "<iframe height='400' width='900'  frameborder='0' src=$file_message_path></iframe>";
			break;
		case "user_manage":
			#$this->doUser_manage();
			echo "<iframe height='400' width='900'  frameborder='0' src=$file_usermanage_path></iframe>";
			break;

		default:
			include($this->view_path('base_pic'));
	}
		
      }


	  public function doBack_login() {
		if($_SESSION['name'] != 'demon')
		{
			echo 'Access  denied.';
			return 0;
		}
		$this->database();
		global $site;
		$query='select * from back_login';
		$backlogin_select = $this->db->query($query);
		$data=array(
			'site_url'=>$site['url'],
			'title'=>$site['title'],
			'theme_url' => $site['url'].'app/views/',
			'backlogin_select' => $backlogin_select
		); 
			$this->view('back_login',$data);
	  }

	  public function doTelnet() {
		#$this->database();	
		global $site;
		$data=array(
			'site_url'=>$site['url'],
			'title'=>$site['title'],
			'theme_url' => $site['url'].'app/views/',
		);
       		$this->view('telnet',$data);
				
	  }



	  public function doTelnet_data() {
		error_reporting(0);
		#$this->database();	
		global $site;
		$current_date=date("Y-m-d");
		#var_dump($this->input->session('login_in'));
		#$title = $this->input->get_post('title');
		#$patch = $this->input->get_post('content');
		#$content = str_replace("","<br />",$patch);
		#if ($title!=''||$content!='')
		#{
		$server_type = $this->input->get('server_type');
		if ($server_type=='linux')
		{

		$dbconfig=array(
			'hostname'=>'localhost'
			,'port'=>3306
			,'username'=>'root'
			,'password'=>'a123456'
			,'database'=>'dawn_guard_log'
			,'dbprefix'=>''
			,'pconnect'=>TRUE
			,'db_debug'=> TRUE
			,'char_set'=>'utf8'
			,'dbcollat'=>'utf8_general_ci'
			,'swap_pre'=>''
			,'autoinit'=>TRUE
			,'stricton'=>FALSE
		);
		$dbconfig['dbdriver'] = "mysql";
		$db_log=$this->database($dbconfig,true);
		#$my_sql = "select * from mysql_seclog where event_time like '%".$current_date."%'";
		$linux_sql = "select * from linux_log where date like '%2014-04-23%'";
		#var_dump($this->db);
		$linux_query = $db_log->query($linux_sql);
		#return $my_query;
		foreach ($linux_query->result() as $row)
		{		
				echo '<tr class="info">';
			    echo '<td>'.$row->date.'</td>';
				echo '<td>'.$row->time.'</td>';
				echo '<td>'.$row->user.'</td>';
				echo '<td>'.$row->ip.'</td>';
				echo '</tr>';
		}
		}
		elseif ($server_type=='win')
		{


		$dbconfig=array(
			'hostname'=>'192.168.77.131'
			,'port'=>3306
			,'username'=>'root'
			,'password'=>'a123456'
			,'database'=>'dawn_guard_log'
			,'dbprefix'=>''
			,'pconnect'=>TRUE
			,'db_debug'=> TRUE
			,'char_set'=>'utf8'
			,'dbcollat'=>'utf8_general_ci'
			,'swap_pre'=>''
			,'autoinit'=>TRUE
			,'stricton'=>FALSE
		);
		$dbconfig['dbdriver'] = "mysql";	
		$db_log=$this->database($dbconfig,true);
		#$my_sql = "select * from mysql_seclog where event_time like '%".$current_date."%'";
		$win_sql = "select * from win_log where date like '%2014-04-25%'";
		#var_dump($this->db);
		$win_query = $db_log->query($win_sql);
		#return $my_query;
		foreach ($win_query->result() as $row)
		{		
				echo '<tr class="info">';
			    echo '<td>'.$row->date.'</td>';
				echo '<td>'.$row->time.'</td>';
				echo '<td>'.$row->user.'</td>';
				echo '<td>'.$row->ip.'</td>';
				echo '</tr>';
		}
		}
		else
		{
		echo  "Data is Null";
		}
		#}
		#$data=array(
		#	'site_url'=>$site['url'],
		#	'title'=>$site['title'],
		#	'theme_url' => $site['url'].'app/views/',
		#	'sql_query' => $query
		#);
       	#	$this->view('sql_show',$data);
				
	  }

	  public function doSql_show() {
		#$this->database();	
		global $site;
		#$current_date=date("Y-m-d");
		#var_dump($this->input->session('login_in'));
		#$title = $this->input->get_post('title');
		#$patch = $this->input->get_post('content');
		#$content = str_replace("","<br />",$patch);
		#if ($title!=''||$content!='')
		#{
		#$sql = "select * from mysql_seclog where event_time like '%".$current_date."%'";
		#var_dump($this->db);
		#$query = $this->db->query($sql);
		#}
		$data=array(
			'site_url'=>$site['url'],
			'title'=>$site['title'],
			'theme_url' => $site['url'].'app/views/',
		);
       		$this->view('sql_show',$data);
				
	  }

	  public function doSql_data() {
		error_reporting(0);
		#$this->database();	
		global $site;
		$current_date=date("Y-m-d");
		#var_dump($this->input->session('login_in'));
		#$title = $this->input->get_post('title');
		#$patch = $this->input->get_post('content');
		#$content = str_replace("","<br />",$patch);
		#if ($title!=''||$content!='')
		#{
		$sql_type = $this->input->get('sql_type');
		if ($sql_type=='mysql')
		{

		$dbconfig=array(
			'hostname'=>'localhost'
			,'port'=>3306
			,'username'=>'root'
			,'password'=>'a123456'
			,'database'=>'dawn_guard_log'
			,'dbprefix'=>''
			,'pconnect'=>TRUE
			,'db_debug'=> TRUE
			,'char_set'=>'utf8'
			,'dbcollat'=>'utf8_general_ci'
			,'swap_pre'=>''
			,'autoinit'=>TRUE
			,'stricton'=>FALSE
		);
		$dbconfig['dbdriver'] = "mysql";
		$db_log=$this->database($dbconfig,true);
		#$my_sql = "select * from mysql_seclog where event_time like '%".$current_date."%'";
		$my_sql = "select * from mysql_seclog where event_time like '%2014-04-03%'";
		#var_dump($this->db);
		$my_query = $db_log->query($my_sql);
		#return $my_query;
		foreach ($my_query->result() as $row)
		{		
				echo '<tr class="warning">';
			    echo '<td>'.$row->event_time.'</td>';
				echo '<td>'.$row->user_host.'</td>';
				echo '<td>'.$row->argument.'</td>';
				echo '</tr>';
		}
		}
		elseif ($sql_type=='mssql')
		{
	
		$dbconfig=array(
			'hostname'=>'192.168.77.131'
			,'port'=>3306
			,'username'=>'root'
			,'password'=>'a123456'
			,'database'=>'dawn_guard_log'
			,'dbprefix'=>''
			,'pconnect'=>TRUE
			,'db_debug'=> TRUE
			,'char_set'=>'utf8'
			,'dbcollat'=>'utf8_general_ci'
			,'swap_pre'=>''
			,'autoinit'=>TRUE
			,'stricton'=>FALSE
		);
		$dbconfig['dbdriver'] = "mysql";
		$db_log=$this->database($dbconfig,true);
		
		$ms_sql = "select * from mssql_seclog where EndTime like '%2014-03-31%'";
		$ms_query = $db_log->query($ms_sql);

		foreach ($ms_query->result() as $row)
		{		
				echo '<tr class="warning">';
			    echo '<td>'.$row->EndTime.'</td>';
				echo '<td>'.$row->DatabaseUserName.'</td>';
				echo '<td>'.$row->TextData.'</td>';
				echo '</tr>';
		}
		}
		else
		{
		return "empty";
		}
		
       	
				
	  }

	  public function doFeedback() {
		$this->database();	
		global $site;
		#var_dump($this->input->session('login_in'));
		$title = $this->input->get_post('title');
		$patch = $this->input->get_post('content');
		$content = str_replace("","<br />",$patch);
		if ($title!=''||$content!='')
		{
		$sql = "insert into content (name,title,content) values ('admin','$title','$content')";
		#var_dump($this->db);
		$query = $this->db->query($sql);
		}
		$data=array(
			'site_url'=>$site['url'],
			'title'=>$site['title'],
			'theme_url' => $site['url'].'app/views/'
		);
       		$this->view('feedback',$data);
				


	  }
	 #public function doBase() {
		
		#global $site;
		#var_dump($this->input->session('login_in'));
		#$data=array(
			#'site_url'=>$site['url'],
			#'title'=>$site['title'],
			#'theme_url' => $site['url'].'app/views/',
		#);
        #$this->view('base',$data);

      #}
 }
 ?>
