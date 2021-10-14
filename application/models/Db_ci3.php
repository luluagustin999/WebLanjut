<?php
defined('BASEPATH') OR exit('No direct script accsess allowed');
class Db_ci3 extends CI_Model {

    public function getDataJilbab(){
        $this->db->select('*');
        $this->db->from('weblanjut');
        $query = $this->db->get();
        return $query->result();
    }

    public function InsertDatajilbab($data){
        $this->db->insert('weblanjut',$data);
    }

    public function EditDatajilbab($data, $code){
        $this->db->where('code', $code);
        $this->db->update('weblanjut', $data);
    }

    public function getDataJilbabDetail($code){
        $this->db->where('code', $code);
        $query= $this->db->get('weblanjut');
        return $query->row();
    }

    public function DeleteDataJilbab($code){
        $this->db->where('code',$code);
        $this->db->delete('weblanjut');
    }
}

    
