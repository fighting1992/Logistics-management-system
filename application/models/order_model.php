<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function delete($table='t_order',$id){
		$this->db->where('order_id',$id);
		$this->db->delete($table);
	}
	public function insert($table,$data){
		$this->db->insert($table,$data);
	}
	public function show_where($table='t_order',$id){
		$this->db->where('order_id',$id);
		$query=$this->db->get($table);
		return $query->row();
	}
	public function update($table='t_order',$data,$id){
		$this->db->where('order_id',$id);
		//echo $id;
		$this->db->update($table,$data);
		//print_r($data) ;
	}
	public function get_all_id($table='t_user'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_by_name($username){
		$this->db->where('username',$username);
		$query=$this->db->get('t_user');
		return $query->row();
	}
}
?>