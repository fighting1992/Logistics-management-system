<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserIndex extends CI_Controller {
	public function index()
	{
		$this->load->view('user/index.php');
	}
	public function login(){
		$this->load->view('user/login.php');
	}
	public function do_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('userIndex_model');
		$result = $this->userIndex_model->get_by_name_and_pwd($username, $password);
		if($result){
			$this -> session -> set_userdata('login_user', $result);
			redirect('userIndex/index');
		}else{
			$this -> login();
		}
	}
	public function regist(){
		$name = $this -> input -> post('username');
		$pwd = $this -> input -> post('pwd');
		$email = $this -> input -> post('email');
		
		$user = array(
		    "username" => $name,
            "password" => $pwd,
			"email" => $email
		);
		
		$this -> load -> model('userIndex_model');
		$this -> userIndex_model -> save($user);
		redirect('userIndex/login');
	}
	public function show_order()
	{
		$order_id=$this->input->post('wen');
		$this->load->model('userIndex_model');
		$rs=$this->userIndex_model->get_by_id($order_id);
		$data=array('record'=>$rs);
		$item_id=$rs->item_id;
		$rs1=$this->userIndex_model->get_by_id1($item_id);
		$data1=array('records'=>$rs1);
		$this->load->view('user/show_order.php',$data1);
	}
	public function make_order()
	{
		$this->load->model('userIndex_model');
		$rs=$this->userIndex_model->get_all('t_user');
		$data=array('records'=>$rs);
		$this->load->view('user/make_order.php',$data);
	}
	public function do_order()
	{
		$order_id = $this->input->post('order_id');
		$user_id = $this->input->post('user_id');
		$date = $this->input->post('date');
		$goods_name=$this->input->post('goods_name');
		$goods_weight=$this->input->post('goods_weight');
		$order_state=$this->input->post('order_state');
		$order_cost=$this->input->post('order_cost');
		$order_address=$this->input->post('order_address');
		
		$order = array(
		    "order_id" => $order_id,
		    "order_date" => $date,
		    "user_id" => $user_id,
            "goods_name" => $goods_name,
			"goods_weight" => $goods_weight,
			"order_state" => $order_state,
			"order_cost" => $order_cost,
			"order_address" => $order_address
		);
		$this->load->model('userIndex_model');
		$rs=$this->userIndex_model->add($order);
		redirect('user/index');
	}
	public function my_order($user_id){
		$this->load->model('userIndex_model');
		$order_id=$this->get_by_user_id($user_id);//字符串
		$rs=$this->userIndex_model->get_by_id2($order_id);
		foreach($rs as $row){  //一堆item
		    $items=$this->userIndex_model->get_by_id1($row->item_id);//跟踪记录
		    $row->items=$items;
		}
		$data = array("records"=>$rs);
		$this->load->view('user/my_order',$data);
	}

	public function get_by_user_id($user_id){
		$str = "";
		$this->load->model('userIndex_model');
		$orders = $this->userIndex_model->get_order($user_id);
		foreach ($orders as $order) {
			$order_id = $order->order_id;
			$str .= $order_id.",";
		}
		return mb_substr($str, 0,mb_strlen($str)-1);
	}

}
?>