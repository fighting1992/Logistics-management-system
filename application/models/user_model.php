<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function delete($table='t_user',$id){
		$this->db->where('user_id',$id);
		$this->db->delete($table);
	}
	public function insert($table,$data){
		$this->db->insert($table,$data);
	}
	public function show_where($table='t_user',$id){
		$this->db->where('user_id',$id);
		$query=$this->db->get($table);
		return $query->row();
	}
	public function update($table='t_user',$data,$id){
		$this->db->where('user_id',$id);
		$this->db->update($table,$data);
	}
}
?>