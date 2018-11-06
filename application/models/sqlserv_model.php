<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sqlserv_model extends CI_Model {

    // var $table = 'tbl_user'; //nama tabel dari database
    // var $column_order = array(null, 'user_nama','user_email','user_alamat'); //field yang ada di table user
    // var $column_search = array('user_nama','user_email','user_alamat'); //field yang diizin untuk pencarian 
    // var $order = array('user_id' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 	function run_query(){
 		$col_order=array(null,'nim','nama');
 		$cari=array('nim','nama');
 		$order=array('nim'=>'asc');
 		// $procedure = "GETMHSLIST '".$angktn."','".$prodi."'";
 		
 		$i=0;
 		/*foreach ($cari as $item) {
 			# code... 
 			if(isset($_POST['search']['value'])) // jika datatable mengirimkan pencarian dengan metode POST
            {     
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($cari) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
 		}
 		if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->col_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($order))
        {
            // $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }*/
        // print_r($this->db->last_query());
        if($_POST['length'] != -1)
        	$this->db->limit($_POST['length'], $_POST['start']);
        // $result = $this->db->get();
        $procedure = "GETMHSLIST '18','83'";
    	$result=$this->db->query($procedure);
        return $result->result();
 	}
    private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    function run_queryc()
    {
        $this->_run_query();
        if($_POST['length'] != -1)
        	$this->db->limit($_POST['length'], $_POST['start']);
        $result = $this->db->get();
        return $result->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    function query_count_filtered()
    {
        $this->_run_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
  	public function query_count_all()
    {
        // $this->db->from($this->table);
        $procedure = "GETMHSLIST '18','83'";
    	$this->db->query($procedure);
        return $this->db->count_all_results();
    }
 
}
/* End of file sqlserv_model.php */
/* Location: ./application/models/sqlserv_model.php */ ?>