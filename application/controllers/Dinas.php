<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dinas extends MY_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Dinas_model');
    $this->load->model('Login_model');
  }

  public function index(){
        $data['dinas'] = Dinas_model::all();
        $this->view('admin.dinas.index',$data);
  }

  public function create(){
        $this->view('admin.dinas.create');
  }

  public function store(){
    //validasi form
    $this->validate($this->input->post(), [
      'nama_dinas' => 'required|string',
    ]);
    //Proses Input
    Dinas_model::create($this->input->post());
    redirect('dinas');
  }

  public function edit($id= NULL){
    $data['dinas'] = Dinas_model::find($id);
    $this->view('admin.dinas.edit',$data);
  }

  public function update($id){
    $this->validate($this->input->post(), [
      'nama_dinas' => 'required|string',
    ]);
    Dinas_model::find($id)->update($this->input->post());
    redirect('dinas');
  }

  public function delete($id){
    Dinas_model::destroy($id);
    redirect('dinas');
  }

  public function login(){
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_cekDb');

    if ($this->form_validation->run() == FALSE) {
			    $this->view('auth.login.login_dinas');
		}else{
			if ($this->session->userdata('dinas')) {
				$session_data = $this->session->userdata('dinas');
          redirect('dinas');
      }
    }
  }

  public function cekDb($password){
		$user = $this->input->post('nama');
		$result = $this->Login_model->dinas($user,$password);
		if ($result) {
			foreach ($result as $row) {
				$sess = array(
					'id_admin' => $row->id_admin,
					'nama' => $row->nama,
					'email' => $row->email,
				 );
        $this->session->set_userdata('dinas',$sess);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb','Login Gagal');
			return false;
		}
  }

  public function logoutProcess() {
    $this->session->unset_userdata('dinas');
		$this->session->sess_destroy();
		redirect('beranda','refresh');
}

}
