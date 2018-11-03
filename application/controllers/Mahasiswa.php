<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Mahasiswa extends MX_Controller {
		// print_r($this->ws->password);
		 // public $username;
		 // public $password;
	function __construct(){
		parent::__construct();
			// $username=$this->ws->username;
			// $password=$this->ws->password;
	}

	public function index(){
	
		$mhs = array(
		    'act' => 'GetListAktivitasMahasiswa',
		    // 'token' => $_token->data->token,
		    'token' => $this->ws->gettoken(),
		    'filter' =>'',
		    'limit' =>'10',
		);
		$result=$this->ws->execute($mhs);
		// print_r($result);
		$data['result']=$result;
		$this->load->view('base_view',array('view'=>'pddikti/mahasiswa','data'=>$data));
	}
	

}

/* End of file wsclient.php */
/* Location: ./application/controllers/wsclient.php */ ?>