<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        if ((!isset($_SESSION['Logged'])) || ($_SESSION['Logged'] !== TRUE)) {
            redirect("/");
        }

        $this->load->database();
	}

	public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
        // show_error('test', 'test', 'error_general', $status_code = 500);
    }

    public function ListWebSites()
    {
        $this->load->view('templates/header');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }


    public function Newsite()
    {
        $this->load->view('templates/header');
        $this->load->view('listhosts');
        $this->load->view('templates/footer');
    }

    public function RunScript()
    {
        $this->load->library('runscript');
        $this->runscript->some_method();
    }
}