<?php
class Addwni extends CI_Controller {

	public function __construct() {        
    	parent::__construct();
    	$this->load->helper('url');
	}

	function index()
	{
		#$this->load->view('header');
		$this->load->view('form_add_wni');
	}
	function save()
	{
		$data['name']=$this->input->POST('name');
		$data['ktp']=$this->input->POST('ktp');
		$data['tgl_lahir']=$this->input->POST('tgl_lahir');
		$data['alamat']=$this->input->POST('alamat');
		$this->load->model('model_addwni');
		$this->model_addwni->insert_entry($data);
		echo " <br/> <a href='",site_url("addwni"),"'>kembali </a>";

	}
	function show()
	{
		$n=0;
		$kolom=0;
		$j=0;
		$this->load->model('model_addwni');
		$data=$this->model_addwni->show_entry();

		foreach ($data as $row) {
			foreach ($row as $key) {
				$data_wni[$n][$j]=$key;
				$j++;
				
				if($j==4){
					$n++;
					$kolom=$j;
					$j=0;
				}
			}		
		}
		for ($i=0; $i < $n; $i++) { 
			for ($j=0; $j <$kolom ; $j++) { 
				#echo $data_wni[$i][$j]," ";
			}
		}
		$parsing_data =array('data'=> $data_wni, 'jumlah' => $n, 'kolom' => $kolom);
		$this->load->view('show_wni',$parsing_data);
	}

	function delete($no_ktp)
	{
		$this->load->model('model_addwni');
		$delete=$this->model_addwni->delete($no_ktp);
		if($delete)
		{
			echo "data berhasil dihapus <br>";

			echo "<a href=".site_url('addwni/show/').">kembali</a>";
		}
		
	}

	function show_specific($no_ktp)
	{
		$this->load->model('model_addwni');
		$data=$this->model_addwni->show_specific($no_ktp);
		$parsing_data = array('data'=> $data);
		$this->load->view('show_wni',$parsing_data);	
	}
}
?>
