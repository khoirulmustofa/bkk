<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Procedure extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Procedure_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $procedure = $this->Procedure_model->get_all();
        $data = array(
            'procedure_data' => $procedure,
            'page' => 'Procedure'
        );
        
        $this->template->load(template() . '/template', template() . '/view_procedure', $data);
    }
}
