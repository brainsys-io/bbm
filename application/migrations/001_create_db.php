<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_db extends CI_Migration
{
    public $scriptName;

    public function __construct()
    {
        parent::__construct();
        $this->scriptName = basename(__FILE__, ".php");
    }

    public function up()
    {
        echo "Running migration script <b>".$this->scriptName."</b><br/>";
        $sql_file = dirname(__FILE__)."/".$this->scriptName.".sql";
        $query = file_get_contents($sql_file);

        $this->db->query($query);
    }

    public function down()
    {
        echo "Rollbacking migration script <b>".$this->scriptName."</b><br/>";
        $this->dbforge->drop_table('rights');
        $this->dbforge->drop_table('users');
    }
}