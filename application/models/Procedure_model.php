<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

    class Procedure_model extends CI_Model
{

    public $table = 'km_procedure';
    public $id = 'id_procedure';
    public $order = 'ASC';
    
    function __construct()
    {
        parent::__construct();
    }
    
    // get all
    function get_all()
    {
        $this->db->order_by('id_procedure', 'ASC');
        return $this->db->get('km_procedure')->result();
    }
    
    // get data by id
    function get_procedure_by_id($id)
    {
        $this->db->where('id_procedure', $id);
        return $this->db->get('km_procedure')->row();
    }
    
    // get total rows
    function total_procedure_rows($q = NULL) {
        $this->db->like('id_procedure', $q);
        $this->db->or_like('name_procedure', $q);
        $this->db->or_like('decription_procedure', $q);
        $this->db->or_like('icon_procedure', $q);
        $this->db->or_like('back_color', $q);
        $this->db->from('km_procedure');
        return $this->db->count_all_results();
    }
    
    // get data with limit and search
    function get_procedure_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by('id_procedure', 'ASC');
        $this->db->like('id_procedure', $q);
        $this->db->or_like('name_procedure', $q);
        $this->db->or_like('decription_procedure', $q);
        $this->db->or_like('icon_procedure', $q);
        $this->db->or_like('back_color', $q);
        $this->db->limit($limit, $start);
        return $this->db->get('km_procedure')->result();
    }
    
    // insert data
    function insert_procedure($data)
    {
        $this->db->insert('km_procedure', $data);
    }
    
    // update data
    function update_procedure($id, $data)
    {
        $this->db->where('id_procedure', $id);
        $this->db->update('km_procedure', $data);
    }
    
    // delete data
    function delete_procedure($id)
    {
        $this->db->where('id_procedure', $id);
        $this->db->delete('km_procedure');
    }
}
