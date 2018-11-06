<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Beranda extends MX_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$data = array(
			'nick' => 'WIll Smith',
			'login_ok' => true,
			
		);
		$this->session->set_userdata($data);
		$this->twig->addGlobal('session', $this->session);

		$this->twig->display('session_sample/index', []);
	}
}

/* End of file beranda.php */
/* Location: ./application/modules/welcome/controllers/beranda.php */ ?>