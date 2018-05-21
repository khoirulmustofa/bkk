<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Company_model extends CI_Model
{

  public $table = 'km_company';
  public $id = '';
  public $order = 'DESC';

  function __construct()
  {
      parent::__construct();
  }

  // get_company all
  function get_company_all()
  {
    $this->db->order_by('id_company', 'ASC');
    return $this->db->get('km_company')->result();
  }

  // get_company data by id
  function get_company_by_id($id)
  {
    $this->db->where('id_company', $id);
    return $this->db->get('km_company')->row();
  }

  // get_company total rows
  function total_rows_company($q = NULL) {
    $this->db->like('id_company', $q);
    $this->db->or_like('name_company', $q);
    $this->db->or_like('address_company', $q);
    $this->db->or_like('tlp_company', $q);
    $this->db->or_like('email_company', $q);
    $this->db->from('km_company');

    return $this->db->count_all_results();
  }

  // get_company data with limit and search
  function get_company_limit_data($limit, $start = 0, $q = NULL) {
    $this->db->order_by('id_company', 'ASC');
    $this->db->like('id_company', $q);
    $this->db->or_like('name_company', $q);
    $this->db->or_like('address_company', $q);
    $this->db->or_like('tlp_company', $q);
    $this->db->or_like('email_company', $q);
    $this->db->limit($limit, $start);
    return $this->db->get('km_company')->result();
  }

  // insert data
  function insert_company($data)
  {
    $this->db->insert('km_company', $data);
  }

  // update data
  function update_company($id, $data)
  {
      $this->db->where('id_company', $id);
      $this->db->update('km_company', $data);
  }

  // delete data
  function delete_company($id)
  {
      $this->db->where('id_company', $id);
      $this->db->delete('km_company');
  }

}
