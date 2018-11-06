<?php

//namespace lib;

/**
* Class WS
* @copyright		: Yusuf Ayuba
* @licensi			: Free
* @year 			: 2017
* @since 			: 1.0
*/


class WS
{
	/**
	 * @var mode string. mode 'sandbox2' => 'sandbox2.php', 'live2' => 'live2.php'
	 */
	public $mode = 'live2';
	//const MODE = 'sandbox';

	/**
	 * @var url string. Url web service feeder
	 */
	public $url = '"http://192.168.56.101:8082/ws/';
	//const URL = 'http://localhost:8082/ws/';

	/**
	 * @var username. Username login Admin PT PDDIKTI Feeder/ Forlap
	 */
	public $username = '071025';
	//const USERNAME = '';

	/**
	 * @var password. Password login Admin PT PDDIKTI Feeder/ Forlap
	 */
	public $password = 'puskommerdeka2011';
	//const PASSWORD = '';
	public $ws="http://192.168.56.101:8082/ws/sandbox2.php"; 


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
		//curl_setopt($ch, CURLOPT_HEADER, 1);
		// curl_setopt($ch, CURLOPT_URL, $this->url.$this->mode.'.php');
		curl_setopt($ch, CURLOPT_URL, $this->ws);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		// print_r($result);
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
	public function getsoap($url){
		$wsclient=new nusoap_client($url,TRUE);
		$wsclient->soap_defencoding = 'UTF-8';
		$wsclient->decode_utf8 = FALSE;
		return $wsclient;
	}
	public function get_proxy($url){
		$return = $this->getsoap($url);
		return $return->getProxy();
	}
	public function get_error($url){
		$return = $this->getsoap($url);
		return $return->getError();
	}
	public function getconnect($url){
		$return =array(
			'proxy'=>$this->get_proxy($url),
			'error'=>$this->get_error($url),
		);

		return $return;
	}
	public function gettoken(){
		$data = [
			'act' => 'GetToken',
			'username' => $this->username,
			'password' => $this->password
		];

		// return $this->execute($data);
		// print_r($_result);
		$_token=json_decode($this->execute($data));
		return $_token->data->token;
		// return $_result;
		// $_result = json_decode($this->execute($data,'xml'));
		// $_token = $_result->data->token;
		// return $token;
		// return $_result;
	}

}