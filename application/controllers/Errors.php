<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

	
	public function pageMissing()
	{
		$this->load->view('errors/html/error_404');
	}
}
