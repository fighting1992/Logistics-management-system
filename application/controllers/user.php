<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	public function edit($table_id){
		$rs=$this->user_model->show_where('t_user',$table_id);
		$data=array(
		    'users'=>$rs
		    );
		$this->load->view('edit_user',$data);
	}
	public function do_edit(){
		$data=array(
		    'user_id'=>$this->input->post('id'),
			'username'=>$this->input->post('name'),
			'password'=>$this->input->post('pwd'),
			'email'=>$this->input->post('email'),
			'tel'=>$this->input->post('tel'),
			'home_add'=>$this->input->post('home_add')
		);
		$hid=$this->input->post('id');
		//echo $hid;
		$this->user_model->update('t_user',$data,$hid);
		$this->load->model('admin_model');
		$rs=$this->admin_model->get_all_user();
		$data=array('users'=>$rs);
		$this->load->view('user',$data);
   }
	public function delete($table_id){
		$this->user_model->delete('t_user',$table_id);
		redirect(site_url('admin/user'));
	}
	public function add(){
		$this->load->view('add_user');
	}
    public function do_add(){
		$data=array(
		    'user_id'=>$this->input->post('id'),
			'username'=>$this->input->post('name'),
			'password'=>$this->input->post('pwd'),
			'email'=>$this->input->post('email'),
			'tel'=>$this->input->post('tel'),
			'home_add'=>$this->input->post('home_add')
		);
		$this->user_model->insert('t_user',$data);
		redirect(site_url('admin/user'));
	}
}
?>