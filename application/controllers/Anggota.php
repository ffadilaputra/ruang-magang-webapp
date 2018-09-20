<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends MY_Controller {

  public function __construct(){
        parent::__construct();
        $this->load->model('Anggota_model');
        $this->load->model('Pengaju_model');
  }

  public function index(){
        $this->authenticateUser();
        $data['user'] = $this->session->userdata('logged_in');
        $data['anggotamagang'] = Anggota_model::where('fk_user',$data['user']['id_user'])->get();
        $data['hitung_anggota'] = Anggota_model::where('fk_user',$data['user']['id_user'])->count();
        $data['batas'] = Pengaju_model::where('id_user',$data['user']['id_user'])->select('jml_pengaju')->first();
        //var_dump($data['hitung_anggota']);

        $data['a'] = Pengaju_model::where('id_user',$data['user']['id_user'])->first();
        $this->view('user.anggotamagang.index',$data);
  }

  public function create(){
        $this->authenticateUser();
        $data['user'] = $this->session->userdata('logged_in');
        $this->view('user.anggotamagang.create',$data);
  }

  public function store(){
    $data['user'] = $this->session->userdata('logged_in');
    //validasi form
    $this->validate($this->input->post(), [
      'nim' => 'required|string',
      'nama_anggota' => 'required|string',
    ]);
    //Proses Input
    $_POST['fk_user'] = $data['user']['id_user'];
    Anggota_Model::create($this->input->post());
    redirect('anggota');
  }

  public function edit($id= NULL){
    $this->authenticateUser();
    $data['user'] = $this->session->userdata('logged_in');
    $data['anggotamagang'] = Anggota_model::find($id);
    $this->view('user.anggotamagang.edit',$data);
  }

  public function update($id){
    $this->validate($this->input->post(), [
      'nim' => 'required|string',
      'nama_anggota' => 'required|string',
    ]);
    Anggota_Model::find($id)->update($this->input->post());
    redirect('anggota');
  }

  public function delete($id){
    Anggota_Model::destroy($id);
    redirect('anggota');
  }
}
