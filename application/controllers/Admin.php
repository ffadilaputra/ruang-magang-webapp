<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
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

}
