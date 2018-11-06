<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Elo extends MX_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Elo_model','elodb');
	}
	public function index()
	{	
		$users = Elo_model::all();
		// $users = Elo_model::where('votes', '>', 1)->get();

        foreach ($users as $key => $value) {
            echo "ID : ".$value->id."<br>";
            echo "First Name : ".$value->first_name."<br>";
            echo "Last Name : ".$value->last_name."<br>";
            echo "Email : ".$value->email."<br><br>";
        }
		echo "elloquent";
		
	}
}

/* End of file elo.php */
/* Location: ./application/modules/backend/elo/controllers/elo.php */ ?>