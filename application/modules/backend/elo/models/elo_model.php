<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
// Featured by Eloquent
use Illuminate\Database\Eloquent\Model as Eloquent;

// class Elo_model extends CI_Model {
class Elo_model extends Eloquent {
	
	protected $table = 'users';
    public $timestamps = false;

	public function method_name()
	{
		
	}
}

/* End of file elo_model.php */
/* Location: ./application/modules/backend/elo/models/elo_model.php */ ?>