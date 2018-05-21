<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $captcha = $this->Member_model->buat_captcha();
        $data = array(
            'captcha' => $captcha,
            'button' => 'Register',
            'action' => site_url('registration/create_action'),
            'id_member' => set_value('id_member'),
            'id_bkk' => set_value('id_bkk'),
            'NIK' => set_value('NIK'),
            'password_member' => set_value('password_member'),
            'name_member' => set_value('name_member'),
            'address_member' => set_value('address_member'),
            'place_ofbirth_member' => set_value('place_ofbirth_member'),
            'date_ofbirth_member' => set_value('date_ofbirth_member'),
            'page' => 'Registration'
        );
        
        $this->template->load(template() . '/template', template() . '/view_registration', $data);
    }

    public function create_action()
    {
        $this->_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_bkk' => $this->input->post('id_bkk', TRUE),
                'NIK' => $this->input->post('NIK', TRUE),
                'password_member' => crypt(md5($this->input->post('password_member', TRUE)), 'kh0itul3ustof4') ,
                'name_member' => $this->input->post('name_member', TRUE),
                'address_member' => $this->input->post('address_member', TRUE),
                'place_ofbirth_member' => $this->input->post('place_ofbirth_member', TRUE),
                'date_ofbirth_member' => $this->input->post('date_ofbirth_member', TRUE)
            );
            
            $this->Member_model->insert_member($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('registration'));
        }
    }

    
    function check_captcha(){
        if ($this->input->post('captcha', TRUE)==$this->session->userdata('captcha')){
            return TRUE;
        }else {
            $this->form_validation->set_message('check_captcha','captcha wrong');
            return FALSE;
        }
    }

    public function _rules()
    {
        // $this->form_validation->set_rules('id_bkk', 'id bkk', 'trim|required');
        $this->form_validation->set_rules('NIK', 'nik', 'trim|required');
        $this->form_validation->set_rules('password_member', 'password member', 'trim|required');
        $this->form_validation->set_rules('name_member', 'name member', 'trim|required');
        $this->form_validation->set_rules('address_member', 'address member', 'trim|required');
        $this->form_validation->set_rules('place_ofbirth_member', 'place ofbirth member', 'trim|required');
        $this->form_validation->set_rules('date_ofbirth_member', 'date ofbirth member', 'trim|required');
        $this->form_validation->set_rules('captcha', 'Captcha', 'trim|callback_check_captcha|required');
        
        $this->form_validation->set_rules('id_member', 'id_member', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}
