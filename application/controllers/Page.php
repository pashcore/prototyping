<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	
	public function index()
	{
		$this->show('default_page');
	}
	
	public function show($page = 'default_page')
	{
		$this->load->view($page);
	}
}
