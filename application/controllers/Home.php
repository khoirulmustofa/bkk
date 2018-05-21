<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
	    $data = array(
	        'page'	 => 'Home');
	    $this->template->load(template().'/template',template().'/view_home',$data);
	    
	}
}
