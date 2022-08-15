<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->model('DataModel');
	}

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
			$this->DataModel->save_date($data);
			echo "Successfully Registered";
		}
	}

	public function login()
	{
		$this->load->view('login_page');

		if(isset($_POST['login_here']))
		{
			$user_email = $this->input->post('email');
			$user_password = md5($this->input->post('password'));

			$user_email_validity = $this->DataModel->find_email($user_email);

			if($user_email_validity == NULL) echo "No record. Please Register.";
			else $user_db_password = $this->DataModel->find_password($user_email);

			//echo $user_db_password->password;
			if($user_db_password->password != $user_password)
				 echo "Wrong Password";
			else
				{
					$user_status = $this->DataModel->user_status($user_email);

					if($user_status->is_admin == 1) echo "Admin";
					else  echo "User";
				}
		}
	}
}
