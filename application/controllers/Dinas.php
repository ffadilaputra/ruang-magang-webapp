<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dinas extends MY_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Dinas_model');
    $this->load->model('Login_model');
  }

  public function dashboard(){
    $this->authenticate();
    $data['admin'] = $this->session->userdata('dinas');
    $this->view('dinas.dashboard.index',$data);
  }

  public function profile(){
    $this->authenticate();
    $this->load->model('Usdinas_model');
    $data['admin'] = $this->session->userdata('dinas');
    $data['profil'] = Usdinas_model::find($data['admin']['id_admin']);
    $this->view('dinas.dashboard.profile',$data);
  }

  public function update_dinas($id){
    $this->load->model('Usdinas_model');
    $data['user'] = $this->session->userdata('dinas');
    $_POST['password'] = md5($_POST['password']);
    Usdinas_model::find($id)->update($this->input->post());
    redirect('dinas/dashboard');
  }

  public function index(){
        $this->authenticate();
        $data['admin'] = $this->session->userdata('dinas');
        $data['dinas'] = Dinas_model::all();
        $this->view('dinas.index',$data);
  }

  public function create(){
        $this->authenticate();
        $data['admin'] = $this->session->userdata('dinas');
        $this->view('dinas.create',$data);
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
    $this->authenticate();
    $data['admin'] = $this->session->userdata('logged_in');
    $data['dinas'] = Dinas_model::find($id);
    $this->view('dinas.edit',$data);
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

    public function pengaju(){
      $this->authenticate();
      $this->load->model('Pengajuan_model');
      $this->load->model('Pengaju_model');
      $data['admin'] = $this->session->userdata('dinas');
      $data['pengajuan_pkl'] = Pengajuan_model::all();
      $this->view('dinas.pengajuan.index',$data);
    }

    public function show($id){
      $this->authenticate();
      $this->load->model('Pengajuan_model');
      $this->load->model('Pengaju_model');
      $data['admin'] = $this->session->userdata('dinas');
      $data['pengajuan_pkl'] = Pengajuan_model::find($id);
      $this->view('dinas.pengajuan.show',$data);
    }

}
