<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instorage extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('instorage_model');
	}
	public function edit($table_id){
		$rs1=$this->instorage_model->show_where('t_instorage',$table_id);
		$rs2=$this->instorage_model->get_all_id();
		$data=array(
		    'records'=>$rs1,
		    'staffs'=>$rs2);
		$this->load->view('edit_instorage',$data);
	}
	public function do_edit(){
		$data=array(
		    'instorage_id'=>$this->input->post('id'),
			'staff_id'=>$this->input->post('staff_id'),
			'instorage_date'=>$this->input->post('date'),
			'goods_name'=>$this->input->post('name'),
			'goods_num'=>$this->input->post('num'),
			'goods_position1'=>$this->input->post('position1'),
			'goods_position2'=>$this->input->post('position2')
		);
		$hid=$this->input->post('id');
		//echo $hid;
		$this->instorage_model->update('t_instorage',$data,$hid);
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_instorage();
		foreach ($rs as $row){
		   $staff=$this->admin_model->get_by_staff_id('t_staff',$row->staff_id);
		   $row->staff=$staff;
		}
		$data=array('records'=>$rs);
		$this->load->view('in_storage',$data);
   }
	public function delete($table_id){
		$this->instorage_model->delete('t_instorage',$table_id);
		redirect(site_url('admin/instorage'));
	}
	public function add(){
		$rs=$this->instorage_model->get_all_id();
		$data=array('staffs'=>$rs);
		$this->load->view('add_instorage',$data);
	}
    public function do_add(){
    	$staff_name=$this->input->post('staff_id');
		$rs=$this->instorage_model->get_by_name($staff_name);
		$staff_id=$rs->staff_id;
		$data=array(
		    'instorage_id'=>$this->input->post('id'),
			'staff_id'=>$staff_id,
			'instorage_date'=>$this->input->post('date'),
			'goods_name'=>$this->input->post('name'),
			'goods_num'=>$this->input->post('num'),
			'goods_position1'=>$this->input->post('position1'),
			'goods_position2'=>$this->input->post('position2')
		);
		$this->instorage_model->insert('t_instorage',$data);
		redirect(site_url('admin/instorage'));
	}
}
?>