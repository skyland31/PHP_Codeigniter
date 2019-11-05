<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Activities_model extends CI_Model {
    private $tbl_name = 'tbl_activity';
    private $id = 'activity_id';
    public function get_all(){
        $result = $this->db->get($this->tbl_name);
        return $result->result();
    }
    public function insert($data){
       $result = $this->db->insert($this->tbl_name, $data);
       return $result;
    }
    public function update($data){
        $this->db->where($this->id,$data['activity_id']);
        $result = $this->db->update($this->tbl_name, $data);
       return $result;
    }
    public function get($activity_id){
        $this->db->where($this->id,$activity_id);
        $result = $this->db->get($this->tbl_name);
       return $result->row();
    }
    public function delete($activity_id){
        $result = $this->db->delete($this->tbl_name, array($this->id => $activity_id));
        return $result;
    }
}