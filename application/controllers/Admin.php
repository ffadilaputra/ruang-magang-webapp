<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Admin_model');
    $this->load->model('Login_model');
  }

  public function dashboard(){
      $this->authenticateAdmin();
      $data['admin'] = $this->session->userdata('admin');
      $this->view('admin.dashboard.index',$data);
  }

  public function profile(){
    $this->authenticateAdmin();
    $this->load->model('Admin_model');
    $data['admin'] = $this->session->userdata('admin');
    $data['profil'] = Admin_model::find($data['admin']['id_admin']);
    // /var_dump($data['admin']);
    $this->view('admin.dashboard.profil',$data);
  }

  public function update_admin($id){
    $this->load->model('Admin_model');
    $data['admin'] = $this->session->userdata('admin');
    $_POST['password'] = md5($_POST['password']);
    Admin_model::find($id)->update($this->input->post());
    redirect('admin/dashboard');
  }

  public function index(){
        $this->authenticateAdmin();
        $data['admin'] = $this->session->userdata('admin');
        $data['Admin'] = Admin_model::all();
        $this->view('admin.dinas.us_admin.index',$data);
  }

  public function create(){
        $this->authenticateAdmin();
        $data['admin'] = $this->session->userdata('admin');
        $this->view('admin.dinas.us_admin.create',$data);
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
    $this->authenticateAdmin();
    $data['admin'] = $this->session->userdata('admin');
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
					'id_admin' => $row->id_admin,
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
