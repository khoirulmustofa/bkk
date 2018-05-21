<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Teams_model extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
    
    // get total rows
    function total_teams_rows($q = NULL) {
        $this->db->like('id_team', $q);
        $this->db->or_like('name_team', $q);
        $this->db->or_like('photo_team', $q);
        $this->db->or_like('link_linkedin', $q);
        $this->db->or_like('link_twitter', $q);
        $this->db->or_like('link_facebook', $q);
        $this->db->or_like('link_whatsapp', $q);
        $this->db->from('km_teams');
        return $this->db->count_all_results();
    }
    
    // get get_limit_data
    function get_teams_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by('id_team', 'ASC');
        $this->db->like('id_team', $q);
        $this->db->or_like('name_team', $q);
        $this->db->or_like('photo_team', $q);
        $this->db->or_like('link_linkedin', $q);
        $this->db->or_like('link_twitter', $q);
        $this->db->or_like('link_facebook', $q);
        $this->db->or_like('link_whatsapp', $q);
        $this->db->limit($limit, $start);
        return $this->db->get('km_teams')->result();
    }
}

