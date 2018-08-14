<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pengajuan_model');
  }

  public function index(){
        $data['pengajuan_pkl'] = Pengajuan_model::all();
        $this->view('admin.pengajuan_pkl.index',$data);
  }

  public function create(){
        $this->view('admin.pengajuan_pkl.create');
  }

  public function store(){
    //validasi form
    $this->validate($this->input->post(), [
      'id_pengaju' => 'required|string',
      'status_kesbangpol' => 'required|string',
	  'status_dinas' => 'required|string',
    ]);
    //Proses Input
    Pengajuan_model::create($this->input->post());
    redirect('pengajuan_pkl');
  }

  public function edit($id){
    $data['pengajuan_pkl'] = Pengajuan_model::find($id);
    $this->view('admin.pengajuan_pkl.edit',$data);
  }

  public function verifKesbangpol($id){
    Pengajuan_model::find($id)->update(['status_kesbangpol'=> 1]);
    redirect('pengajuan');
  }

  public function verifDinas($id){
    Pengajuan_model::find($id)->update(['status_dinas'=> 1]);
    redirect('pengajuan');
  }

  public function delete($id){
    Pengajuan_model::destroy($id);
    redirect('pengajuan');
  }

}
