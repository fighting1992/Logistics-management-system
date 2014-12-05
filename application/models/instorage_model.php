<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instorage_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function delete($table='t_instorage',$id){
		$this->db->where('instorage_id',$id);
		$this->db->delete($table);
	}
	public function insert($table,$data){
		$this->db->insert($table,$data);
	}
	public function show_where($table='t_instorage',$id){
		$this->db->where('instorage_id',$id);
		$query=$this->db->get($table);
		return $query->row();
	}
	public function update($table='t_instorage',$data,$id){
		$this->db->where('instorage_id',$id);
		$this->db->update($table,$data);
	}
	public function get_all_id($table='t_staff'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_by_name($name){
		$this->db->where('staff_name',$name);
		$query=$this->db->get('t_staff');
		return $query->row();
	}
}
?>