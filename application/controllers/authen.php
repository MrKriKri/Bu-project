<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class authen extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('authentication');
		
	}

	public function login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$login = $this->authentication->checkLogin($username,$password);
		if($login){
			$_SESSION['username']=$login['username'];
			$_SESSION['id']=$login['ID'];

			redirect(base_url('index.php/Welcome/FirstPage'));
		}else{
			$this->session->set_flashdata('error','Invalid Username or Password');
			redirect(base_url(''));
		}
		
	}

	public function logout()
	{
		unset($_SESSION['ID'],$_SESSION['username']);
		redirect(base_url(''));
	}
}
