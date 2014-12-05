<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('staff_model');
	}
	public function edit($table_id){
		$rs=$this->staff_model->show_where('t_staff',$table_id);
		$data=array('staffs'=>$rs);
		$this -> session -> set_userdata('staff', $rs);
		$this->load->view('edit_staff',$data);
	}
	public function do_edit(){
		$staff_limit=$this->input->post('limit');
		if($staff_limit=="入库管理员"){
		   $staff_limit=2;
		}
		if($staff_limit=="出库管理员"){
		   $staff_limit=3;
		}
		if($staff_limit=="系统管理员"){
		   $staff_limit=1;
		}
		if($staff_limit=="普通员工"){
		   $staff_limit=0;
		}
		$staff_pre=$this -> session -> userdata('staff');
		if($staff_pre->staff_limit!=0 && $staff_limit==0){
			$data=array(
			    'staff_id'=>$this->input->post('id'),
				'staff_name'=>$this->input->post('name'),
				'staff_salary'=>$this->input->post('salary'),
				'staff_contact'=>$this->input->post('tel'),
				'staff_limit'=>$staff_limit
			);
			$staff_pre->admin_name="";
			$staff_pre->password="";
		}else if($staff_limit!=0){
			$data=array(
			    'staff_id'=>$this->input->post('id'),
				'staff_name'=>$this->input->post('name'),
				'staff_salary'=>$this->input->post('salary'),
				'staff_contact'=>$this->input->post('tel'),
				'staff_limit'=>$staff_limit,
				'admin_name'=>$this->input->post('admin_name'),
				'password'=>$this->input->post('pwd')
			);
		}
		$hid=$this->input->post('id');
		$this->staff_model->update('t_staff',$data,$hid);
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_staff();
		$data=array('staffs'=>$rs);
		$this->load->view('staff',$data);
   }
	public function delete($table_id){
		$this->staff_model->delete('t_staff',$table_id);
		redirect(site_url('admin/staff'));
	}
	public function add(){
		$this->load->view('add_staff');
	}
    public function do_add(){
    	$staff_limit=$this->input->post('limit');
		if($staff_limit==0){
			$data=array(
			    'staff_id'=>$this->input->post('id'),
				'staff_name'=>$this->input->post('name'),
				'staff_salary'=>$this->input->post('salary'),
				'staff_contact'=>$this->input->post('tel'),
				'staff_limit'=>$staff_limit
			);
		}else{
			$data=array(
			    'staff_id'=>$this->input->post('id'),
				'staff_name'=>$this->input->post('name'),
				'staff_salary'=>$this->input->post('salary'),
				'staff_contact'=>$this->input->post('tel'),
				'staff_limit'=>$staff_limit,
				'admin_name'=>$this->input->post('admin_name'),
				'password'=>$this->input->post('pwd')
			);
		}
		$this->staff_model->insert('t_staff',$data);
		redirect(site_url('admin/staff'));
	}
}
?>