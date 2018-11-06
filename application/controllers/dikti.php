<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dikti extends CI_Controller {
	protected $username;
	protected $npsn;
	protected $password;
	protected $ws;
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	    $this->load->library('xmlrpc');
	    $this->username='071025';
		$this->npsn=$this->username;
		$this->password='puskommerdeka2011';
	    $this->refcode = $this->session->userdata('refcode');

	    $this->ws="http://192.168.56.101:8082/ws/sandbox2.php"; //sandbox2 buat json
	    // $this->ws="http://192.168.56.101:8082/ws/sandbox.php?wsdl"; //sandbox buat xml atau wsdl
	}

	public function index()
	{
		
		$url="http://192.168.56.101:8082/ws/sandbox.php?wsdl";
		// $url="http://192.168.56.101:8082/ws/live2.php?wsdl";
		$wsclient=new nusoap_client($url,TRUE);
		$wsclient->soap_defencoding = 'UTF-8';
		$wsclient->decode_utf8 = FALSE;

		// Calls
		$proxy=$wsclient->getProxy();
		$error=$wsclient->getError();
		// echo "<pre>";
		// print_r(json_encode($wsclient->operations));
		// print_r(($wsclient->operations));
		// echo "</pre>";
		if ($proxy==NULL) {
                    $this->session->set_flashdata('error','Gagal melakukan koneksi ke Webservice Feeder.<br /><pre>'.$error.'</pre>');
        }else{
			$token=$proxy->GetToken($this->username,$this->password);
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
                                    'username' => $this->username,
                                    'password' => $this->password,
                                         'url' => base_url(),
                                     'kode_pt' => $this->npsn,
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
		$this->load->view('base_view',array('data'=>$data));

	}
	
    public function execute($data, $type = 'json')
	{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_POST, 1); 

		$headers = array();

		if ($type == 'xml')
			$headers[] = 'Content-Type: application/xml';
		else
			$headers[] = 'Content-Type: application/json';

		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		if ($data) {
			if ($type == 'xml') {
				$data = $this->stringXML($data);
			} else {
				$data = json_encode($data);
			}
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		}
		// curl_setopt($ch, CURLOPT_HEADER, 1);
		// curl_setopt($ch, CURLOPT_URL, $this->url.$this->mode.'.php');
		curl_setopt($ch, CURLOPT_URL, $this->ws);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$result = curl_exec($ch);
		print_r($result);
		curl_close($ch);

		return $result;
	}

	public function stringXML($data) {
		$xml = new SimpleXMLElement('<?xml version="1.0"?><data></data>');
		$this->array_to_xml($data, $xml);
		return $xml->asXML();
	}

	protected function array_to_xml( $data, &$xml_data ) {
		foreach( $data as $key => $value ) {
			if( is_array($value) ) {
				$subnode = $xml_data->addChild($key);
				$this->array_to_xml($value, $subnode);
			} else {
				$xml_data->addChild("$key",$value);
			}
		}
	}
	public function testfeeder(){
		$data = [
			'act' => 'GetToken',
			'username' => $this->username,
			'password' => $this->password
		];

		$_result = json_decode($this->execute($data));
		// $_result = json_decode($this->execute($data,'xml'));
		$_token = $_result->data->token;	
		// print_r($_result->data->token);
		// $token=$this->execute($data);
		/*$proses = [
			'Token' => $token,
			'act' => 'GetListMahasiswa',
			// 'username' => $this->username,
			// 'password' => $this->password
		];
		print_r($this->execute($proses));*/
		// $_token = $_result;	


	/*
		$mhs = [
		    'act' => 'GetListMahasiswa',
		    'token' => $_token,
		    'filter' =>'',
		    'limit' =>'10',
		];

		// print_r($mhs);
		$_mhs = json_decode($this->execute($mhs));
		echo "<pre>";
		print_r($_mhs);
		echo "</pre>";*/
			/*KARENA INI PROTOTIPE JADI MASIH BELUM DIMASUKKAN KEDALAM FNUCTION dan LIBRARY*/

		$kulmhs = [
		     'act' => 'GetAktivitasKuliahMahasiswa', //ini untuk mendapatkan aktivitas kulaih
		    // 'act' => 'GetProxy', // Sudah tak coba fungsinya ternyata bukan GetProfil tapi GetProfilPT
		    // Trus sekarang cari fungsi untuk mendapatkan semua table yang dapat di akses dari ws
		    // Kalau sudah tahu table apa saja, baru saya minta ke pa fikri untuk menyiapkan tabel tersebut
		    //Siakad yang baru di mulai dari tabel feeder tersebut
		    // yng sudah saya coba fungsinya antara lain :
		    // 1. ListTable. 2. GetDictionaryAllTable
		    // coba dicari fungsinya agar tahu struktur data dari semua table
		    'token' => $_token,
		     //'filter' =>'',
		     'limit' =>'10',
		    // 'fungsi' =>'',
		];

		// print_r($kulmhs);
		$_kulmhs = json_decode($this->execute($kulmhs));
		/*echo "<pre>";
		print_r($_kulmhs);
		echo "</pre>";*/
		$data['result']=$_kulmhs;

		$this->load->view('base_view',array('data'=>$data));

	}

}

/* End of file dikti.php */
/* Location: ./application/controllers/dikti.php */ ?>