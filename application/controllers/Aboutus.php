<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Aboutus extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Aboutus_model');
        $this->load->model('Teams_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'Aboutus/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'Aboutus/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'Aboutus/';
            $config['first_url'] = base_url() . 'Aboutus/';
        }
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Teams_model->total_teams_rows($q);        
        $teams = $this->Teams_model->get_teams_limit_data($config['per_page'], $start, $q);
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        $aboutus = $this->Aboutus_model->get_aboutus_all();
        
        $data = array(
            'teams_data' => $teams,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'aboutus_data' => $aboutus,
            'page' => 'About Us'
        );
        $this->template->load(template() . '/template', template() . '/view_aboutus', $data);
    }
}
