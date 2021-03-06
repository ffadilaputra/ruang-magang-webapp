<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usdinas extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Usdinas_model');
    $this->authenticateAdmin();
  }

  public function index(){
        $data['admin'] = $this->session->userdata('admin');
        $data['usdinas'] = Usdinas_model::all();
        $this->view('admin.dinas.us_dinas.index',$data);
  }

  public function create(){
        $data['admin'] = $this->session->userdata('admin');
        $this->view('admin.dinas.us_dinas.create',$data);
  }

  public function store(){
    //validasi form
    $this->validate($this->input->post(), [
      'nama' => 'required|string',
      'password' => 'required|string',
      'email' => 'required|string',
    ]);
    //Proses Input
    Usdinas_model::create($this->input->post());
    redirect('usdinas');
  }

  public function edit($id= NULL){
    $data['admin'] = $this->session->userdata('admin');
    $data['usdinas'] = Usdinas_model::find($id);
    $this->view('admin.dinas.us_dinas.edit',$data);
  }

  public function update($id){
    $this->validate($this->input->post(), [
      'nama' => 'required|string',
      // 'password' => 'required|string',
      'email' => 'required|string',
    ]);
    Usdinas_model::find($id)->update($this->input->post());
    redirect('usdinas');
  }

  public function delete($id){
    Usdinas_model::destroy($id);
    redirect('usdinas');
  }

}
