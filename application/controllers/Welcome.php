<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function register()
	{
		$this->load->view('registration_form_page');

		if(isset($_POST['register_here']))
		{
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
			);
			$this->StoreDataModel->insert_registered_user($data);
			echo "Data Stored";
		}
	}
}
