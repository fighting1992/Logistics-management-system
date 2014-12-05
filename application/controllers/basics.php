<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Basics extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('basics_model');
	}
	public function edit($table_id){
		$rs1=$this->basics_model->show_where('t_vehicle',$table_id);
		$rs2=$this->basics_model->get_all_id();
		$data=array(
		    'basics'=>$rs1,
		    'drivers'=>$rs2);
		$this->load->view('edit_basics',$data);
	}
	public function do_edit(){
		$data=array(
		    'vehicle_id'=>$this->input->post('id'),
			'vehicle_num'=>$this->input->post('num'),
			'driver_id'=>$this->input->post('driver_id'),
			'vehicle_size'=>$this->input->post('size'),
			'vehicle_max'=>$this->input->post('max')
		);
		$hid=$this->input->post('id');
		//echo $hid;
		$this->basics_model->update('t_vehicle',$data,$hid);
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_basics();
		foreach ($rs as $row){
		   $drivername=$this->admin_model->get_by_driver_id('t_driver',$row->driver_id);
		   $row->drivername=$drivername;
		}
		$data=array('basics'=>$rs);
		$this->load->view('vehicle_basics',$data);
   }
	public function delete($table_id){
		$this->basics_model->delete('t_vehicle',$table_id);
		redirect(site_url('admin/vehicle_basics'));
	}
	public function add(){
		$rs=$this->basics_model->get_all_id();
		$data=array('drivers'=>$rs);
		$this->load->view('add_basics',$data);
	}
    public function do_add(){
		$data=array(
		    'vehicle_id'=>$this->input->post('id'),
			'vehicle_num'=>$this->input->post('num'),
			'driver_id'=>$this->input->post('driver_id'),
			'vehicle_size'=>$this->input->post('size'),
			'vehicle_max'=>$this->input->post('max')
		);
		$this->basics_model->insert('t_vehicle',$data);
		redirect(site_url('admin/vehicle_basics'));
	}
}
?>