<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Jobvacancy_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all_jobvacancy()
    {
        $this->db->order_by('id_jobs', 'ASC');
        return $this->db->get('km_jobs')->result();
    }

    //total_all_procedure_rows
    function total_all_procedure_rows()
    {
        $this->db->select('km_jobs.id_jobs,name_jobs,km_jobs.id_company,name_company,job_description,job_requerement,benefits,status_jobs,time_active_jobs,id_bkk');
        $this->db->from('km_jobs');
        $this->db->join('km_company', 'km_company.id_company = km_jobs.id_company');
        $this->db->join('km_jobs_applied', 'km_jobs_applied.id_jobs = km_jobs.id_jobs', 'left');
        $this->db->like('name_jobs', $q);
        $this->db->or_like('name_company', $q);
        return $this->db->count_all_results();
    }
    
    // get total rows
    function total_rows_jobvacancy($q = NULL)
    {       
        $this->db->select('km_jobs.id_jobs,name_jobs,km_jobs.id_company,name_company,job_description,job_requerement,benefits,status_jobs,time_active_jobs,id_bkk');
        $this->db->from('km_jobs');
        $this->db->join('km_company', 'km_company.id_company = km_jobs.id_company');
        $this->db->join('km_jobs_applied', 'km_jobs_applied.id_jobs = km_jobs.id_jobs', 'left');
        $this->db->like('name_jobs', $q);
        $this->db->or_like('name_company', $q);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data_jobvacancy($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by('km_jobs.id_jobs', 'ASC');
        $this->db->select('km_jobs.id_jobs,name_jobs,km_jobs.id_company,name_company,job_description,job_requerement,benefits,status_jobs,time_active_jobs,id_bkk');
        $this->db->from('km_jobs');
        $this->db->join('km_company', 'km_company.id_company = km_jobs.id_company');
        $this->db->join('km_jobs_applied', 'km_jobs_applied.id_jobs = km_jobs.id_jobs', 'left');
        $this->db->like('name_jobs', $q);
        $this->db->or_like('name_company', $q);
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }

    // get data by id
    function get_jobvacancy_by_id($id)
    {
        $this->db->where('id_jobs', $id);
        return $this->db->get('km_jobs')->row();
    }

    // insert insert jobvacancy
    function insert_jobvacancy($data)
    {
        $this->db->insert('km_jobs', $data);
    }

    // update data
    function update_jobvacancy($id, $data)
    {
        $this->db->where('id_jobs', $id);
        $this->db->update('km_jobs', $data);
    }

    // delete data
    function delete_jobvacancy($id)
    {
        $this->db->where('id_jobs', $id);
        $this->db->delete('km_jobs');
    }

    function get_jobs_company()
    {
        $this->db->select('*');
        $this->db->from('km_company');
        return $this->db->get()->result();
    }
}
