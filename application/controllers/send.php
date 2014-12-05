<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Send extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('send_model');
	}
	public function edit($table_id){
		$rs1=$this->send_model->show_where('t_send',$table_id);
		$rs2=$this->send_model->get_all('t_vehicle');
		$data=array('records'=>$rs1,'vehicles'=>$rs2);
		$this->load->view('edit_send',$data);
	}
	public function do_edit(){
		$data=array(
		    'send_id'=>$this->input->post('id'),
			'vehicle_id'=>$this->input->post('vehicle_id')
		);
		$hid=$this->input->post('id');
		$this->send_model->update('t_send',$data,$hid);
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_send();
		$data=array('records'=>$rs);
		$this->load->view('send',$data);
   }
	public function delete($table_id){
		$this->send_model->delete('t_send',$table_id);
		redirect(site_url('admin/send'));
	}
	public function add(){
		$rs=$this->send_model->get_all('t_vehicle');
		$data=array('records'=>$rs);
		$this->load->view('add_send',$data);
	}
    public function do_add(){
		$data=array(
		    'send_id'=>$this->input->post('id'),
			'vehicle_id'=>$this->input->post('vehicle_id')
		);
		$this->send_model->insert('t_send',$data);
		redirect(site_url('admin/send'));
	}
	public function item($table_id){
		$rs=$this->send_model->get_by_id($table_id);
	    $data=array('records'=>$rs);
		$this -> session -> set_userdata('id',$table_id);
		$this->load->view('item',$data);
	}
	public function delete_item($table_id){
		$this->send_model->delete_item('t_senditem',$table_id);
		$send_id = $this -> session -> userdata("id");
		redirect(site_url('send/item/'.$send_id));
	}
	public function add_item($table_id){
		$rs=$this->send_model->get_all('t_order');
		$this -> session -> set_userdata('id',$table_id);
		$data=array('records'=>$rs,'sends'=>$table_id);
		$this->load->view('add_item',$data);
	}
    public function do_add_item(){
		$data=array(
		    'item_id'=>$this->input->post('id'),
			'order_id'=>$this->input->post('order_id'),
			'send_id'=>$this->input->post('send_id')
		);
		$hid=$this->input->post('send_id');
		$this->send_model->insert('t_senditem',$data);
		redirect(site_url('send/item/'.$hid));
	}
   public function record($table_id){
		$rs=$this->send_model->get_by_id1($table_id);
		foreach ($rs as $row){
		   $order=$this->send_model->get_by_item_id('t_senditem',$row->item_id);
		   $row->order=$order;
		}
	    $data=array('records'=>$rs);
		$this -> session -> set_userdata('item_id',$table_id);//item_id
		$this->load->view('record',$data);
	}
   public function delete_record($table_id){
		$this->send_model->delete_record('t_sendrecord',$table_id);
		$item_id = $this -> session -> userdata("item_id");
		redirect(site_url('send/record/'.$item_id));
	}
   public function add_record($table_id){
		$rs=$this->send_model->get_all('t_senditem');
		$this -> session -> set_userdata('item_id',$table_id);
		$data=array('records'=>$rs,'sends'=>$table_id);
		$this->load->view('add_record',$data);
	}
    public function do_add_record(){
		$data=array(
		    'send_record_id'=>$this->input->post('id'),
			'item_id'=>$this->input->post('item_id'),
			'address_record'=>$this->input->post('address'),
			'date_record'=>$this->input->post('date')
		);
		$hid=$this->input->post('item_id');
		$this->send_model->insert('t_sendrecord',$data);
		redirect(site_url('send/record/'.$hid));
	}
}
?>