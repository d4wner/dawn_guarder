<?php
class User extends WoniuModel{

	public function __construct(){
		parent::__construct();
	}

	public function add_session($name=''){
		$_SESSION['login_in'] = True;
		$_SESSION['name'] = $name;
	}

	public function is_login(){
		return $this->input->session('login_in')?True:False;
	}


}

?>
