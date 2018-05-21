<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Galery_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        /*
         * $this->db->order_by($this->id, $this->order);
         * return $this->db->get($this->table)->result();
         */
    }
    
    // get data by id
    function get_galery_by_id($id)
    {
        $this->db->where('id_galery', $id);
        return $this->db->get('km_galery')->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_galery', $q);
        $this->db->or_like('name_galery', $q);
        $this->db->or_like('patch_galery', $q);
        $this->db->from('km_galery');
        return $this->db->count_all_results();
    }
    
    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by('id_galery', 'ASC');
        $this->db->like('id_galery', $q);
        $this->db->or_like('name_galery', $q);
        $this->db->or_like('patch_galery', $q);
        $this->db->limit($limit, $start);
        return $this->db->get('km_galery')->result();
    }
    
    // insert data
    function insert_galery($data)
    {
        $this->db->insert('km_galery', $data);
    }
    
    // update data
    function update_galery($id, $data)
    {
        $this->db->where('id_galery', $id);
        $this->db->update('km_galery', $data);
    }
    
    // delete data
    function delete_galery($id)
    {
        $this->db->where('id_galery', $id);
        $this->db->delete('km_galery');
    }
}
