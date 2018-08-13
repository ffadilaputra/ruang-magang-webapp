<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subdinas extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Subdinas_model');
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

}
