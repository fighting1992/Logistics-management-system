<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Total extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('total_model');
	}
	public function edit($table_id){
		$rs1=$this->total_model->show_where('t_total',$table_id);
		$data=array(
		    'records'=>$rs1
		    );
		$this->load->view('edit_total',$data);
	}
	public function do_edit(){
		$data=array(
		    'goods_id'=>$this->input->post('id'),
			'goods_name'=>$this->input->post('name'),
			'goods_total'=>$this->input->post('total')
		);
		$hid=$this->input->post('id');
		//echo $hid;
		$this->total_model->update('t_total',$data,$hid);
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_total();
		$data=array('records'=>$rs);
		$this->load->view('total',$data);
   }
	public function delete($table_id){
		$this->total_model->delete('t_total',$table_id);
		redirect(site_url('admin/total'));
	}
	public function add(){
		$this->load->view('add_total');
	}
    public function do_add(){
		$data=array(
		    'goods_id'=>$this->input->post('id'),
			'goods_name'=>$this->input->post('name'),
			'goods_total'=>$this->input->post('total')
		);
		$this->total_model->insert('t_total',$data);
		redirect(site_url('admin/total'));
	}
}
?>