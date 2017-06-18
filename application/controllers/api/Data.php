<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
	
	public function load($dataset = 'example')
	{
		$filedata = @file_get_contents(APPPATH . DIRECTORY_SEPARATOR . 'datasets' . DIRECTORY_SEPARATOR . str_replace(':', DIRECTORY_SEPARATOR, $dataset));
		if($filedata) {
			echo $filedata;
		} else {
			echo 'false';
		}
	}
}
