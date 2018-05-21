<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aboutus_model extends CI_Model
{

    public $table = 'km_aboutus';
    public $id = 'id_aboutus';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_aboutus_all()
    {
        $this->db->order_by('id_aboutus', 'ASC');
        return $this->db->get('km_aboutus')->result();
    }
    
    // get data by id
    function get_aboutus_by_id($id)
    {
        $this->db->where('id_aboutus', $id);
        return $this->db->get('km_aboutus')->row();
    }

    // get total rows
    function total_rows_aboutus($q = NULL) {
        $this->db->like('id_aboutus', $q);
        $this->db->or_like('company_name', $q);
        $this->db->or_like('company_profile', $q);
        $this->db->or_like('vision', $q);
        $this->db->or_like('mission', $q);
        $this->db->or_like('photo_aboutus', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data_aboutus($limit, $start = 0, $q = NULL) {
        $this->db->order_by('id_aboutus', 'ASC');
        $this->db->like('id_aboutus', $q);
        $this->db->or_like('company_name', $q);
        $this->db->or_like('company_profile', $q);
        $this->db->or_like('vision', $q);
        $this->db->or_like('mission', $q);
        $this->db->or_like('photo_aboutus', $q);
        $this->db->limit($limit, $start);
        return $this->db->get('km_aboutus')->result();
    }
}

