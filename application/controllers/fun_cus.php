<?php
class fun_cus extends CI_Controller {

	public function addCash()
	{	
		$this->load->model('customer_function');
		
		$this->customer_function->addCashCustomer($_SESSION['id'],$_POST['amountcash']);
		redirect(base_url('index.php/Welcome/FirstPage'));
	}

	public function getRegis()
	{
		$this->load->model('customer_function');
		$this->customer_function->RegisDB($_POST);
		redirect(base_url());
		
	}


}
?>
