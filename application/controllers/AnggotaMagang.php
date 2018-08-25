<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AnggotaMagang extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Anggota_model');
  }

  public function index(){
        $data['anggotamagang'] = Anggota_model::all();
        $this->view('admin.dinas.anggotamagang.index',$data);
  }

  public function create(){
        $this->view('admin.dinas.anggotamagang.create');
  }

  public function store(){
    //validasi form
    $this->validate($this->input->post(), [
      'nim' => 'required|string',
      'nama' => 'required|string',
      'universitas' => 'required|string',
    ]);
    //Proses Input
    Anggota_Model::create($this->input->post());
    redirect('anggotamagang');
  }

  public function edit($id= NULL){
    $data['anggotamagang'] = Anggota_model::find($id);
    $this->view('admin.dinas.anggotamagang.edit',$data);
  }

  public function update($id){
    $this->validate($this->input->post(), [
      'nim' => 'required|string',
      'nama' => 'required|string',
      'universitas' => 'required|string',
    ]);
    Anggota_Model::find($id)->update($this->input->post());
    redirect('anggotamagang');
  }

  public function delete($id){
    Anggota_Model::destroy($id);
    redirect('anggotamagang');
  }

}
