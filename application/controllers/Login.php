<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function connect()
	{
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('login','Email Address','required|valid_email');
		$this->form_validation->set_rules('pass','Password', 'trim|required|min_length[8]');

		if ($this->form_validation->run() == FALSE) {
			echo $this->form_validation->error_string();
			return false;
		}

		if ($this->checkCredentials($_POST['login'], $_POST['pass']))
		{
			echo "OK";
			return true;
		}
		else echo "Unknown User/Pass. Try again...";
		return false;
	}

	private function checkCredentials($login, $pass)
	{
		log_message('debug', 'test');
		return false;
	}
}
