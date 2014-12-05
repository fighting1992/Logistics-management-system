<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Outstorage_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function delete($table='t_outstorage',$id){
		$this->db->where('outstorage_id',$id);
		$this->db->delete($table);
	}
	public function insert($table,$data){
		$this->db->insert($table,$data);
	}
	public function show_where($table='t_outstorage',$id){
		$this->db->where('outstorage_id',$id);
		$query=$this->db->get($table);
		return $query->row();
	}
	public function update($table='t_outstorage',$data,$id){
		$this->db->where('outstorage_id',$id);
		$this->db->update($table,$data);
	}
	public function get_all_id($table='t_staff'){
		$query=$this->db->get($table);
		return $query->result();
	}
}
?>