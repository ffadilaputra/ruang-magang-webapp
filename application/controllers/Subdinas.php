<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subdinas extends MY_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Dinas_model');
    $this->load->model('Subdinas_model');
    $this->authenticate();
  }

  public function index(){
        $data['admin'] = $this->session->userdata('dinas');
        $data['subdinas'] = Subdinas_model::all();
        $this->view('admin.dinas.subdinas.index',$data);
  }

  public function create(){
        $data['admin'] = $this->session->userdata('dinas');
        $data['dinas'] = Dinas_model::all();
        $this->view('admin.dinas.subdinas.create',$data);
  }

  public function store(){
    //validasi form
    $this->validate($this->input->post(), [
      'nama_dinas' => 'required|string',
      'nama_sub_bidang' => 'required|string',
      'kuota' => 'required|string',
    ]);
    //Proses Input
    Subdinas_model::create($this->input->post());
    redirect('subdinas');
  }

  public function edit($id= NULL){
    $data['admin'] = $this->session->userdata('dinas');
    $data['subdinas'] = Subdinas_model::find($id);
    $this->view('admin.dinas.subdinas.edit',$data);
  }

  public function update($id){
    $this->validate($this->input->post(), [
      'nama_dinas' => 'required|string',
      'nama_sub_bidang' => 'required|string',
      'kuota' => 'required|string',
    ]);
    Subdinas_model::find($id)->update($this->input->post());
    redirect('subdinas');
  }

  public function delete($id){
    Subdinas_model::destroy($id);
    redirect('subdinas');
  }

}
