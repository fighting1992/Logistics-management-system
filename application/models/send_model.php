<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Send_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function delete($table='t_send',$id){
		$this->db->where('send_id',$id);
		$this->db->delete($table);
	}
	public function insert($table,$data){
		$this->db->insert($table,$data);
	}
	public function show_where($table,$id){
		$this->db->where('send_id',$id);
		$query=$this->db->get($table);
		return $query->row();
	}
	public function update($table='t_send',$data,$id){
		$this->db->where('send_id',$id);
		$this->db->update($table,$data);
	}
	public function get_by_id($table_id){
		$query=$this->db->get_where("t_senditem",array("send_id" => $table_id));
		return $query->result();
	}
	public function get_all($table){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_by_id1($table_id){
		$query=$this->db->get_where("t_sendrecord",array("item_id" => $table_id));
		return $query->result();
	}
	public function delete_item($table,$id){
		$this->db->where('item_id',$id);
		$this->db->delete($table);
	}
	public function delete_record($table,$id){
		$this->db->where('send_record_id',$id);
		$this->db->delete($table);
	}
	public function get_by_item_id($table,$id){
		$this->db->where('item_id',$id);
		$query=$this->db->get($table);
		return $query->row();
	}
}
?>