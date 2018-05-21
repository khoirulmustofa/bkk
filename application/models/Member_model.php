<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Member_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    // insert data
    function insert_member($data)
    {
        $this->db->insert('km_member', $data);
    }

    // update data
    function update_member($id, $data)
    {
        $this->db->where('id_member', $id);
        $this->db->update('km_member', $data);
    }

    function get_member_by_id_member($bkk)
    {
        $this->db->where('id_member', $bkk);
        return $this->db->get('km_member')->row();
    }
    
    function get_member_by_id_member_password($data)
    {
        $this->db->where('id_member', $data['id_member']);
        $this->db->where('password_member', crypt(md5($data['password_member']), 'kh0itul3ustof4'));
        return $this->db->get('km_member')->row();
    }
    
    //for login member
    function get_member_by_id_bkk($bkk)
    {
        $this->db->where('id_bkk', $bkk);
        return $this->db->get('km_member')->row();
    }

    function get_member_by_id_bkk_password($data)
    {
        $this->db->where('id_bkk', $data['id_bkk']);
        $this->db->where('password_member', crypt(md5($data['password_member']), 'kh0itul3ustof4'));
        return $this->db->get('km_member')->row();
    }

    // get total rows
    function total_member_rows($q = NULL)
    {
        $this->db->like('id_member', $q);
        $this->db->or_like('id_bkk', $q);
        $this->db->or_like('NIK', $q);
        $this->db->or_like('password_member', $q);
        $this->db->or_like('name_member', $q);
        $this->db->or_like('address_member', $q);
        $this->db->or_like('place_ofbirth_member', $q);
        $this->db->or_like('date_ofbirth_member', $q);
        $this->db->from('km_member');
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_member_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by('id_member', 'ASC');
        $this->db->like('id_member', $q);
        $this->db->or_like('id_bkk', $q);
        $this->db->or_like('NIK', $q);
        $this->db->or_like('password_member', $q);
        $this->db->or_like('name_member', $q);
        $this->db->or_like('address_member', $q);
        $this->db->or_like('place_ofbirth_member', $q);
        $this->db->or_like('date_ofbirth_member', $q);
        $this->db->limit($limit, $start);
        return $this->db->get('km_member')->result();
    }

    // Membuat captcha.
    public function buat_captcha()
    {
        // Memanggil helper captcha.
        $this->load->helper('captcha');
        $this->load->helper('string');
        // Random string untuk captcha.
        $randomStr = random_string('alnum', 5);
        
        $word = strtoupper($randomStr);
        $this->session->set_userdata('captcha', $word);
        
        // Konfigurasi captcha.
        $captcha = array(
            'word' => $word,
            'img_path' => './assets/captcha/',
            'img_url' => base_url() . 'assets/captcha/',
            'font_path' => './assets/font/monaco.ttf',
            'img_width' => '150',
            'img_height' => '50',
            'expiration' => '1' // 1 detik
        );
        
        // Membuat gambar captcha.
        $img = create_captcha($captcha);
        
        // Mengembalikan link ke gambar captcha yang sudah dibuat.
        return $img['image'];
    }
}