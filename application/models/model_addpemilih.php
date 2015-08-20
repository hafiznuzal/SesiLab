<?php 
class Model_addpemilih extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function insert_entry($data)
    {
        $sqlpem= "SELECT MAX(NO_PEMILIH) as maks FROM pemilih";
        $query= $this->db->query($sqlpem);
        foreach ($query->result() as $key) {
        	   $max =$key->maks;
        }
        if(!$max)$max=1;
        else $max++;
        #echo $max;
	
        $query= array('NO_PEMILIH'=>$max,'NO_KTP'=>$data['NO_KTP'],'STATUS'=>$data['STATUS']);
        $sqlQuery=$this->db->insert('pemilih',$query);
        $error= $this->db->_error_message();
        if (preg_match('/duplicate entry/i', $error)) {
            return $status = '0';
        }
        else {
            
                return $status = '1';
        }
    }
}

?>