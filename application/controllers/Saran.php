<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends MY_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('Saran_model');
  	}

  public function index(){
    $this->authenticateAdmin();
    $data['admin'] = $this->session->userdata('admin');
    $data['saran'] = Saran_model::all();
    $this->view('admin.saran.index',$data);
  }

  public function detail($id){
    $this->authenticateAdmin();
    $data['admin'] = $this->session->userdata('admin');
    $data['satan'] = Saran_model::find($id);
    $this->view('admin.saran.detail',$data);
  }

	public function create(){
     //validasi form
    $this->validate($this->input->post(), [
      'nama' => 'required|string',
      'email' => 'required|string',
      'keterangan' => 'required|string',
    ]);
    //Proses Input
    Saran_model::create($this->input->post());
    redirect('beranda');
  }

}

/* End of file Saran.php */
/* Location: ./application/controllers/Saran.php */
