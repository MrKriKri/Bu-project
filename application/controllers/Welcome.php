<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('tob-bar');
		$this->load->view('footer');
		
	}

	public function FirstPage()
	{
		
		$this->load->view('header');
		$this->load->view('tob-bar-login');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function cash()
	{
		$this->load->view('header');
		$this->load->view('tob-bar-login');
		$this->load->view('pushCash');
		$this->load->view('footer');
		
	}

	public function Regis()
	{
		$this->load->view('header');
		$this->load->view('tob-bar');
		$this->load->view('regis');
		$this->load->view('footer');
		
	}

	public function showRow($eventid)
	{
		$data= array('eventid'=>$eventid);
		$this->load->view('header');
		$this->load->view('tob-bar-login');
		$this->load->view('showtime',$data);
		$this->load->view('footer');
	}

	public function showzone($rowid)
	{
		$data= array('rowid'=>$rowid);
		$this->load->view('header');
		$this->load->view('tob-bar-login');
		$this->load->view('showzone',$data);
		$this->load->view('footer');
	}

	public function ticket($zoneid)
	{
		$data= array('zoneid'=>$zoneid);
		$this->load->view('header');
		$this->load->view('tob-bar-login');
		$this->load->view('showticket',$data);
		$this->load->view('footer');
	}

	public function buy($ticketid)
	{
			$this->load->model('customer_function');
			$chk = $this->customer_function->buyTicket($_SESSION['id'],$ticketid);
			if($chk){
			redirect(base_url('index.php/Welcome/FirstPage'));
			}else{
			redirect(base_url('index.php/Welcome/ticket/'.$_GET['zoneid']));
			}
	}

	public function myticket()
	{
		$this->load->view('header');
		$this->load->view('tob-bar-login');
		$this->load->view('my_tic');
		$this->load->view('footer');
	}
}
	
