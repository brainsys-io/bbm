<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Runscript
{
    public function __construct()
    {
        $CI =& get_instance();
        $CI->load->helper('flush');
    }

    public function some_method()
    {

        kill_buffer();

        for ($x = 0; $x < 20; $x++)
        {
          echo date('H:i:s') . '<br>';
          sleep(1);
        }
    }
}