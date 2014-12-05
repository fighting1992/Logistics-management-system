<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('order_model');
	}
	public function edit($table_id){
		$rs1=$this->order_model->show_where('t_order',$table_id);
		$rs2=$this->order_model->get_all_id();
		$data=array(
		    'orders'=>$rs1,
		    'users'=>$rs2);
		$this->load->view('edit_order',$data);
	}
	public function do_edit(){
		$user_name=$this->input->post('user_id');
		$rs=$this->order_model->get_by_name($user_name);
		$user_id=$rs->user_id;
		$data=array(
		    'order_id'=>$this->input->post('id'),
			'order_date'=>$this->input->post('date'),
			'user_id'=>$user_id,
			'goods_name'=>$this->input->post('goods_name'),
			'goods_weight'=>$this->input->post('goods_weight'),
			'order_state'=>$this->input->post('state'),
			'order_cost'=>$this->input->post('cost'),
			'order_address'=>$this->input->post('add')
		);
		$hid=$this->input->post('id');
		$this->order_model->update('t_order',$data,$hid);
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_order();
		foreach ($rs as $row){
		   $username=$this->admin_model->get_by_id('t_user',$row->user_id);
		   $row->username=$username;
		}
		$data=array('orders'=>$rs);
		$this->load->view('order',$data);
   }
	public function delete($table_id){
		$this->order_model->delete('t_order',$table_id);
		redirect(site_url('admin/order'));
	}
	public function add(){
		$rs=$this->order_model->get_all_id();
		$data=array('users'=>$rs);
		$this->load->view('add_order',$data);
	}
    public function do_add(){
    	$user_name=$this->input->post('user_id');
		$rs=$this->order_model->get_by_name($user_name);
		$user_id=$rs->user_id;
		$data=array(
		    'order_id'=>$this->input->post('id'),
			'order_date'=>$this->input->post('date'),
			'user_id'=>$user_id,
			'goods_name'=>$this->input->post('goods_name'),
			'goods_weight'=>$this->input->post('goods_weight'),
			'order_state'=>$this->input->post('state'),
			'order_cost'=>$this->input->post('cost'),
			'order_address'=>$this->input->post('add')
		);
		$this->order_model->insert('t_order',$data);
		redirect(site_url('admin/order'));
	}
}
?>