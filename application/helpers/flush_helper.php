<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//kill CI's buffered output and stream realtime
if ( ! function_exists('kill_buffer'))
{
    function kill_buffer()
    {
        $CI =& get_instance();
        //output any CI output up til now
        echo $CI->output->get_output();
        
        //output/wipe buffer and enable implcit flush
        @ob_end_flush();
        ob_implicit_flush(TRUE);
        
        //For some reason about 1kb needs to be sent before realtime output shows up.  Just send a bunch of spaces in a hidden div.
        echo '<div >' . str_repeat('&nbsp;', 170) . '</div>';

        //No headers beyond this point unless they are sent FIRST...
    }
}