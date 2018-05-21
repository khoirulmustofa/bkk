<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    
    class Users_model extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        
        function get_user_by_username($username)
        {
            $this->db->where('username', $username);
            return $this->db->get('km_users')->row();
        }
        
        function get_user_by_username_password($data)
        {
            $this->db->where('username', $data['username']);
            $this->db->where('password', crypt(md5($data['password']), 'kh0itul3ustof4'));
            return $this->db->get('km_users')->row();
        }
    }