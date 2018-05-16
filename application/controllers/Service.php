<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        if ($_SESSION['Logged'] !== TRUE) redirect('/');

        $this->load->database();
	}

	public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
        // show_error('test', 'test', 'error_general', $status_code = 500);
    }
}