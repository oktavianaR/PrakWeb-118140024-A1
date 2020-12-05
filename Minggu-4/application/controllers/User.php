<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Model', 'model_model');
	}

	public function index(){
		if ($this->session->userdata('username')==NULL) {
			$this->session->set_flashdata('message', '<p> Login dulu</p>');
			redirect('login');
		}
		if($this->session->userdata('username') != NULL) {
			if($this->model_model->isLoginSessionExpired()){
				$this->session->set_flashdata('message','<p> Login Sesi telah habis, silahkan login kembali!</p>');
				redirect('user/logout');
			}
		}
		$sessionUser=$this->session->userdata('username');
		$data['user']=$this->model_model->getUsername($sessionUser);
		$this->load->view('user/index',$data);
	}
	public function logout(){
		if($this->session->flashdata('message') != NULL){
			$this->session->set_flashdata('message','<p>Login sesi telah habis, silahkan login kembali!</p>');
			$this->session->unset_userdata('username');
			redirect('login');
		}else{
			$this->session->set_flashdata('message','<p>Sukses Logout!</p>');
			$this->session->unset_userdata('username');
			redirect('login');
		}
	}
}