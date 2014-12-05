<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Repaired extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('repaired_model');
	}
	public function edit($table_id){
		$rs1=$this->repaired_model->show_where('t_repaired',$table_id);
		$rs2=$this->repaired_model->get_all_id();
		$data=array(
		    'records'=>$rs1,
		    'vehicles'=>$rs2);
		$this->load->view('edit_repaired',$data);
	}
	public function do_edit(){
		$data=array(
		    'record_id'=>$this->input->post('id'),
			'vehicle_id'=>$this->input->post('vehicle_id'),
			'record_start_date'=>$this->input->post('start'),
			'record_end_date'=>$this->input->post('end'),
			'broken_part'=>$this->input->post('broken_part')
		);
		$hid=$this->input->post('id');
		//echo $hid;
		$this->repaired_model->update('t_repaired',$data,$hid);
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_repaired();
		$data=array('records'=>$rs);
		$this->load->view('vehicle_repaired',$data);
   }
	public function delete($table_id){
		$this->repaired_model->delete('t_repaired',$table_id);
		redirect(site_url('admin/vehicle_repaired'));
	}
	public function add(){
		$rs=$this->repaired_model->get_all_id();
		$data=array('records'=>$rs);
		$this->load->view('add_repaired',$data);
	}
    public function do_add(){
		$data=array(
		    'record_id'=>$this->input->post('id'),
			'vehicle_id'=>$this->input->post('vehicle_id'),
			'record_start_date'=>$this->input->post('start'),
			'record_end_date'=>$this->input->post('end'),
			'broken_part'=>$this->input->post('broken_part')
		);
		$this->repaired_model->insert('t_repaired',$data);
		redirect(site_url('admin/vehicle_repaired'));
	}
}
?>