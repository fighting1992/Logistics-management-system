<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	/*public function insert($table,$data){
		$this->db->insert($table,$data);
	}
	public function show($table='t_staff'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function delete($table='t_staff',$id){
		$this->db->where('staff_id',$id);
		$this->db->delete($table);
	}
	public function update($table='t_staff',$data,$id){
		$this->db->where('id',$id);
		//echo $id;
		$this->db->update($table,$data);
		//print_r($data) ;
	}
	public function show_where($table='t_staff',$id){
		$this->db->where('id',$id);
		$query=$this->db->get($table);
		//echo "ssss";
		return $query->row();
	}*/
	public function delete($table='t_staff',$id){
		$this->db->where('staff_id',$id);
		$this->db->delete($table);
	}
	public function show_where($table,$id){
		$this->db->where('staff_id',$id);
		$query=$this->db->get($table);
		return $query->row();
	}
	public function update($table='t_staff',$data,$id){
		$this->db->where('staff_id',$id);
		//echo $id;
		$this->db->update($table,$data);
		//print_r($data) ;
	}
	public function insert($table,$data){
		$this->db->insert($table,$data);
	}
}
?>