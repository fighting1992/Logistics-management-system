<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Illegal_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function delete($table='t_illegal',$id){
		$this->db->where('illegal_id',$id);
		$this->db->delete($table);
	}
	public function insert($table,$data){
		$this->db->insert($table,$data);
	}
	public function show_where($table='t_illegal',$id){
		$this->db->where('illegal_id',$id);
		$query=$this->db->get($table);
		return $query->row();
	}
	public function update($table='t_illegal',$data,$id){
		$this->db->where('illegal_id',$id);
		$this->db->update($table,$data);
	}
	public function get_all_id($table='t_vehicle'){
		$query=$this->db->get($table);
		return $query->result();
	}
}
?>