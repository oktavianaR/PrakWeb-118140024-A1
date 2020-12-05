<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Model','model_model');
	}
	
	public function index(){
		if($this->session->userdata('user')){
			redirect('user');
		}
		$this->load->view('login/index');
	}

	public function cekLogin(){
		$username = $this->input->post('user_name');
		$password = $this->input->post('password');
		$getUser = $this->model_model->getUsername($username);
		$getPass = $this->model_model->getPassword($password);
		if($getUser && $getPass){
			$data=[
				'username'=>$username,
				'password'=>$password,
				'loggedin_tie'=>time()
			];
			$this->session->set_userdata($data);
			redirect('user');
		}else{
			$this->session->set_flashdata('message', '<p>Username atau Password Salah! </p>');
			redirect('login');
		}
	}
}