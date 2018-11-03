<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables extends MX_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('datatables');
	}

}

/* End of file datatables.php */
/* Location: ./application/controllers/datatables.php */ ?>