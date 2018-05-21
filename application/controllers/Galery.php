<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Galery_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q != '') {
            $config['base_url'] = base_url() . 'galery/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'galery/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'galery/';
            $config['first_url'] = base_url() . 'galery/';
        }
        
        $config['per_page'] = 6;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Galery_model->total_rows($q);
        $galery = $this->Galery_model->get_limit_data($config['per_page'], $start, $q);
        
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        $data = array(
            'galery_data' => $galery,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'page' => 'Galery'
        );
        
        $this->template->load(template() . '/template', template() . '/view_galery', $data);
    }
}
