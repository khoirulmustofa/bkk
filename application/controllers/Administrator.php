<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('administrator/login_create_action'),
            'username' => set_value('username'),
            'password' => set_value('password'),
            'page' => 'Login'
        );
        
        $this->load->view('administrator/view_login', $data);
    }

    public function login_create_action()
    {
        $this->load->model('Users_model');
        $this->login__rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $cekUser = $this->Users_model->get_user_by_username($this->input->post('username', TRUE));
            if ($cekUser = 1) {
                $data = array(
                    'username' => $this->input->post('username', TRUE),
                    'password' => $this->input->post('password', TRUE)
                );
                
                $hasil = $this->Users_model->get_user_by_username_password($data);
                // var_dump($hasil);
                if ($hasil != NULL) {
                    // login berhasil buat session
                    $session = array(
                        'username' => $hasil->username,
                        'nama_lengkap' => $hasil->nama_lengkap,
                        'login_mode_admin' => 'Administrator'
                    );
                    $this->session->set_userdata($session);
                    redirect(base_url('administrator/home'));
                } else {
                    $this->session->set_flashdata('message', 'please check the username and password !');
                    redirect(site_url('administrator'));
                }
            } else {
                // jika id bkk tidak ada
                $this->session->set_flashdata('message', 'Email Tidak Ada');
            }
        }
    }

    public function logout_action()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama_lengkap');
        $this->session->unset_userdata('login_mode');
        session_destroy();
        redirect(base_url());
    }

    public function login__rules()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function home()
    {
        cek_session_admin();
        $this->load->model('Jobvacancy_model');
        
        // $totalJobvacancy=$this->Jobvacancy_model->total_all_procedure_rows();
        $data = array(
            'page' => 'Home',
            'button' => 'Home'
        );
        $this->template->load('administrator/template', 'administrator/view_home', $data);
    }

    public function procedure()
    {
        cek_session_admin();
        $this->load->model('Procedure_model');
        
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q != '') {
            $config['base_url'] = base_url() . 'administrator/procedure/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'administrator/procedure/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'administrator/procedure/';
            $config['first_url'] = base_url() . 'administrator/procedure/';
        }
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Procedure_model->total_procedure_rows($q);
        $procedure = $this->Procedure_model->get_procedure_limit_data($config['per_page'], $start, $q);
        
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        $data = array(
            'procedure_data' => $procedure,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'page' => 'Procedure'
        );
        
        $this->template->load('administrator/template', 'administrator/view_procedure_list', $data);
    }

    public function procedure_create()
    {
        cek_session_admin();
        $this->load->model('Procedure_model');
        
        $data = array(
            'button' => 'Create',
            'action' => site_url('administrator/procedure_create_action'),
            'id_procedure' => set_value('id_procedure'),
            'name_procedure' => set_value('name_procedure'),
            'decription_procedure' => set_value('decription_procedure'),
            'icon_procedure' => set_value('icon_procedure'),
            'back_color' => set_value('back_color'),
            'page' => 'Procedure'
        );
        $this->template->load('administrator/template', 'administrator/view_procedure_form', $data);
    }

    public function procedure_create_action()
    {
        cek_session_admin();
        $this->load->model('Procedure_model');
        
        $this->procedure_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->procedure_create();
        } else {
            $data = array(
                'name_procedure' => $this->input->post('name_procedure', TRUE),
                'decription_procedure' => $this->input->post('decription_procedure', TRUE),
                'icon_procedure' => $this->input->post('icon_procedure', TRUE),
                'back_color' => $this->input->post('back_color', TRUE)
            );
            
            $this->Procedure_model->insert_procedure($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('administrator/procedure'));
        }
    }

    public function procedure_update($id)
    {
        cek_session_admin();
        $this->load->model('Procedure_model');
        
        $row = $this->Procedure_model->get_procedure_by_id($id);
        
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('administrator/procedure_update_action'),
                'id_procedure' => set_value('id_procedure', $row->id_procedure),
                'name_procedure' => set_value('name_procedure', $row->name_procedure),
                'decription_procedure' => set_value('decription_procedure', $row->decription_procedure),
                'icon_procedure' => set_value('icon_procedure', $row->icon_procedure),
                'back_color' => set_value('back_color', $row->back_color),
                'page' => 'Procedure'
            );
            $this->template->load('administrator/template', 'administrator/view_procedure_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/procedure'));
        }
    }

    public function procedure_update_action()
    {
        cek_session_admin();
        $this->load->model('Procedure_model');
        
        $this->procedure_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->procedure_update($this->input->post('id_procedure', TRUE));
        } else {
            $data = array(
                'name_procedure' => $this->input->post('name_procedure', TRUE),
                'decription_procedure' => $this->input->post('decription_procedure', TRUE),
                'icon_procedure' => $this->input->post('icon_procedure', TRUE),
                'back_color' => $this->input->post('back_color', TRUE)
            );
            
            $this->Procedure_model->update_procedure($this->input->post('id_procedure', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('administrator/procedure'));
        }
    }

    public function procedure_delete($id)
    {
        cek_session_admin();
        $this->load->model('Procedure_model');
        $row = $this->Procedure_model->get_procedure_by_id($id);
        
        if ($row) {
            $this->Procedure_model->delete_procedure($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('administrator/procedure'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/procedure'));
        }
    }

    public function procedure_rules()
    {
        $this->form_validation->set_rules('name_procedure', 'name procedure', 'trim|required');
        $this->form_validation->set_rules('decription_procedure', 'decription procedure', 'trim|required');
        $this->form_validation->set_rules('icon_procedure', 'icon procedure', 'trim|required');
        $this->form_validation->set_rules('back_color', 'back color', 'trim|required');
        
        $this->form_validation->set_rules('id_procedure', 'id_procedure', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function jobvacancy()
    {
        cek_session_admin();
        $this->load->model('Jobvacancy_model');
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q != '') {
            $config['base_url'] = base_url() . 'administrator/jobvacancy?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'administrator/jobvacancy?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'administrator/jobvacancy';
            $config['first_url'] = base_url() . 'administrator/jobvacancy';
        }
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Jobvacancy_model->total_rows_jobvacancy($q);
        $jobvacancy = $this->Jobvacancy_model->get_limit_data_jobvacancy($config['per_page'], $start, $q);
        
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        $data = array(
            'jobvacancy_data' => $jobvacancy,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'page' => 'Job Vacancy'
        );
        $this->template->load('administrator/template', 'administrator/view_jobvacancy_list', $data);
    }

    public function jobvacancy_create()
    {
        cek_session_admin();
        $data = array(
            'button' => 'Create',
            'action' => site_url('administrator/jobvacancy_create_action'),
            'id_jobs' => set_value('id_jobs'),
            'name_jobs' => set_value('name_jobs'),
            'id_company' => set_value('id_company'),
            'job_description' => set_value('job_description'),
            'job_requerement' => set_value('job_requerement'),
            'benefits' => set_value('benefits'),
            'status_jobs' => set_value('status_jobs'),
            'time_active_jobs' => set_value('time_active_jobs'),
            'page' => 'Job Vacancy'
        );
        $this->template->load('administrator/template', 'administrator/view_jobvacancy_form', $data);
    }

    public function jobvacancy_create_action()
    {
        cek_session_admin();
        $this->load->model('Jobvacancy_model');
        
        $this->jobvacancy_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->jobvacancy_create();
        } else {
            $data = array(
                'name_jobs' => $this->input->post('name_jobs', TRUE),
                'id_company' => $this->input->post('id_company', TRUE),
                'job_description' => $this->input->post('job_description', TRUE),
                'job_requerement' => $this->input->post('job_requerement', TRUE),
                'benefits' => $this->input->post('benefits', TRUE),
                'status_jobs' => $this->input->post('status_jobs', TRUE),
                'time_active_jobs' => $this->input->post('time_active_jobs', TRUE)
            );
            
            $this->Jobvacancy_model->insert_jobvacancy($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('administrator/jobvacancy'));
        }
    }

    public function jobvacancy_update($id)
    {
        cek_session_admin();
        $this->load->model('Jobvacancy_model');
        
        $row = $this->Jobvacancy_model->get_jobvacancy_by_id($id);
        
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('administrator/jobvacancy_update_action'),
                'id_jobs' => set_value('id_jobs', $row->id_jobs),
                'name_jobs' => set_value('name_jobs', $row->name_jobs),
                'id_company' => set_value('id_company', $row->id_company),
                'job_description' => set_value('job_description', $row->job_description),
                'job_requerement' => set_value('job_requerement', $row->job_requerement),
                'benefits' => set_value('benefits', $row->benefits),
                'status_jobs' => set_value('status_jobs', $row->status_jobs),
                'time_active_jobs' => set_value('time_active_jobs', $row->time_active_jobs),
                'page' => 'Job Vacancy'
            );
            $this->template->load('administrator/template', 'administrator/view_jobvacancy_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/jobvacancy'));
        }
    }

    public function jobvacancy_update_action()
    {
        cek_session_admin();
        $this->load->model('Jobvacancy_model');
        
        $this->jobvacancy_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_jobs', TRUE));
        } else {
            $data = array(
                'name_jobs' => $this->input->post('name_jobs', TRUE),
                'id_company' => $this->input->post('id_company', TRUE),
                'job_description' => $this->input->post('job_description', TRUE),
                'job_requerement' => $this->input->post('job_requerement', TRUE),
                'benefits' => $this->input->post('benefits', TRUE),
                'status_jobs' => $this->input->post('status_jobs', TRUE),
                'time_active_jobs' => $this->input->post('time_active_jobs', TRUE)
            );
            
            $this->Jobvacancy_model->update_jobvacancy($this->input->post('id_jobs', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('administrator/jobvacancy'));
        }
    }

    public function jobvacancy_delete($id)
    {
        cek_session_admin();
        $this->load->model('Jobvacancy_model');
        
        $row = $this->Jobvacancy_model->get_jobvacancy_by_id($id);
        
        if ($row) {
            $this->Jobvacancy_model->delete_jobvacancy($id);
            $this->session->set_flashdata('message', 'Delete Jobvacancy Success');
            redirect(site_url('administrator/jobvacancy'));
        } else {
            $this->session->set_flashdata('message', 'Record Jobvacancy Not Found');
            redirect(site_url('administrator/jobvacancy'));
        }
    }

    public function jobvacancy_rules()
    {
        $this->form_validation->set_rules('name_jobs', 'name jobs', 'trim|required');
        $this->form_validation->set_rules('id_company', 'id company', 'trim|required');
        $this->form_validation->set_rules('job_description', 'job description', 'trim|required');
        $this->form_validation->set_rules('job_requerement', 'job requerement', 'trim|required');
        $this->form_validation->set_rules('benefits', 'benefits', 'trim|required');
        $this->form_validation->set_rules('status_jobs', 'status jobs', 'trim|required');
        $this->form_validation->set_rules('time_active_jobs', 'time active jobs', 'trim|required');
        
        $this->form_validation->set_rules('id_jobs', 'id_jobs', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function galery()
    {
        cek_session_admin();
        $this->load->model('Galery_model');
        
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q != '') {
            $config['base_url'] = base_url() . 'administrator/galery/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'administrator/galery/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'administrator/galery/';
            $config['first_url'] = base_url() . 'administrator/galery/';
        }
        
        $config['per_page'] = 10;
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
        
        $this->template->load('administrator/template', 'administrator/view_galery_list', $data);
    }

    public function galery_create()
    {
        cek_session_admin();
        $data = array(
            'button' => 'Create',
            'action' => site_url('administrator/galery_create_action'),
            'id_galery' => set_value('id_galery'),
            'name_galery' => set_value('name_galery'),
            'patch_galery' => set_value('patch_galery'),
            'page' => 'Galery'
        );
        $this->template->load('administrator/template', 'administrator/view_galery_form', $data);
    }

    public function galery_create_action()
    {
        cek_session_admin();
        $this->load->model('Galery_model');
        
        $this->galery_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->galery_create();
        } else {
            $config['upload_path'] = 'assets/galery';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('patch_galery');
            $hasil = $this->upload->data();
            $data = array(
                'name_galery' => ucwords($this->input->post('name_galery', TRUE)),
                'patch_galery' => $hasil['file_name']
            );
            
            $this->Galery_model->insert_galery($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('administrator/galery'));
        }
    }

    public function galery_update($id)
    {
        cek_session_admin();
        $this->load->model('Galery_model');
        
        $row = $this->Galery_model->get_galery_by_id($id);
        
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('administrator/galery_update_action'),
                'id_galery' => set_value('id_galery', $row->id_galery),
                'name_galery' => set_value('name_galery', $row->name_galery),
                'patch_galery' => set_value('patch_galery', $row->patch_galery),
                'page' => 'Galery'
            );
            $this->template->load('administrator/template', 'administrator/view_galery_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/galery'));
        }
    }

    public function galery_update_action()
    {
        cek_session_admin();
        $this->load->model('Galery_model');
        
        $this->galery_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->galery_update($this->input->post('id_galery', TRUE));
        } else {
            $config['upload_path'] = 'assets/galery';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('patch_galery');
            $hasil = $this->upload->data();
            if ($hasil['file_name'] != '') {
                $data['name_galery'] = ucwords($this->input->post('name_galery', TRUE));
                $data['patch_galery'] = $hasil['file_name'];
            } else {
                $data['name_galery'] = ucwords($this->input->post('name_galery', TRUE));
            }
            
            $this->Galery_model->update_galery($this->input->post('id_galery', TRUE), $data);
            // var_dump($data, $hasil['file_name']);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('administrator/galery'));
        }
    }

    public function galery_delete($id)
    {
        cek_session_admin();
        $this->load->model('Galery_model');
        
        $row = $this->Galery_model->get_galery_by_id($id);
        
        if ($row) {
            
            $this->Galery_model->delete_galery($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            unlink('assets/galery/' . $row->patch_galery);
            redirect(site_url('administrator/galery'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/galery'));
        }
    }

    public function galery_rules()
    {
        $this->form_validation->set_rules('name_galery', 'name galery', 'trim|required');
        
        $this->form_validation->set_rules('id_galery', 'id_galery', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    // @author region member
    public function member()
    {
        cek_session_admin();
        $this->load->model('Member_model');
        
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q != '') {
            $config['base_url'] = base_url() . 'administrator/member/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'administrator/member/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'administrator/member/';
            $config['first_url'] = base_url() . 'administrator/member/';
        }
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Member_model->total_member_rows($q);
        $member = $this->Member_model->get_member_limit_data($config['per_page'], $start, $q);
        
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        $data = array(
            'member_data' => $member,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'page' => 'Member'
        );
        $this->template->load('administrator/template', 'administrator/view_member_list', $data);
    }

    public function member_create()
    {
        cek_session_admin();
        $data = array(
            'button' => 'Create',
            'action' => site_url('administrator/member_create_action'),
            'id_member' => set_value('id_member'),
            'id_bkk' => set_value('id_bkk'),
            'NIK' => set_value('NIK'),
            'password_member' => set_value('password_member'),
            'name_member' => set_value('name_member'),
            'address_member' => set_value('address_member'),
            'place_ofbirth_member' => set_value('place_ofbirth_member'),
            'date_ofbirth_member' => set_value('date_ofbirth_member'),
            'page' => 'Member'
        );
        $this->template->load('administrator/template', 'administrator/view_member_form', $data);
    }

    public function member_create_action()
    {
        cek_session_admin();
        $this->load->model('Member_model');
        $this->member_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->member_create();
        } else {
            $data = array(
                'id_bkk' => $this->input->post('id_bkk', TRUE),
                'NIK' => $this->input->post('NIK', TRUE),
                'password_member' => $this->input->post('password_member', TRUE),
                'name_member' => $this->input->post('name_member', TRUE),
                'address_member' => $this->input->post('address_member', TRUE),
                'place_ofbirth_member' => $this->input->post('place_ofbirth_member', TRUE),
                'date_ofbirth_member' => $this->input->post('date_ofbirth_member', TRUE)
            );
            
            $this->Member_model->insert_member($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('administrator/member'));
        }
    }

    public function member_update($id)
    {
        cek_session_admin();
        $this->load->model('Member_model');
        
        $row = $this->Member_model->get_member_by_id_member($id);
        
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('administrator/member_update_action'),
                'id_member' => set_value('id_member', $row->id_member),
                'id_bkk' => set_value('id_bkk', $row->id_bkk),
                'NIK' => set_value('NIK', $row->NIK),
                'password_member' => set_value('password_member', $row->password_member),
                'name_member' => set_value('name_member', $row->name_member),
                'address_member' => set_value('address_member', $row->address_member),
                'place_ofbirth_member' => set_value('place_ofbirth_member', $row->place_ofbirth_member),
                'date_ofbirth_member' => set_value('date_ofbirth_member', $row->date_ofbirth_member),
                'page' => 'Member'
            );
            $this->template->load('administrator/template', 'administrator/view_member_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('members'));
        }
    }

    public function member_update_action()
    {
        cek_session_admin();
        $this->load->model('Member_model');
        $this->member_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->member_update($this->input->post('id_member', TRUE));
        } else {
            $data = array(
                'id_bkk' => $this->input->post('id_bkk', TRUE),
                'NIK' => $this->input->post('NIK', TRUE),
                'name_member' => $this->input->post('name_member', TRUE),
                'address_member' => $this->input->post('address_member', TRUE),
                'place_ofbirth_member' => $this->input->post('place_ofbirth_member', TRUE),
                'date_ofbirth_member' => $this->input->post('date_ofbirth_member', TRUE)
            );
            
            if ($this->input->post('cek_password', TRUE) == "check") {
                $data['password_member'] = crypt(md5($this->input->post('password_member', TRUE)), 'kh0itul3ustof4');
            }
            
            // var_dump($data);
            $this->Member_model->update_member($this->input->post('id_member', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('administrator/member'));
        }
    }

    public function member_rules()
    {
        // $this->form_validation->set_rules('id_bkk', 'id bkk', 'trim|required');
        $this->form_validation->set_rules('NIK', 'nik', 'trim|required');
        $this->form_validation->set_rules('password_member', 'password member', 'trim|required');
        $this->form_validation->set_rules('name_member', 'name member', 'trim|required');
        $this->form_validation->set_rules('address_member', 'address member', 'trim|required');
        $this->form_validation->set_rules('place_ofbirth_member', 'place ofbirth member', 'trim|required');
        $this->form_validation->set_rules('date_ofbirth_member', 'date ofbirth member', 'trim|required');
        
        $this->form_validation->set_rules('id_member', 'id_member', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function aboutus()
    {
        cek_session_admin();
        $this->load->model('Aboutus_model');
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q != '') {
            $config['base_url'] = base_url() . 'aboutus/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'aboutus/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'aboutus/';
            $config['first_url'] = base_url() . 'aboutus/';
        }
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Aboutus_model->total_rows_aboutus($q);
        $aboutus = $this->Aboutus_model->get_limit_data_aboutus($config['per_page'], $start, $q);
        
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        $data = array(
            'aboutus_data' => $aboutus,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'page' => 'About Us',
        );
        $this->template->load('administrator/template', 'administrator/view_aboutus_list', $data);
    }
    
    public function aboutus_update($id)
    {
        $this->load->model('Aboutus_model');
        $row = $this->Aboutus_model->get_aboutus_by_id($id);
        
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('administrator/aboutus_update_action'),
                'id_aboutus' => set_value('id_aboutus', $row->id_aboutus),
                'company_name' => set_value('company_name', $row->company_name),
                'company_profile' => set_value('company_profile', $row->company_profile),
                'vision' => set_value('vision', $row->vision),
                'mission' => set_value('mission', $row->mission),
                'photo_aboutus' => set_value('photo_aboutus', $row->photo_aboutus),
                'page' => 'About Us',
            );
            $this->template->load('administrator/template', 'administrator/view_aboutus_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/aboutus'));
        }
    }
}
