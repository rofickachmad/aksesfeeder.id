<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sqlserver extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->library('database');
		$this->load->model('sqlserv_model','sqldb',TRUE);
	}

	public function index(){
		$angktn="18";
		$prodi="83";
		$sql= "GETMHSLIST '".$angktn."','".$prodi."'";
		// $this->db->from($sql);
		// $this->db->query('Set MSSQL constant ON ');
		// $result=$this->db->query($sql)->limit(1);\
		$result=$this->db->get('GETMHSLIST 18,83');
		print_r($result);
		print_r($result->num_rows());
		// print_r($result->row_data());
		/*$this->db->query($sql);
		$subquery=$this->db->last_query();
		$this->db->from($subquery);
		$result=$this->db->from($this->db->get_compiled_select());*/
		// print_r($result->result_array());
		// print_r($this->db->get($result));
		// $this->db->select('*')->from($procedure);
		// $sql="GETMHSLIST ?,?";
		// print_r($this->db->query($sql,array($angktn,$prodi)));
		// print_r($this->db->query($sql)->num_rows());
		// $this->datatables->select("CALL GETMHSLIST '".$angktn."','".$prodi."'");
		// $this->datatables->query($procedure);
		// print_r($this->datatables->generate());
		// $this->load->view('datatables');
	}
	public function jsongetmhslist()
	{
		$this->load->database();
		// $this->db->select('*')->from('dbo.ak_batassks');
		// $this->db->query('EXEC GETMHSLIST $18 $03');
		// $result=$this->db->get();
		// print_r($result->result_array());
		// $this->output->set_content_type('application/json')
		// ->set_output($this->getmhslist(18,83));
		print_r($this->getmhslist(18,83));


	}
	function getmhslist($angktn,$prodi){
    // $call_procedure ="CALL TestProcedure('$para1', '$para2', @para3)";
    // $this->db->query($call_procedure);
    $procedure = "GETMHSLIST '".$angktn."','".$prodi."'";
    $query = $this->db->query($procedure);

    	// return json_encode($query->result());
    	return ($query->result_array());
	}
	function getprodi(){
    // $call_procedure ="CALL TestProcedure('$para1', '$para2', @para3)";
    // $this->db->query($call_procedure);
    $procedure = "getkodeprodi '18083000001'";
    $query = $this->db->query($procedure);
    	print_r ($query->result_array());
	}
	function data(){
		$data=$this->getmhslist('18','83');
		$this->load->view('data',array('data'=>$data));
	}
	function getdatatables()
    {
        $list = $this->sqldb->run_query();
        print_r($list);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nim;
            $row[] = $field->nama;

            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->sqldb->query_count_all(),
            "recordsFiltered" => $this->sqldb->query_count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
    function getdata()
    {
    	$this->load->view('datax');
	}
}

/* End of file sqlserver.php */
/* Location: ./application/controllers/sqlserver.php */ ?>	