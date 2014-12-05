<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserIndex_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function get_by_id($table_id){
		return $this->db->query('select * from t_senditem where order_id in ('.$table_id.')')->row();

	}
	public function get_by_id1($table_id){
		$query=$this->db->get_where("t_sendrecord",array("item_id" => $table_id));
		return $query->result();
	}
	public function get_by_id2($table_id){
		return $this->db->query('select * from t_senditem where order_id in ('.$table_id.')')->result();

	}
	public function get_by_name_and_pwd($username, $password){
		$data = array(
			"username" => $username,
			"password" => $password
		);
		$query = $this -> db -> get_where("t_user", $data);
		return $query -> row(); 
	}
	public function save($user){
		$this -> db -> insert("t_user", $user);
	}
	public function add($order){
		$this -> db -> insert("t_order", $order);
	}
	public function get_all($table='t_user'){
		$query=$this->db->get($table);
		return $query->result();
	}
	public function get_order($table_id){
		$this->db->select("order_id");
		$this->db->from("t_order");
		$this->db->where("user_id",$table_id);
		return $this->db->get()->result();
	}
	
}
?>