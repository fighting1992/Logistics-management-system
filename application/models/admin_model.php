<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends  CI_Model{
	public function get_by_name_and_pwd($username, $password){
		$data = array(
			"admin_name" => $username,
			"password" => $password
		);
		$query = $this -> db -> get_where("t_staff", $data);
		return $query -> row(); 
	}
	public function get_all_staff($table='t_staff'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_all_user($table='t_user'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_all_order($table='t_order'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_all_basics($table='t_vehicle'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_all_repaired($table='t_repaired'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_all_illegal($table='t_illegal'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_all_driver($table='t_driver'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_all_instorage($table='t_instorage'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_all_outstorage($table='t_outstorage'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_all_send($table='t_send'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_all_total($table='t_total'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_by_id($table,$user_id){
		$this->db->where('user_id',$user_id);
		$query=$this->db->get($table);
		return $query->row();
	}
	public function get_by_driver_id($table,$id){
		$this->db->where('driver_id',$id);
		$query=$this->db->get($table);
		return $query->row();
	}
	public function get_by_staff_id($table,$id){
		$this->db->where('staff_id',$id);
		$query=$this->db->get($table);
		return $query->row();
	}
}
?>