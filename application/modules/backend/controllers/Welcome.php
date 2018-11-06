<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	public function index() {
		$data = array(
			'environment' => ENVIRONMENT,
			'ci_version'  => CI_VERSION
		);
		$this->twig->display('welcome_message', $data);
	}

}

/* End of file Welcome.php */
/* Location: ./application/modules/welcome/controllers/Welcome.php */