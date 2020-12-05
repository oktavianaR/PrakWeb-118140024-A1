<?php
class Model extends CI_model{
	public function getUsername($username){
		return $this->db->get_where('user', ['username'=>$username])->row_array();
	}
		public function getPassword($password){
		return $this->db->get_where('user', ['password'=>$password])->row_array();
	}
	public function isLoginSessionExpired(){
		$login_session_duration = 5;
		$current_time = time();
		if(isset($_SESSION['loggedin_time']) and isset($_SESSION['username'])){
			if((time() - $this->session->userdata('loggedin_time')) > $login_session_duration){
				return true;
			}
		}
		return false;
	}
}