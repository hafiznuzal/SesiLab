<?php
class login extends CI_Controller {

	public function __construct() {        
    	parent::__construct();
    	$this->load->helper('url');
	}

	function index()
	{
		$this->load->view('login');
		
	}

	function pilih()
	{
		$data['PIL']=$this->input->POST('PIL');
		$data['NO_KTP']=$this->input->session_name('NO_KTP');
		$this->load->model('model_pilih');
		$this->model_pilih->memilih($data);
	}

}
?>