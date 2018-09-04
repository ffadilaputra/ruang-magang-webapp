<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Admin_model');
    $this->load->model('Login_model');

  }

  public function tes(){
    var_dump($_SESSION);
  }

  public function index(){
        $data['Admin'] = Admin_model::all();
        $this->view('admin.dinas.us_admin.index',$data);
  }

  public function create(){
        $this->view('admin.dinas.us_admin.create');
  }

  public function store(){
    //validasi form
    $this->validate($this->input->post(), [
      'nama' => 'required|string',
      'password' => 'required|string',
      'email' => 'required|string',
    ]);
    //Proses Input
    Admin_model::create($this->input->post());
    redirect('Admin');
  }

  public function edit($id= NULL){
    $data['Admin'] = Admin_model::find($id);
    $this->view('admin.dinas.us_admin.edit',$data);
  }

  public function update($id){
    $this->validate($this->input->post(), [
       'nama' => 'required|string',
      // 'password' => 'required|string',
      'email' => 'required|string',
    ]);
    Admin_model::find($id)->update($this->input->post());
    redirect('Admin');
  }

  public function delete($id){
    Admin_model::destroy($id);
    redirect('Admin');
  }

  public function login(){
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_cekDb');

    if ($this->form_validation->run() == FALSE) {
			    $this->view('auth.login.login_ksb');
		}else{
			if ($this->session->userdata('admin')) {
				$session_data = $this->session->userdata('admin');
          redirect('admin');
      }
    }
  }

  public function cekDb($password){
		$user = $this->input->post('nama');
		$result = $this->Login_model->admin($user,$password);
		if ($result) {
			foreach ($result as $row) {
				$sess = array(
					'id_admin' => $row->id_user,
					'nama' => $row->nama,
					'email' => $row->email,
				 );
        $this->session->set_userdata('admin',$sess);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb','Login Gagal');
			return false;
		}
  }

  public function logoutProcess() {
    $this->session->unset_userdata('admin');
		$this->session->sess_destroy();
		redirect('login','refresh');
}

}
