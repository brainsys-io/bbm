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

	public function disconnect()
	{
		$this->load->library('session');
		session_destroy();
		redirect("/");
	}

	public function connect()
	{
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('login','Email Address','required|valid_email');
		$this->form_validation->set_rules('pass','Password', 'trim|required|min_length[8]');
		log_message('debug', var_export('toto', true));
		if ($this->form_validation->run() == FALSE) {
			$return = array('auth' => FALSE, 'msg' => $this->form_validation->error_string(), 'dest' => '');
			echo json_encode($return);
			return FALSE;
		}

		if ($this->checkCredentials($_POST['login'], $_POST['pass'])) {
			$return = array('auth' => TRUE, 'msg' => '', 'dest' => base_url('/service'));
			echo json_encode($return);
			return TRUE;
		}
		else {
			$return = array('auth' => FALSE, 'msg' => 'Unknown User/Pass. Try again...', 'dest' => '');
			echo json_encode($return);
			return FALSE;
		}
	}

	private function checkCredentials($login, $pass)
	{
		$this->load->database();
		$this->load->model('Users');
		$row = $this->Users->getUserInfos($login, $pass);
		if (isset($row)) {
			$this->load->library('session');
			$_SESSION['user'] = $row;
			$_SESSION['Logged'] = TRUE;
			log_message('debug', var_export($_SESSION, true));
			return TRUE;
		}
		return FALSE;
	}
}
