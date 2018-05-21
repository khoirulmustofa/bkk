<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('login/create_action'),
            'id_bkk' => set_value('id_bkk'),
            'password_member' => set_value('password_member'),
            
            'page' => 'Login'
        );
        
        $this->load->view(template() . '/view_login', $data);
    }

    public function forgot_password()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('login/create_action'),
            'id_bkk' => set_value('id_bkk'),
            'password_member' => set_value('password_member'),
            
            'page' => 'Login'
        );
        
        $this->load->view(template() . '/view_forgot_password', $data);
    }

    public function create_action()
    {
        $this->_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $dataMember = $this->Member_model->get_member_by_id_bkk($this->input->post('id_bkk', TRUE));
            
            if ($dataMember = 1) {
                $data = array(
                    'id_bkk' => $this->input->post('id_bkk', TRUE),
                    'password_member' => $this->input->post('password_member', TRUE)
                );
                
                $hasil = $this->Member_model->get_member_by_id_bkk_password($data);
                
                if ($hasil != NULL) {
                    // login berhasil buat session
                    $session = array(
                        'id_bkk' => $hasil->id_bkk,
                        'name_member' => $hasil->name_member,
                        'login_mode' => 'Member'
                    );
                    $this->session->set_userdata($session);
                    redirect(base_url());
                } else {
                    $this->session->set_flashdata('message', 'please check the user and password !');
                    redirect(site_url('login'));
                }
            } else {
                // jika id bkk tidak ada
                $this->session->set_flashdata('message', 'Email Tidak Ada');
            }
        }
    }

    public function logout_action()
    {
        $this->session->unset_userdata('id_bkk');
        $this->session->unset_userdata('name_member');
        $this->session->unset_userdata('login_mode');
        session_destroy();
        redirect(base_url());
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_bkk', 'id bkk', 'trim|required');
        $this->form_validation->set_rules('password_member', 'password member', 'trim|required');
        
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}
