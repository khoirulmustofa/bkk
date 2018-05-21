<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Jobs_applied_model extends CI_Model
{   
    function __construct()
    {
        parent::__construct();
    }
    
    // insert data
    function insert_jobs_applied($data)
    {
        $this->db->insert('km_jobs_applied', $data);
    }
}
    