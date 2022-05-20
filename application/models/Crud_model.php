<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model
{ 
    public function add($GET){
        $add = array(
            'c_name'          => $GET['name'],
            'c_age'           => $GET['age'],
            'c_address'       => $GET['address'],
            'c_mobile'        => $GET['mobile'],
            'c_created_at'    => date('Y-m-d H:i:s'),
            'c_updated_at'    => date('Y-m-d H:i:s'),

        );
        $this->db->insert('crud', $add);
    }
    public function fetchUsers(){
        $this->db->select('*');
		$this->db->from('crud');		
		$query = $this->db->get();
		return $query->result();
    }
    public function editUser($id){
        $this->db->select('*');
		$this->db->from('crud');		
		$this->db->where('c_id',$id);		
		$query = $this->db->get();
		return $query->row_array();
    }
    public function updateUser($userData,$id){	
		$this->db->where('c_id',$id);
		$this->db->update('crud',$userData);
    }
    public function deleteUser($id){
        $this->db->delete('crud',array('c_id'=>$id));

    }
    public function saveUpload($id,$filename){
        $this->db->where('id',$id);
		$this->db->update('file_upload',$filename);
    }
    public function getNewsData(){
        $this->db->select('*');
		$this->db->from('file_upload');		
		$query = $this->db->get();
		return $query->result_array();
    }
}
?>