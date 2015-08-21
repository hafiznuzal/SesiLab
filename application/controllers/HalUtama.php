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
	function upload($NO_PEMILIH)
	{
		
		$this->load->view('navigate');
		$this->load->view('upload');
		
	}
	function download($no_ktp)
	{
		$this->load->view('navigate');
		$this->load->view('download');	
	}

	function manajemen($no_ktp)
	{
		$this->load->view('navigate');
		$this->load->view('manajemen');	
	}	

}
?>