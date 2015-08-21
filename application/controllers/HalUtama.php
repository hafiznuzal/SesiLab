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

	function absen()
	{
		$this->load->view('navigate');
		$this->load->view('index');	
		
	}
	function upload()
	{
		
		$this->load->view('navigate');
		$this->load->view('upload');
		
	}
	function download()
	{
		$this->load->view('navigate');
		$this->load->view('download');	
	}

	function tambah_kelas()
	{
		$this->load->view('navigate');
		$this->load->view('tambah_kelas');	
	}
	function tambah_praktikan()
	{
		$this->load->view('navigate');
		$this->load->view('tambah_praktikan');	
	}	

	function tambah_asisten()
	{
		$this->load->view('navigate');
		$this->load->view('tambah_asisten');	
	}		

}
?>