<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jobvacancy extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Jobvacancy_model');
        $this->load->model('Jobs_applied_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q != '') {
            $config['base_url'] = base_url() . 'jobvacancy/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'jobvacancy/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'jobvacancy/';
            $config['first_url'] = base_url() . 'jobvacancy/';
        }
        
        $config['per_page'] = 4;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Jobvacancy_model->total_rows_jobvacancy($q);
        $jobvacancy = $this->Jobvacancy_model->get_limit_data_jobvacancy($config['per_page'], $start, $q);
        
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        // print_r($jobvacancy);
        $data = array(
            'jobvacancy_data' => $jobvacancy,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'page' => 'Job Vacancy'
        );
        $this->template->load(template() . '/template', template() . '/view_jobvacancy', $data);
    }

    public function apply_jobvacancy($id_jobs, $id_bkk)
    {     
        $data = array(
            'id_bkk' => $id_bkk,
            'id_jobs' => $id_jobs            
        );
        $this->Jobs_applied_model->insert_jobs_applied($data);
        $row = $this->Jobvacancy_model->get_jobvacancy_by_id($id_jobs);     
        
        $this->session->set_flashdata('message', 'You have applied for a ' . $row->name_jobs);
        redirect(site_url('Jobvacancy'));
        
    }
}
