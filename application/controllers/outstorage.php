<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Outstorage extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('outstorage_model');
	}
	public function edit($table_id){
		$rs1=$this->outstorage_model->show_where('t_outstorage',$table_id);
		$rs2=$this->outstorage_model->get_all_id();
		$data=array(
		    'records'=>$rs1,
		    'staffs'=>$rs2);
		$this->load->view('edit_outstorage',$data);
	}
	public function do_edit(){
		$data=array(
		    'outstorage_id'=>$this->input->post('id'),
			'staff_id'=>$this->input->post('staff_id'),
			'outstorage_date'=>$this->input->post('date'),
			'goods_name'=>$this->input->post('name'),
			'goods_num'=>$this->input->post('num')
		);
		$hid=$this->input->post('id');
		//echo $hid;
		$this->outstorage_model->update('t_outstorage',$data,$hid);
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_outstorage();
		$data=array('records'=>$rs);
		$this->load->view('out_storage',$data);
   }
	public function delete($table_id){
		$this->outstorage_model->delete('t_outstorage',$table_id);
		redirect(site_url('admin/outstorage'));
	}
	public function add(){
		$rs=$this->outstorage_model->get_all_id();
		$data=array('staffs'=>$rs);
		$this->load->view('add_outstorage',$data);
	}
    public function do_add(){
		$data=array(
		    'outstorage_id'=>$this->input->post('id'),
			'staff_id'=>$this->input->post('staff_id'),
			'outstorage_date'=>$this->input->post('date'),
			'goods_name'=>$this->input->post('name'),
			'goods_num'=>$this->input->post('num')
		);
		$this->outstorage_model->insert('t_outstorage',$data);
		redirect(site_url('admin/outstorage'));
	}
}
?>