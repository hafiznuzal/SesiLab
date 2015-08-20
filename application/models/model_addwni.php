<?php 
class Model_addwni extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert_entry($data)
    {
        
        $query= array('no_ktp'=>$data['ktp'],'nama'=>$data['name'],'tgl_lahir'=>date('Y-m-d',strtotime($data['tgl_lahir'])),'alamat'=>$data['alamat']);
    
        $sqlQuery=$this->db->insert('wni',$query);
        $error= $this->db->_error_message();
        if (preg_match('/duplicate entry/i', $error)) {
            echo " <h3>ERROR</h3> Data yang anda masukkan sudah ada";
        }
        else {
             echo "<h3>Sukses</h3> Data berhasil dimasukkan";
         }
    }
    function show_entry()
    {

        $sqlQuery= "SELECT no_ktp,nama,tgl_lahir,alamat FROM wni ";
        $query=$this->db->query($sqlQuery);
        foreach ($query->result() as $row) {
            $data[]['no_ktp']=$row->no_ktp;
            $data[]['nama']=$row->nama;
            $data[]['tgl_lahir'] = $row->tgl_lahir;
            $data[]['alamat'] =$row->alamat;
        }
        
        return $data;
    }
    function show_specific($no_ktp)
    {
        $sqlQuery= "SELECT no_ktp,nama,tgl_lahir,alamat FROM wni WHERE NO_KTP=".$no_ktp;
        $query= $this->db->query($sqlQuery);
        foreach ($query->result() as $row) {
            $data['no_ktp']=$row->no_ktp;
            $data['nama']=$row->nama;
            $data['tgl_lahir']=$row->tgl_lahir;
            $data['alamat']=$row->alamat;
        }
    }

    function delete($no_ktp)
    {
        $sqlQuery = "DELETE FROM WNI WHERE NO_KTP=".$no_ktp;
        $query= $this->db->query($sqlQuery);
        
        return $query;
    }

}
 ?>