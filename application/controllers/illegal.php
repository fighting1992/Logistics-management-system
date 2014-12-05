<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Illegal extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('illegal_model');
	}
	public function edit($table_id){
		$rs1=$this->illegal_model->show_where('t_illegal',$table_id);
		$rs2=$this->illegal_model->get_all_id();
		$data=array(
		    'records'=>$rs1,
		    'vehicles'=>$rs2);
		$this->load->view('edit_illegal',$data);
	}
	public function do_edit(){
		$data=array(
		    'illegal_id'=>$this->input->post('id'),
			'vehicle_id'=>$this->input->post('vehicle_id'),
			'illegal_date'=>$this->input->post('date'),
			'illegal_reason'=>$this->input->post('reason')
		);
		$hid=$this->input->post('id');
		//echo $hid;
		$this->illegal_model->update('t_illegal',$data,$hid);
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_illegal();
		$data=array('records'=>$rs);
		$this->load->view('vehicle_illegal',$data);
   }
	public function delete($table_id){
		$this->illegal_model->delete('t_illegal',$table_id);
		redirect(site_url('admin/vehicle_illegal'));
	}
	public function add(){
		$rs=$this->illegal_model->get_all_id();
		$data=array('records'=>$rs);
		$this->load->view('add_illegal',$data);
	}
    public function do_add(){
		$data=array(
		    'illegal_id'=>$this->input->post('id'),
			'vehicle_id'=>$this->input->post('vehicle_id'),
			'illegal_date'=>$this->input->post('date'),
			'illegal_reason'=>$this->input->post('reason')
		);
		$this->illegal_model->insert('t_illegal',$data);
		redirect(site_url('admin/vehicle_illegal'));
	}
}
?>