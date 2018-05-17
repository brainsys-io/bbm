<?php

class Migrate extends CI_Controller
{
    public function __construct()
    {
        include(FCPATH.'application/config/database.php');
        if (!file_exists($db['default']['database']))
            $this->createDB($db['default']['database']);

        parent::__construct();
    }

    public function createDB($dbname) {
        echo "Database missing...<br/>";
        if (file_exists("/usr/bin/sqlite3")) {
            echo "SQLite3 found...<br/>Creating DB file... ";
            system("/usr/bin/sqlite3 ".$dbname);
            echo 'OK<br/>';
        } else die("Install SQLite3: sudo apt-get install sqlite3 php-sqlite");
    }

    public function index()
    {
        $this->load->library('migration');

        log_message('debug', $this->migration->current());
        if ($this->migration->current() === FALSE)
        {
            show_error($this->migration->error_string());
        }
    }
}