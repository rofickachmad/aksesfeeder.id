<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Wsclient extends MX_Controller {
		// print_r($this->ws->password);
		 public $username;
		 public $password;
	function __construct(){
		parent::__construct();
			// $username=$this->ws->username;
			// $password=$this->ws->password;
	}

	public function index()
	{
		$npsn=$this->ws->username;
		$url="http://192.168.56.101:8082/ws/sandbox.php?wsdl";
		// $url="http://192.168.56.101:8082/ws/live2.php?wsdl";
		$wsclient=new nusoap_client($url,TRUE);
		$wsclient->soap_defencoding = 'UTF-8';
		$wsclient->decode_utf8 = FALSE;

		// Calls
		$proxy=$wsclient->getProxy();
		$error=$wsclient->getError();
		if ($proxy==NULL) {
                    $this->session->set_flashdata('error','Gagal melakukan koneksi ke Webservice Feeder.<br /><pre>'.$error.'</pre>');
        }else{
			$token=$proxy->GetToken($this->ws->username,$this->ws->password);
			if ($token=='ERROR: username/password salah') {
                    $this->session->set_flashdata('error',$token);
                    $sess=$token;
                        // redirect(base_url());
            }else{
            	$filter = "npsn = '071025'";
                $profil = $proxy->getrecord($token,'satuan_pendidikan',$filter);
                print_r($profil);
                if ($profil['result']) {
                            $id_sp = $profil['result']['id_sp'];
                        } else {
                            $id_sp = '0';
                        }

                        $sess = array('login' => TRUE, 
                                          'ws' => $url,
                                       'token' => $token,
                                    'username' => $this->ws->username,
                                    'password' => $this->ws->password,
                                         'url' => base_url(),
                                     'kode_pt' => $npsn,
                                       'id_sp' => $id_sp);
                    	$this->session->sess_expiration = '900'; //session expire 15 Minutes
                        $this->session->sess_expire_on_close = 'true';
                        
                        $this->session->set_userdata($sess);
                    // redirect('welcome','refresh');
            }
            $data['result']=$profil;
            $data['session']=$sess;
		}
		// $mhs=$wsclient->GetListMahasiswa($token);
		$this->load->view('base_view',array('view'=>'pddikti/profile','data'=>$data));
	}

}

/* End of file wsclient.php */
/* Location: ./application/controllers/wsclient.php */ ?>