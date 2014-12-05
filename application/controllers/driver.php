<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Driver extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('driver_model');
	}
	public function edit($table_id){
		$rs=$this->driver_model->show_where('t_driver',$table_id);
		$data=array('drivers'=>$rs);
		$this->load->view('edit_driver',$data);
	}
	public function do_edit(){
		$data=array(
		    'driver_id'=>$this->input->post('id'),
			'driver_name'=>$this->input->post('name'),
			'driver_tel'=>$this->input->post('tel')
		);
		$hid=$this->input->post('id');
		$this->driver_model->update('t_driver',$data,$hid);
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_driver();
		$data=array('drivers'=>$rs);
		$this->load->view('vehicle_driver',$data);
   }
	public function delete($table_id){
		$this->driver_model->delete('t_driver',$table_id);
		redirect(site_url('admin/vehicle_driver'));
	}
	public function add(){
		$this->load->view('add_driver');
	}
    public function do_add(){
		$data=array(
		    'driver_id'=>$this->input->post('id'),
			'driver_name'=>$this->input->post('name'),
			'driver_tel'=>$this->input->post('tel'),
		);
		$this->driver_model->insert('t_driver',$data);
		redirect(site_url('admin/vehicle_driver'));
	}
}
?>