<?php
class HalUtama extends CI_Controller {

	public function __construct() {        
    	parent::__construct();
    	$this->load->helper('url');
	}

	function index()
	{
		
		$this->load->view('navigate');
		$this->load->view('index');
	}

	function add()
	{
			
		$data['NO_PEMILIH']=$this->input->POST('NO_PEMILIH');
		$data['NO_KTP']=$this->input->POST('NO_KTP');
		$data['STATUS']=$this->input->POST('0');
		#$status = '3';
		$this->load->model('model_addpemilih');
		$status=$this->model_addpemilih->insert_entry($data);
		if ($status == '0')
		{
			$parsing_data =array('stat'=> "gagal");
			$this->load->view('form_addpemilih',$parsing_data);
		}
		else if ($status == '1')
		{
			$parsing_data =array('stat'=> "ok");
			$this->load->view('form_addpemilih',$parsing_data);
		}
	}
	function delete($NO_PEMILIH)
	{
		
		$this->load->model('model_addpemilih');
		$delete=$this->model_addwni->delete($NO_KTP);
		if($delete)
		{
			echo "data berhasil dihapus <br>";

			echo "<a href=".site_url('addwni/show/').">kembali</a>";
		}
		
	}
	function show_specific($no_ktp)
	{
		$this->load->model('model_addpemilih');
		$data=$this->model_addpemilih->show_specific($NO_PEMILIH);
		$parsing_data = array('data'=> $data);
		$this->load->view('show_wni',$parsing_data);	
	}
}
?>