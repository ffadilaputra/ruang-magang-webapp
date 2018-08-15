<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ususer extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Ususer_model');
  }

  public function index(){
        $data['ususer'] = Ususer_model::all();
        $this->view('admin.dinas.us_user.index',$data);
  }

  public function create(){
        $this->view('admin.dinas.us_user.create');
  }

  public function store(){
    //validasi form
    $this->validate($this->input->post(), [
      'nama' => 'required|string',
      'password' => 'required|string',
      'email' => 'required|string',
    ]);
    //Proses Input
    Ususer_model::create($this->input->post());
    redirect('Ususer');
  }

  public function edit($id= NULL){
    $data['ususer'] = Ususer_model::find($id);
    $this->view('admin.dinas.us_user.edit',$data);
  }

  public function update($id){
    $this->validate($this->input->post(), [
      'nama' => 'required|string',
      // 'password' => 'required|string',
      'email' => 'required|string',
    ]);
    Ususer_model::find($id)->update($this->input->post());
    redirect('ususer');
  }

  public function delete($id){
    Ususer_model::destroy($id);
    redirect('ususer');
  }

}
