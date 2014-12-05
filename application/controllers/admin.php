<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$staff = $this -> session -> userdata("login_user");
		if($staff->staff_limit==1||$staff->staff_limit==4){
			redirect('admin/order');
		}
		if($staff->staff_limit==2){
			redirect('admin/instorage');
		}
		if($staff->staff_limit==3){
			redirect('admin/outstorage');
		}
	}
	public function login(){
		$this->load->view('login');
	}
	public function do_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('admin_model');
		$result = $this->admin_model->get_by_name_and_pwd($username, $password);
		if($result){
			$this -> session -> set_userdata('login_user', $result);
			redirect('admin/index');
		}else{
			$this -> login();
		}
	}
	public function vehicle_basics(){
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_basics();
		foreach ($rs as $row){
		   $drivername=$this->admin_model->get_by_driver_id('t_driver',$row->driver_id);
		   $row->drivername=$drivername;
		}
		$data=array('basics'=>$rs);
		$this->load->view('vehicle_basics.php',$data);
	}
	public function vehicle_repaired(){
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_repaired();
		$data=array('records'=>$rs);
		$this->load->view('vehicle_repaired.php',$data);
	}
	public function vehicle_illegal(){
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_illegal();
		$data=array('records'=>$rs);
		$this->load->view('vehicle_illegal.php',$data);
	}
	public function vehicle_driver(){
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_driver();
		$data=array('drivers'=>$rs);
		$this->load->view('vehicle_driver.php',$data);
	}
	public function staff(){
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_staff();
		$data=array('staffs'=>$rs);
		$this->load->view('staff',$data);
	}
    public function user(){
    	$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_user();
		$data=array('users'=>$rs);
		$this->load->view('user.php',$data);
	}
	public function order(){
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_order();
		foreach ($rs as $row){
		   $username=$this->admin_model->get_by_id('t_user',$row->user_id);
		   $row->username=$username;
		}
		$data=array('orders'=>$rs);
		$this->load->view('order.php',$data);
	}
	public function send(){
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_send();
		$data=array('records'=>$rs);
		$this->load->view('send.php',$data);
	}
	public function instorage(){
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_instorage();
		foreach ($rs as $row){
		   $staff=$this->admin_model->get_by_staff_id('t_staff',$row->staff_id);
		   $row->staff=$staff;
		}
		$data=array('records'=>$rs);
		$this->load->view('in_storage.php',$data);
	}
    public function outstorage(){
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_outstorage();
		$data=array('records'=>$rs);
		$this->load->view('out_storage.php',$data);
	}
	public function total(){
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_total();
		$data=array('records'=>$rs);
		$this->load->view('total.php',$data);
	}
}
?>