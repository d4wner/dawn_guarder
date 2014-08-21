<?php


	#$id = $_GET["id"];
		switch($id){
		case "folder":
			echo "folder";
			include($this->view_path('file'));
			break;
		case "backdoor":
			include($this->view_path('scan'));
			break;
		case "seclog":
			include($this->view_path('tab_show'));
			break;
		case "sql":
			include($this->view_path('sheet_show'));
			break;
		case "telnet":
			include($this->view_path('tab_show'));
			break;
		case "login":
			include($this->view_path('tab_show'));
			break;
		case "exception":
			include($this->view_path('tab_show'));
			break;

		default:
			include($this->view_path('pic_show'));
	}



?>
