<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
	    $data = array(
	        'page'	 => 'Profile');
	    $this->template->load(template().'/template',template().'/view_profile',$data);
	    
	}
}
